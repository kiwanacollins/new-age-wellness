FROM node:22-bookworm-slim AS assets

WORKDIR /app

COPY package*.json vite.config.js ./
COPY packages/Webkul/Shop/package*.json packages/Webkul/Shop/vite.config.js ./packages/Webkul/Shop/
COPY packages/Webkul/Admin/package*.json packages/Webkul/Admin/vite.config.js ./packages/Webkul/Admin/
COPY packages/Webkul/Installer/package*.json packages/Webkul/Installer/vite.config.js ./packages/Webkul/Installer/

RUN npm install --no-fund --no-audit \
    && cd packages/Webkul/Shop && npm ci \
    && cd /app/packages/Webkul/Admin && npm ci \
    && cd /app/packages/Webkul/Installer && npm install --no-fund --no-audit

COPY . .

RUN npm run build \
    && cd packages/Webkul/Shop && npm run build \
    && cd /app/packages/Webkul/Admin && npm run build \
    && cd /app/packages/Webkul/Installer && npm run build


FROM php:8.3-fpm-bookworm

ENV DEBIAN_FRONTEND=noninteractive \
    COMPOSER_ALLOW_SUPERUSER=1 \
    PHP_OPCACHE_VALIDATE_TIMESTAMPS=0

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y --no-install-recommends \
        ca-certificates \
        curl \
        git \
        imagemagick \
        libcurl4-openssl-dev \
        libfreetype6-dev \
        libgmp-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libmagickwand-dev \
        libonig-dev \
        libpng-dev \
        libwebp-dev \
        libxml2-dev \
        libzip-dev \
        nginx \
        redis-tools \
        supervisor \
        unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        calendar \
        curl \
        exif \
        gd \
        gmp \
        intl \
        mbstring \
        mysqli \
        opcache \
        pcntl \
        pdo_mysql \
        soap \
        sockets \
        zip \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

COPY . .

RUN cp .env.example .env \
    && composer install \
        --no-dev \
        --no-interaction \
        --prefer-dist \
        --optimize-autoloader \
    && rm -rf /root/.composer/cache

COPY --from=assets /app/public/build ./public/build
COPY --from=assets /app/public/themes ./public/themes

COPY docker/coolify/nginx.conf /etc/nginx/conf.d/default.conf
COPY docker/coolify/php.ini /usr/local/etc/php/conf.d/99-coolify.ini
COPY docker/coolify/php-fpm.conf /usr/local/etc/php-fpm.d/zz-coolify.conf
COPY docker/coolify/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/coolify/entrypoint.sh /usr/local/bin/coolify-entrypoint.sh

RUN chmod +x /usr/local/bin/coolify-entrypoint.sh \
    && rm -f /etc/nginx/sites-enabled/default /etc/nginx/conf.d/bagisto.conf \
    && mkdir -p /run/php /var/log/supervisor /var/log/nginx \
    && mkdir -p storage/framework/{cache/data,sessions,testing,views} storage/logs bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R ug+rwX storage bootstrap/cache

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=30s --retries=3 \
    CMD curl -fsS http://127.0.0.1/health || exit 1

ENTRYPOINT ["/usr/local/bin/coolify-entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf", "-n"]
