#!/usr/bin/env bash
set -euo pipefail

APP_DIR="/var/www/html"

log() {
    echo "[coolify-entrypoint] $(date '+%Y-%m-%d %H:%M:%S') $*"
}

wait_for_mysql() {
    local host="${DB_HOST:-mysql}"
    local port="${DB_PORT:-3306}"
    local user="${DB_USERNAME:-root}"
    local pass="${DB_PASSWORD:-}"
    local database="${DB_DATABASE:-}"

    log "Waiting for MySQL at ${host}:${port}..."

    for attempt in $(seq 1 60); do
        if php -r "try { new PDO('mysql:host=${host};port=${port};dbname=${database}', '${user}', '${pass}'); echo 'ok'; } catch (Throwable \$e) { exit(1); }" >/dev/null 2>&1; then
            log "MySQL is reachable."
            return 0
        fi

        sleep 2
    done

    log "MySQL did not become reachable in time."
    return 1
}

wait_for_redis() {
    if [[ "${REDIS_HOST:-}" == "" ]]; then
        return 0
    fi

    log "Waiting for Redis at ${REDIS_HOST}:${REDIS_PORT:-6379}..."

    for attempt in $(seq 1 30); do
        if redis-cli -h "${REDIS_HOST}" -p "${REDIS_PORT:-6379}" ping >/dev/null 2>&1; then
            log "Redis is reachable."
            return 0
        fi

        sleep 1
    done

    log "Redis did not become reachable in time."
    return 1
}

wait_for_elasticsearch() {
    if [[ -z "${ELASTICSEARCH_HOST:-}" ]]; then
        return 0
    fi

    log "Waiting for Elasticsearch at ${ELASTICSEARCH_HOST}..."

    for attempt in $(seq 1 30); do
        if curl -fsS "${ELASTICSEARCH_HOST}" >/dev/null 2>&1; then
            log "Elasticsearch is reachable."
            return 0
        fi

        sleep 2
    done

    log "Elasticsearch did not become reachable in time."
    return 1
}

cd "${APP_DIR}"

mkdir -p storage/framework/{cache/data,sessions,testing,views} storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwX storage bootstrap/cache
rm -f public/*.hot public/*-vite.hot

if [[ ! -f .env ]]; then
    cp .env.example .env
fi

existing_app_key="$(sed -n 's/^APP_KEY=//p' .env | head -n 1)"

if [[ -z "${APP_KEY:-}" && -z "${existing_app_key}" ]]; then
    if [[ "${AUTO_GENERATE_APP_KEY:-false}" == "true" ]]; then
        log "Generating APP_KEY because AUTO_GENERATE_APP_KEY=true."
        php artisan key:generate --force --no-interaction
    else
        log "APP_KEY is missing. Set APP_KEY in Coolify or enable AUTO_GENERATE_APP_KEY=true."
        exit 1
    fi
fi

# If APP_KEY env var is empty but .env has a key (e.g. auto-generated above),
# export it so that config:cache picks up the .env value instead of the empty env var.
if [[ -z "${APP_KEY:-}" ]]; then
    _dotenv_key="$(sed -n 's/^APP_KEY=//p' .env | head -n 1)"
    if [[ -n "${_dotenv_key}" ]]; then
        log "Exporting APP_KEY from .env so config cache uses the correct key."
        export APP_KEY="${_dotenv_key}"
    fi
fi

wait_for_mysql
wait_for_redis || true
wait_for_elasticsearch || true

php artisan storage:link --no-interaction >/dev/null 2>&1 || true

if [[ "${APP_AUTO_MIGRATE:-true}" == "true" ]]; then
    log "Running database migrations..."
    php artisan migrate --force --no-interaction
fi

if [[ "${APP_RUN_INDEXERS:-false}" == "true" ]]; then
    log "Running full indexers..."
    php artisan index:index --mode=full --no-interaction
fi

if [[ "${APP_RUN_OPTIMIZE:-true}" == "true" ]]; then
    log "Refreshing framework caches..."
    php artisan optimize:clear --no-interaction || true
    php artisan optimize --no-interaction
fi

exec "$@"
