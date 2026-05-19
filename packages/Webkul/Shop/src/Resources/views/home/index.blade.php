@php
    $channel = core()->getCurrentChannel();

    $iconSvg = static function (string $name, string $class = 'h-5 w-5'): string {
        return match ($name) {
            'leaf' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 4C12 4 6 8 4 16c4 2 10 1 14-3 3-3 3-7 2-9Z\"/><path d=\"M8 14c2 0 4-1 6-3\"/></svg>",
            'cart' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"9\" cy=\"20\" r=\"1.5\"/><circle cx=\"18\" cy=\"20\" r=\"1.5\"/><path d=\"M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h8.8a2 2 0 0 0 2-1.6L22 7H7\"/></svg>",
            'truck' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"1\" y=\"4\" width=\"13\" height=\"10\" rx=\"2\"/><path d=\"M14 8h4l4 4v2h-8\"/><circle cx=\"6\" cy=\"17\" r=\"2\"/><circle cx=\"18\" cy=\"17\" r=\"2\"/></svg>",
            'lock' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"4\" y=\"10\" width=\"16\" height=\"10\" rx=\"2\"/><path d=\"M8 10V7a4 4 0 0 1 8 0v3\"/></svg>",
            'phone' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"7\" y=\"2\" width=\"10\" height=\"20\" rx=\"2\"/><path d=\"M11 18h2\"/></svg>",
            'support' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 12a8 8 0 0 1 16 0\"/><rect x=\"2\" y=\"11\" width=\"4\" height=\"6\" rx=\"1\"/><rect x=\"18\" y=\"11\" width=\"4\" height=\"6\" rx=\"1\"/><path d=\"M12 20h2a2 2 0 0 0 2-2\"/></svg>",
            'shield-check' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6l8-3Z\"/><path d=\"m9 12 2 2 4-4\"/></svg>",
            'award' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"8\" r=\"5\"/><path d=\"m8.5 13.5-1.5 7L12 18l5 2.5-1.5-7\"/></svg>",
            'activity' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M3 12h4l2-4 4 8 2-4h6\"/></svg>",
            'lungs' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 3v7\"/><path d=\"M12 10c-2-3-6-3-6 2v5a3 3 0 0 0 3 3h1\"/><path d=\"M12 10c2-3 6-3 6 2v5a3 3 0 0 1-3 3h-1\"/></svg>",
            'stethoscope' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M6 3v6a4 4 0 0 0 8 0V3\"/><circle cx=\"18\" cy=\"8\" r=\"2\"/><path d=\"M18 10v3a5 5 0 0 1-10 0\"/></svg>",
            'refresh' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 12a9 9 0 1 1-3-6.7\"/><path d=\"M21 3v6h-6\"/></svg>",
            'home' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m3 11 9-8 9 8\"/><path d=\"M5 10v10h14V10\"/></svg>",
            'bolt' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M13 2 4 14h6l-1 8 9-12h-6z\"/></svg>",
            'moon' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z\"/></svg>",
            'run' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"16\" cy=\"5\" r=\"2\"/><path d=\"m12 8 2 2-2 3 4 2-1 4\"/><path d=\"m8 22 2-6 3-3\"/></svg>",
            'user' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"8\" r=\"4\"/><path d=\"M4 21a8 8 0 0 1 16 0\"/></svg>",
            'target' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"8\"/><circle cx=\"12\" cy=\"12\" r=\"4\"/><circle cx=\"12\" cy=\"12\" r=\"1\"/></svg>",
            'reply' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m9 17-5-5 5-5\"/><path d=\"M20 18v-2a7 7 0 0 0-7-7H4\"/></svg>",
            'briefcase' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"7\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M9 7V5a3 3 0 0 1 6 0v2\"/></svg>",
            'city' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M3 21V7l7-3v17\"/><path d=\"M10 21V11l11-4v14\"/></svg>",
            'globe' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M3 12h18\"/><path d=\"M12 3a14 14 0 0 1 0 18\"/><path d=\"M12 3a14 14 0 0 0 0 18\"/></svg>",
            'check' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m20 6-11 11-5-5\"/></svg>",
            'star' => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"m12 2.5 2.9 5.9 6.5.9-4.7 4.6 1.1 6.5L12 17.3 6.2 20.4l1.1-6.5L2.6 9.3l6.5-.9L12 2.5Z\"/></svg>",
            'delivery-skyline' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M8 52V30h8v22h4V18h12v34h4V24h10v28h4V34h6v18H8Zm16-24h4v4h-4v-4Zm0 8h4v4h-4v-4Zm12-8h4v4h-4v-4Zm0 8h4v4h-4v-4Z\"/></svg>",
            'delivery-palm' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M31 58h4V40c6 1 12-1 15-6-5 1-9 0-13-3 5-1 10-4 11-10-5 3-10 3-15 2 4-4 5-10 2-15-3 4-6 7-11 8-1-6-4-11-10-14 0 6 2 11 7 15-6 0-11 2-15 6 5 2 10 2 15 1-4 3-7 7-7 13 4-2 8-3 12-3 2 0 4 0 6 1v23Z\"/></svg>",
            'delivery-sail' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M33 10v24h17L33 10Zm-4 5L16 35h13V15Zm-15 24c3 5 9 8 18 8s15-3 18-8H14Zm-2 10h40v4H12v-4Z\"/></svg>",
            'delivery-peak' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M8 48 28 20l8 10 5-7 15 25H8Zm24-21 4 5-4 3-4-3 4-5Z\"/></svg>",
            'delivery-pines' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M17 54h8v-7h8l-8-10h6l-8-10h5l-7-9-7 9h5l-8 10h6l-8 10h8v7Zm24 0h8v-6h7l-7-9h5l-7-9h4l-6-8-6 8h4l-7 9h5l-7 9h7v6Z\"/></svg>",
            'delivery-river' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M44 8c-9 4-16 12-16 21 0 8 6 14 12 18 4 3 7 6 7 9H16c7-3 11-7 11-12 0-4-3-7-7-11-6-5-13-11-13-23 13 2 26 2 37-2Zm3 35c5 0 10 3 13 8H45c3-2 3-5 2-8Z\"/></svg>",
            'delivery-leaf' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"M50 12C31 12 18 23 15 40c7 5 16 7 24 5 10-3 17-12 17-25 0-3-1-6-2-8h-4Zm-24 25c7-1 14-5 21-12-3 9-10 16-19 20l-2-8Z\"/></svg>",
            'delivery-kenya' => "<svg class=\"{$class}\" viewBox=\"0 0 64 64\" fill=\"currentColor\" aria-hidden=\"true\"><path d=\"m28 6 8 2 4 7 9 5-2 10 7 7-5 10-10 8-13 3-9-9 1-10-6-8 6-9 10-4 0-12Z\"/></svg>",
            default => "<svg class=\"{$class}\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"10\"/></svg>",
        };
    };

    $deliveryCities = [
        ['delivery-skyline', 'Nairobi', 'Same-day &amp; next-day delivery'],
        ['delivery-palm', 'Mombasa', '1–2 business days'],
        ['delivery-sail', 'Kisumu', '2–3 business days'],
        ['delivery-peak', 'Nakuru', '1–2 business days'],
        ['delivery-pines', 'Eldoret', '2–3 business days'],
        ['delivery-river', 'Thika', '1–2 business days'],
        ['delivery-leaf', 'Kiambu', 'Same-day available'],
        ['delivery-kenya', 'All Kenya', '1–5 business days'],
    ];

    $deliveryPins = [
        ['Eldoret', '2–3 days', 'top-[17%]', 'left-[30%]'],
        ['Kisumu', '2–3 days', 'top-[41%]', 'left-[18%]'],
        ['Nakuru', '1–2 days', 'top-[42%]', 'left-[46%]'],
        ['Nairobi', 'Same-day &amp;<br>next-day', 'top-[59%]', 'left-[42%]'],
        ['Thika', '1–2 days', 'top-[49%]', 'left-[69%]'],
        ['Kiambu', 'Same-day<br>available', 'top-[78%]', 'left-[49%]'],
        ['Mombasa', '1–2 days', 'top-[86%]', 'left-[78%]'],
    ];

    $contactNumber = core()->getConfigData('sales.shipping.origin.contact') ?: '254700000000';
    $normalizedWhatsAppNumber = preg_replace('/\D+/', '', $contactNumber);

    if (preg_match('/^(?:0|254)?(7\d{8}|1\d{8})$/', $normalizedWhatsAppNumber, $matches)) {
        $normalizedWhatsAppNumber = '254'.$matches[1];
    }

    $whatsAppOrderUrl = 'https://wa.me/'.$normalizedWhatsAppNumber.'?text='.rawurlencode("Hi! I'd like to place a wellness order");
    $whatsAppProductsUrl = 'https://wa.me/'.$normalizedWhatsAppNumber.'?text='.rawurlencode("Hi! I'd like to order wellness products");
    $whatsAppBrandOrderUrl = 'https://wa.me/'.$normalizedWhatsAppNumber.'?text='.rawurlencode("Hi! I'd like to order wellness products from New Age Wellness Solutions");
    $whatsAppEnquiryUrl = 'https://wa.me/'.$normalizedWhatsAppNumber.'?text='.rawurlencode("Hi! I'd like to enquire about wellness products");

    $heroImages = [
        ['src' => asset('images/hero-modern-wellness-products-banner.webp'),         'alt' => 'Premium Wellness Products Kenya — New Age Wellness Solutions'],
        ['src' => asset('images/hero-oxygen-wellness-devices-kenya-banner.webp'),     'alt' => 'Oxygen & Breathing Wellness Devices Kenya'],
        ['src' => asset('images/hero-energy-recovery-gadgets-kenya-banner.webp'),     'alt' => 'Energy Recovery Gadgets Kenya'],
        ['src' => asset('images/hero-wellness-at-home-kenya-banner.webp'),            'alt' => 'Wellness at Home Kenya'],
    ];
@endphp

{{-- ═══════════════════════════════════════════════════════════════
     SEO META — Title, Description, Keywords, OG, Schema.org
══════════════════════════════════════════════════════════════════ --}}
@push('meta')
    <meta name="title"       content="Buy Premium Health Gadgets &amp; Wellness Products in Kenya | New Age Wellness Solutions" />
    <meta name="description" content="Kenya's trusted store for health gadgets, oxygen devices, pain relief gadgets, blood circulation machines &amp; home healthcare products. Fast delivery across Nairobi, Mombasa, Kisumu &amp; all Kenya." />
    <meta name="keywords"    content="health gadgets Kenya, wellness products Kenya, buy wellness devices online Kenya, home healthcare products Kenya, oxygen devices Kenya, pain relief gadgets Kenya, blood circulation machine Kenya" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Buy Premium Health Gadgets &amp; Wellness Products in Kenya" />
    <meta property="og:description" content="Kenya's trusted wellness store — fast delivery nationwide, M-Pesa accepted." />
    <meta property="og:image"       content="{{ asset('images/hero-modern-wellness-products-banner.webp') }}" />
    <link rel="canonical" href="{{ url('/') }}" />

    {{-- WebSite Schema --}}
    <script type="application/ld+json">
    {
        "@@context":"https://schema.org",
        "@@type":"WebSite",
        "name":"New Age Wellness Solutions",
        "url":"{{ url('/') }}",
        "description":"Kenya's trusted store for premium health gadgets and wellness products",
        "potentialAction":{
            "@@type":"SearchAction",
            "target":"{{ route('shop.search.index') }}?query={search_term_string}",
            "query-input":"required name=search_term_string"
        }
    }
    </script>

    {{-- Organization Schema --}}
    <script type="application/ld+json">
    {
        "@@context":"https://schema.org",
        "@@type":"Organization",
        "name":"New Age Wellness Solutions",
        "url":"{{ url('/') }}",
        "areaServed":{"@@type":"Country","name":"Kenya"},
        "logo":"{{ asset('images/hero-modern-wellness-products-banner.webp') }}"
    }
    </script>

    {{-- FAQ Schema --}}
    <script type="application/ld+json">
    {
        "@@context":"https://schema.org",
        "@@type":"FAQPage",
        "mainEntity":[
            {"@@type":"Question","name":"Do you deliver wellness products across Kenya?","acceptedAnswer":{"@@type":"Answer","text":"Yes, we deliver to Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Thika, Kiambu and all major towns in Kenya."}},
            {"@@type":"Question","name":"Do you accept M-Pesa payments?","acceptedAnswer":{"@@type":"Answer","text":"Yes, we accept M-Pesa, card payments, and cash on delivery."}},
            {"@@type":"Question","name":"Are your health gadgets original?","acceptedAnswer":{"@@type":"Answer","text":"Yes, all our products are genuine, expert-reviewed wellness devices sourced from trusted manufacturers."}},
            {"@@type":"Question","name":"How long does delivery take in Nairobi?","acceptedAnswer":{"@@type":"Answer","text":"Same-day or next-day delivery in Nairobi. 1–3 business days for other towns."}},
            {"@@type":"Question","name":"Can I pay on delivery?","acceptedAnswer":{"@@type":"Answer","text":"Yes, cash on delivery is available for orders within Nairobi and selected towns."}}
        ]
    }
    </script>
@endPush

@push('styles')
    <style>
        /* ── Hero slider ── */
        .naw-hero-img { transition: opacity 0.8s ease, transform 0.8s ease; }
        .naw-hero-img.is-hidden { opacity: 0; transform: scale(1.03); position: absolute; inset: 0; }
        .naw-hero-img.is-visible { opacity: 1; transform: scale(1); }

        /* ── Wellness goal cards ── */
        .naw-goal-card { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .naw-goal-card:hover { transform: translateY(-5px); box-shadow: 0 16px 48px rgba(0,0,0,.10); }

        /* ── Category cards ── */
        .naw-cat-card { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .naw-cat-card:hover { transform: translateY(-4px); box-shadow: 0 12px 36px rgba(0,0,0,.10); }

        /* ── FAQ details ── */
        .naw-faq details summary::-webkit-details-marker { display: none; }
        .naw-faq details summary { list-style: none; }
        .naw-faq details[open] summary .naw-faq-chevron { transform: rotate(180deg); }
        .naw-faq details summary .naw-faq-chevron { transition: transform .3s ease; }

        /* ── Testimonial card ── */
        .naw-star { color: #f59e0b; }

        /* ── WhatsApp floating ── */
        .naw-whatsapp-float {
            position: fixed; bottom: 24px; right: 24px; z-index: 9999;
            background: #25d366; border-radius: 50%;
            width: 60px; height: 60px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 20px rgba(37,211,102,.5);
            transition: transform 0.2s ease;
        }
        .naw-whatsapp-float:hover { transform: scale(1.1); }

        /* ── Pulse animation for CTA ── */
        @keyframes nawPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(22,163,74,.4); }
            50%       { box-shadow: 0 0 0 10px rgba(22,163,74,0); }
        }
        .naw-pulse { animation: nawPulse 2s infinite; }

        /* ── Final CTA ── */
        .naw-final-cta {
            position: relative;
            overflow: hidden;
            background-color: #16924a;
            background-image:
                radial-gradient(circle at 20% 18%, rgba(255, 255, 255, 0.08) 0, rgba(255, 255, 255, 0.08) 3px, transparent 3px),
                radial-gradient(circle at 78% 72%, rgba(255, 255, 255, 0.07) 0, rgba(255, 255, 255, 0.07) 4px, transparent 4px);
            background-size: 220px 220px, 260px 260px;
        }
        .naw-final-cta::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: 0.16;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='3.2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M50 52c16 0 27 12 27 29v12c0 10 8 18 18 18h12'/%3E%3Cpath d='M106 111h16l8-16 16 32 9-18h17'/%3E%3Cpath d='M206 60c-6 0-11 2-14 7-3-5-8-7-14-7-11 0-19 8-19 19 0 23 33 39 33 39s33-16 33-39c0-11-8-19-19-19Z'/%3E%3Cpath d='M52 187c33-24 55-23 78 0'/%3E%3Cpath d='M82 159c0 16-13 29-29 29 0-16 13-29 29-29Z'/%3E%3Cpath d='M181 161v22a12 12 0 0 1-24 0v-22'/%3E%3Ccircle cx='211' cy='179' r='10'/%3E%3Cpath d='M211 189v13a16 16 0 0 1-16 16h-14'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 260px 260px;
            background-position: center;
            mix-blend-mode: soft-light;
            pointer-events: none;
        }
        .naw-final-cta::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0)),
                linear-gradient(90deg, rgba(7, 94, 44, 0.16), rgba(7, 94, 44, 0.04));
            pointer-events: none;
        }

        /* ── Why choose us ── */
        .naw-why-section {
            position: relative;
            overflow: hidden;
            background: #f8fafc;
        }
        .naw-why-grid-fade {
            position: absolute;
            inset: 0;
            z-index: 0;
            background-image:
                linear-gradient(to right, #e2e8f0 1px, transparent 1px),
                linear-gradient(to bottom, #e2e8f0 1px, transparent 1px);
            background-size: 20px 30px;
            -webkit-mask-image: radial-gradient(ellipse 70% 60% at 50% 0%, #000 60%, transparent 100%);
            mask-image: radial-gradient(ellipse 70% 60% at 50% 0%, #000 60%, transparent 100%);
            pointer-events: none;
        }
        .naw-why-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(3px);
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.05);
        }
        .naw-why-icon {
            box-shadow: inset 0 0 0 1px rgba(22, 163, 74, 0.08);
        }

        /* ── Delivery section ── */
        .naw-delivery-section {
            background:
                linear-gradient(90deg, rgba(255,255,255,0.98) 0%, rgba(255,255,255,0.94) 48%, rgba(239, 248, 244, 0.82) 100%),
                radial-gradient(circle at 82% 18%, rgba(219, 234, 254, 0.72), transparent 28%),
                linear-gradient(180deg, #f8fbf8 0%, #ffffff 100%);
        }
        .naw-delivery-grid {
            display: grid;
            grid-template-columns: minmax(0, 0.58fr) minmax(0, 0.42fr);
            gap: 1.5rem;
            align-items: stretch;
        }
        .naw-delivery-container {
            max-width: 1800px;
        }
        .naw-delivery-badge {
            background: linear-gradient(180deg, #f3fbf5 0%, #e5f6e8 100%);
            box-shadow: inset 0 0 0 1px rgba(34, 197, 94, 0.16), 0 14px 30px rgba(22, 101, 52, 0.08);
        }
        .naw-hero-title {
            font-size: clamp(2.5rem, 5vw, 5.25rem);
            line-height: 0.94;
            letter-spacing: 0;
        }
        .naw-delivery-title {
            font-size: clamp(2.5rem, 5vw, 5.25rem);
            line-height: 0.94;
            letter-spacing: 0;
        }
        .naw-delivery-copy {
            font-size: clamp(1.25rem, 1.6vw, 2rem);
        }
        .naw-delivery-map-wrap {
            min-height: 690px;
        }
        .naw-delivery-visual {
            position: relative;
            min-height: 690px;
        }
        .naw-delivery-cards {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 1rem;
        }
        .naw-delivery-card {
            border: 1px solid rgba(22, 101, 52, 0.08);
            box-shadow: 0 16px 32px rgba(15, 23, 42, 0.08);
        }
        .naw-delivery-city-dot {
            box-shadow: inset 0 0 0 1px rgba(34, 197, 94, 0.12);
        }
        .naw-delivery-pin {
            background: linear-gradient(180deg, #0f6c35 0%, #064e27 100%);
            box-shadow: 0 18px 30px rgba(6, 78, 39, 0.24);
            max-width: 10rem;
        }
        .naw-delivery-pin::before {
            content: "";
            position: absolute;
            left: -0.95rem;
            top: 0.95rem;
            width: 1rem;
            height: 1rem;
            border-radius: 9999px;
            background: #fff;
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.12);
        }
        .naw-delivery-pin::after {
            content: "";
            position: absolute;
            left: -0.72rem;
            top: 1.42rem;
            width: 0.35rem;
            height: 0.35rem;
            border-radius: 9999px;
            background: #16a34a;
            box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.72);
        }
        .naw-delivery-arc {
            border-color: rgba(255, 255, 255, 0.9);
            border-style: dashed;
        }
        .naw-delivery-skyline {
            background:
                linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(226, 239, 230, 0.68) 100%),
                url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='520' height='220' viewBox='0 0 520 220'%3E%3Cg fill='%2394a3b8' fill-opacity='.18'%3E%3Crect x='20' y='118' width='28' height='88' rx='2'/%3E%3Crect x='58' y='88' width='50' height='118' rx='3'/%3E%3Crect x='122' y='132' width='36' height='74' rx='2'/%3E%3Crect x='174' y='98' width='58' height='108' rx='3'/%3E%3Crect x='246' y='74' width='40' height='132' rx='3'/%3E%3Crect x='298' y='122' width='34' height='84' rx='2'/%3E%3Crect x='346' y='44' width='62' height='162' rx='3'/%3E%3Crect x='422' y='110' width='48' height='96' rx='2'/%3E%3Crect x='478' y='138' width='24' height='68' rx='2'/%3E%3Cpath d='M377 22h4v22h-4zM365 44h28v162h-28z'/%3E%3C/g%3E%3C/svg%3E") bottom center / cover no-repeat;
            opacity: 0.85;
        }
        .naw-delivery-payment-band {
            box-shadow: 0 10px 28px rgba(15, 23, 42, 0.06);
            border-radius: 1.5rem;
            background: #ffffff;
        }
        .naw-delivery-payment-grid {
            display: grid;
            grid-template-columns: minmax(300px, 1.22fr) repeat(4, minmax(0, 0.94fr));
            gap: 0;
            align-items: stretch;
        }
        .naw-delivery-map {
            max-width: 660px;
        }
        .naw-delivery-truck {
            bottom: 0.5rem;
            right: -1rem;
            width: 70%;
            min-width: 280px;
            max-width: 600px;
        }
        .naw-payment-logo {
            min-height: 5.25rem;
            border-left: 1px solid rgba(148, 163, 184, 0.28);
            border-radius: 0;
            background: transparent;
            box-shadow: none;
            padding: 0.35rem 0.75rem;
            transition: transform 0.2s ease;
        }
        .naw-payment-logo:hover {
            transform: translateY(-1px);
        }
        .naw-payment-logo img {
            display: block;
            width: 100%;
            max-width: 128px;
            height: 2.15rem;
            object-fit: contain;
            object-position: center;
        }
        .naw-payment-logo--cod img {
            max-width: 86px;
            height: 2.4rem;
        }
        .naw-payment-intro {
            border-right: 1px solid rgba(148, 163, 184, 0.28);
            padding: 0.8rem 1.25rem 0.8rem 0.25rem;
        }
        .naw-payment-cta {
            margin-top: 1rem;
            display: flex;
            justify-content: flex-end;
        }
        @media (max-width: 1024px) {
            .naw-delivery-grid {
                grid-template-columns: 1fr;
            }
            .naw-delivery-cards {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
            .naw-delivery-map-wrap,
            .naw-delivery-visual {
                min-height: 560px;
            }
            .naw-delivery-payment-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .naw-delivery-payment-grid > :first-child {
                grid-column: 1 / -1;
            }
            .naw-payment-intro {
                border-right: 0;
                padding: 0.95rem 0.15rem 1.15rem;
            }
            .naw-payment-cta {
                justify-content: center;
            }
        }
        @media (max-width: 767px) {
            .naw-delivery-cards {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .naw-delivery-title {
                font-size: 2.5rem;
            }
            .naw-delivery-copy {
                font-size: 1rem;
            }
            .naw-delivery-map-wrap,
            .naw-delivery-visual {
                min-height: 390px;
            }
            .naw-delivery-truck {
                min-width: 220px;
                width: 62%;
            }
            .naw-delivery-map-pin {
                display: none;
            }
            .naw-delivery-payment-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 0;
            }
            .naw-delivery-pin::before,
            .naw-delivery-pin::after {
                display: none;
            }
            .naw-payment-logo {
                min-height: 5.5rem;
                padding: 0.65rem 0.6rem;
                border-left: 0;
                border-top: 1px solid rgba(148, 163, 184, 0.18);
            }
            .naw-payment-logo img {
                max-width: 108px;
                height: 2rem;
            }
            .naw-payment-logo--cod img {
                max-width: 72px;
                height: 2.2rem;
            }
            .naw-payment-intro {
                padding: 0.9rem 0.15rem 1rem;
            }
            .naw-payment-cta {
                justify-content: stretch;
            }
            .naw-payment-cta a {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
@endPush

@push('scripts')
    @if(! empty($categories))
        <script>
            localStorage.setItem('categories', JSON.stringify(@json($categories)));
        </script>
    @endif
@endpush

<x-shop::layouts>

    <x-slot:title>Buy Premium Health Gadgets &amp; Wellness Products in Kenya | New Age Wellness Solutions</x-slot>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 1 · HERO — Two-column: Text left · Image slider right
    ═════════════════════════════════════════════════════════════════════ --}}
    <section
        id="hero"
        class="relative overflow-hidden bg-gradient-to-br from-green-50 via-white to-emerald-50"
        aria-label="New Age Wellness Solutions Hero"
    >
        <div class="container mx-auto flex min-h-[520px] flex-col items-center gap-8 px-4 py-12 md:flex-row md:gap-12 md:px-8 lg:min-h-[580px] lg:px-16 lg:py-16">

            {{-- Left: Text content --}}
            <div class="z-10 flex w-full flex-col gap-6 md:w-1/2">
                {{-- H1 --}}
                <h1 class="naw-hero-title font-dmserif font-bold text-gray-900">
                    Buy Premium Health Gadgets &amp; Wellness Products in Kenya
                </h1>

                {{-- Sub-headline --}}
                <p class="text-lg leading-relaxed text-gray-600 max-sm:text-base">
                    Discover modern wellness solutions designed to support better breathing, circulation, recovery, relaxation, and everyday health. Shop trusted wellness gadgets with fast delivery across Kenya.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-wrap gap-4">
                    <a
                        href="{{ route('shop.search.index') }}"
                        class="naw-pulse inline-flex items-center gap-2 rounded-xl bg-green-600 px-7 py-3.5 text-base font-semibold text-white shadow-md transition-colors hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                    >
                        {!! $iconSvg('cart', 'h-5 w-5') !!}
                        Shop Health Gadgets
                    </a>
                    <a
                        href="{{ route('shop.search.index') }}"
                        class="inline-flex items-center gap-2 rounded-xl border-2 border-green-600 px-7 py-3.5 text-base font-semibold text-green-700 transition-colors hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                    >
                        {!! $iconSvg('leaf', 'h-5 w-5') !!}
                        Explore Wellness Products
                    </a>
                </div>

                {{-- Trust micro-badges --}}
                <div class="flex flex-wrap gap-3 pt-1">
                    @foreach ([
                        ['truck', 'Fast Kenya Delivery'],
                        ['support', 'Expert Support'],
                    ] as $badge)
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white px-3 py-1 text-xs font-medium text-gray-700 shadow-sm ring-1 ring-gray-100">
                            {!! $iconSvg($badge[0], 'h-3.5 w-3.5') !!}
                            {{ $badge[1] }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Right: Rotating hero images --}}
            <div class="relative w-full overflow-hidden rounded-2xl shadow-2xl md:w-1/2">
                <v-hero-slider :images='@json($heroImages)'>
                    {{-- Shimmer placeholder shown before Vue mounts --}}
                    <div class="shimmer aspect-video w-full rounded-2xl"></div>
                </v-hero-slider>
            </div>
        </div>

        {{-- Decorative blob --}}
        <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-green-100 opacity-40 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-emerald-100 opacity-40 blur-3xl"></div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         TRUST ROW — Nationwide delivery · Trusted products · Support
    ═════════════════════════════════════════════════════════════════════ --}}
    <div class="border-y border-gray-100 bg-white py-5 shadow-sm" aria-label="Store trust badges">
        <div class="container mx-auto flex flex-wrap justify-center gap-x-10 gap-y-4 px-4 md:px-8">
            @foreach ([
                ['truck', 'Nationwide Delivery in Kenya',  'Same-day Nairobi · 1–3 days elsewhere'],
                ['shield-check', 'Trusted Wellness Products',     'Expert-reviewed &amp; quality-assured'],
                ['support', 'Expert Customer Support',       'Before &amp; after-purchase guidance'],
                ['award', 'Premium Quality',               'Genuine gadgets, satisfaction guaranteed'],
            ] as $trust)
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-50 text-green-700">{!! $iconSvg($trust[0], 'h-5 w-5') !!}</span>
                    <div>
                        <p class="text-sm font-semibold text-gray-800">{{ $trust[1] }}</p>
                        <p class="text-xs text-gray-500">{!! $trust[2] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 2 · FEATURED CATEGORIES
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="categories" class="bg-gray-50 py-16 max-md:py-10" aria-labelledby="categories-heading">
        <div class="container mx-auto px-4 md:px-8">
            <div class="mb-10 text-center">
                <h2 id="categories-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    Shop Wellness Solutions by Category
                </h2>
                <p class="mt-2 text-gray-500">Find the perfect health gadget for your wellness journey</p>
            </div>

            <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-6">
                @foreach ([
                    ['icon' => 'activity', 'title' => 'Health Gadgets',            'kw' => 'health gadgets Kenya',        'href' => route('shop.search.index', ['query' => 'health gadgets']), 'color' => 'bg-blue-50 border-blue-100'],
                    ['icon' => 'lungs', 'title' => 'Oxygen &amp; Breathing',      'kw' => 'oxygen devices Kenya',        'href' => route('shop.search.index', ['query' => 'oxygen']),         'color' => 'bg-sky-50 border-sky-100'],
                    ['icon' => 'stethoscope', 'title' => 'Pain Relief &amp; Recovery',  'kw' => 'pain relief gadgets Kenya',   'href' => route('shop.search.index', ['query' => 'pain relief']),    'color' => 'bg-red-50 border-red-100'],
                    ['icon' => 'refresh', 'title' => 'Blood Circulation',           'kw' => 'blood circulation Kenya',     'href' => route('shop.search.index', ['query' => 'circulation']),    'color' => 'bg-pink-50 border-pink-100'],
                    ['icon' => 'home', 'title' => 'Home Healthcare',             'kw' => 'home healthcare Kenya',       'href' => route('shop.search.index', ['query' => 'home healthcare']), 'color' => 'bg-emerald-50 border-emerald-100'],
                    ['icon' => 'bolt', 'title' => 'Energy &amp; Supplements',    'kw' => 'wellness supplements Kenya',  'href' => route('shop.search.index', ['query' => 'supplements']),    'color' => 'bg-amber-50 border-amber-100'],
                ] as $cat)
                    <a
                        href="{{ $cat['href'] }}"
                        class="naw-cat-card flex flex-col items-center gap-3 rounded-2xl border-2 {{ $cat['color'] }} bg-white p-5 text-center no-underline shadow-sm"
                        aria-label="{{ strip_tags($cat['kw']) }}"
                    >
                        <span class="flex h-14 w-14 items-center justify-center rounded-full bg-white text-blue-700 shadow-sm">{!! $iconSvg($cat['icon'], 'h-7 w-7') !!}</span>
                        <span class="text-sm font-semibold text-gray-800 leading-snug">{!! $cat['title'] !!}</span>
                        <span class="text-xs text-gray-400 leading-tight">{!! $cat['kw'] !!}</span>
                    </a>
                @endforeach
            </div>

            {{-- Categories banner image --}}
            <div class="mt-10 overflow-hidden rounded-2xl shadow-md">
                <img
                    src="{{ asset('images/homepage-wellness-product-categories-banner.webp') }}"
                    alt="Shop Wellness Solutions by Category — New Age Wellness Solutions Kenya"
                    class="h-auto w-full object-cover"
                    loading="lazy"
                    decoding="async"
                    width="1717"
                    height="916"
                />
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 3 · BEST SELLING PRODUCTS (live from database)
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="best-sellers" aria-labelledby="bestsellers-heading">
        <div class="container mx-auto px-4 md:px-8">
            <div class="mb-2 mt-16 text-center max-md:mt-8">
                <h2 id="bestsellers-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    Best Selling Wellness Products in Kenya
                </h2>
                <p class="mt-2 text-gray-500">Popular among Kenyan households — trusted, reviewed, fast delivery</p>
            </div>
        </div>

        <x-shop::products.carousel
            title=""
            :src="route('shop.api.products.index', ['sort' => 'total_sold', 'new' => 1])"
            :navigation-link="route('shop.search.index', ['sort' => 'total_sold'])"
            aria-label="Best Selling Wellness Products in Kenya"
        />
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 4 · SHOP BY WELLNESS GOAL
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="wellness-goals" class="bg-gradient-to-b from-white to-green-50 py-16 max-md:py-10" aria-labelledby="goals-heading">
        <div class="container mx-auto px-4 md:px-8">
            <div class="mb-10 text-center">
                <h2 id="goals-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    Find the Right Wellness Solution for Your Needs
                </h2>
                <p class="mt-2 text-gray-500">Browse by wellness goal — we have products for every health journey</p>
            </div>

            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-6">
                @foreach ([
                    ['icon' => 'moon', 'title' => 'Better Sleep',         'href' => route('shop.search.index', ['query' => 'sleep wellness'])],
                    ['icon' => 'stethoscope', 'title' => 'Pain Relief',          'href' => route('shop.search.index', ['query' => 'pain relief'])],
                    ['icon' => 'refresh', 'title' => 'Improved Circulation', 'href' => route('shop.search.index', ['query' => 'blood circulation'])],
                    ['icon' => 'run', 'title' => 'Recovery &amp; Relaxation', 'href' => route('shop.search.index', ['query' => 'recovery'])],
                    ['icon' => 'bolt', 'title' => 'Energy &amp; Vitality', 'href' => route('shop.search.index', ['query' => 'energy vitality'])],
                    ['icon' => 'user', 'title' => 'Elderly Care',         'href' => route('shop.search.index', ['query' => 'elderly care'])],
                ] as $goal)
                    <a
                        href="{{ $goal['href'] }}"
                        class="naw-goal-card flex flex-col items-center gap-3 rounded-2xl bg-white px-4 py-6 text-center no-underline shadow-sm ring-1 ring-gray-100"
                        aria-label="{!! $goal['title'] !!} products Kenya"
                    >
                        <span class="flex h-14 w-14 items-center justify-center rounded-full bg-green-50 text-green-700">{!! $iconSvg($goal['icon'], 'h-7 w-7') !!}</span>
                        <span class="text-sm font-semibold text-gray-800 leading-snug">{!! $goal['title'] !!}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 5 · WHY CHOOSE US
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="why-choose-us" class="naw-why-section py-16 max-md:py-10" aria-labelledby="why-us-heading">
        <div class="naw-why-grid-fade"></div>

        <div class="container relative z-10 mx-auto px-4 md:px-8">
            <div class="mb-10 text-center">
                <h2 id="why-us-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    Why Kenyans Trust New Age Wellness Solutions
                </h2>
                <p class="mt-2 text-gray-500">We're not just a store — we're your wellness partner</p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['target', 'Premium Wellness Products',      'Carefully selected health gadgets and wellness solutions reviewed by our expert team.'],
                    ['truck', 'Fast Delivery Across Kenya',     'Nairobi, Mombasa, Kisumu, Nakuru, Eldoret &amp; more. Same-day delivery available in Nairobi.'],
                    ['support', 'Expert Customer Support',        'Professional guidance before and after your purchase. We\'re here to help you get the most value.'],
                    ['award', 'Trusted Wellness Store',         'Focused on quality, comfort, and modern health solutions for Kenyan households.'],
                    ['reply', 'Hassle-free Returns',           'Not satisfied? We offer easy returns and exchanges so you can shop with complete confidence.'],
                ] as $why)
                    <div class="naw-why-card flex gap-4 rounded-2xl p-5">
                        <span class="naw-why-icon flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-700">{!! $iconSvg($why[0], 'h-6 w-6') !!}</span>
                        <div>
                            <h3 class="font-semibold text-gray-900">{{ $why[1] }}</h3>
                            <p class="mt-1 text-sm text-gray-600">{!! $why[2] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         TRUST BANNER — Expert-reviewed image + messaging
    ═════════════════════════════════════════════════════════════════════ --}}
    <section class="relative overflow-hidden bg-green-700 py-16 max-md:py-10" aria-label="Expert reviewed health products Kenya">
        <div class="container mx-auto flex flex-col items-center gap-10 px-4 md:flex-row md:gap-12 md:px-8">
            <div class="w-full md:w-1/2">
                <img
                    src="{{ asset('images/trust-expert-reviewed-health-products-kenya-banner.webp') }}"
                    alt="Expert Reviewed Health Products Kenya — New Age Wellness Solutions"
                    class="h-auto w-full rounded-2xl shadow-2xl"
                    loading="lazy"
                    decoding="async"
                    width="1536"
                    height="1024"
                />
            </div>
            <div class="w-full text-white md:w-1/2">
                <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-green-300">Expert Reviewed</p>
                <h2 class="font-dmserif text-3xl font-bold leading-tight max-md:text-2xl">
                    Every Product is Vetted by Our Wellness Experts
                </h2>
                <p class="mt-4 text-lg leading-relaxed text-green-100">
                    We don't just sell gadgets — we rigorously test and review every wellness product we stock. Only the best health devices make it onto our shelves, ensuring you get genuine, effective solutions for your wellbeing.
                </p>
                <ul class="mt-6 space-y-3">
                    @foreach ([
                        'Quality tested before listing',
                        'Certified health &amp; wellness devices only',
                        'Transparent product descriptions',
                        'Real customer reviews &amp; ratings',
                    ] as $point)
                        <li class="flex items-center gap-2 text-green-100">
                            <span class="text-green-300">{!! $iconSvg('check', 'h-4 w-4') !!}</span>
                            {!! $point !!}
                        </li>
                    @endforeach
                </ul>
                <a
                    href="{{ route('shop.search.index') }}"
                    class="mt-8 inline-flex items-center gap-2 rounded-xl bg-white px-7 py-3.5 font-semibold text-green-700 shadow-md transition-colors hover:bg-green-50"
                >
                    Browse All Products
                </a>
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 6 · EDUCATIONAL / BLOG SECTION
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="wellness-tips" class="naw-why-section py-16 max-md:py-10" aria-labelledby="blog-heading">
        <div class="naw-why-grid-fade"></div>

        <div class="container relative z-10 mx-auto px-4 md:px-8">
            <div class="mb-10 text-center">
                <h2 id="blog-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    Wellness Tips &amp; Health Guides
                </h2>
                <p class="mt-2 text-gray-500">Expert knowledge to help you make the best wellness choices</p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['phone', 'Best Health Gadgets for Home Use in Kenya',            'Discover the top-rated health gadgets every Kenyan household should have for daily wellness support.'],
                    ['refresh', 'How to Improve Blood Circulation Naturally',            'Learn practical tips and wellness devices that help boost blood circulation for better energy and health.'],
                    ['lungs', 'Benefits of Oxygen Therapy at Home',                   'Find out how home oxygen therapy devices can improve breathing, energy levels, and overall wellbeing.'],
                    ['briefcase', 'Best Wellness Products for Busy Professionals',         'For the modern Kenyan professional — wellness solutions that fit your lifestyle and busy schedule.'],
                    ['stethoscope', 'Top Pain Relief Devices in Kenya',                     'Explore the most effective pain relief gadgets available online in Kenya, reviewed by our wellness team.'],
                    ['home', 'Home Wellness Gadgets Every Family Should Have',        'Build a healthier home with these essential wellness devices for families across Kenya.'],
                ] as $i => $blog)
                    <article class="naw-why-card flex flex-col rounded-2xl p-6 transition-shadow hover:shadow-md">
                        <span class="naw-why-icon mb-3 inline-flex h-10 w-10 items-center justify-center rounded-full bg-green-50 text-green-700">{!! $iconSvg($blog[0], 'h-5 w-5') !!}</span>
                        <h3 class="font-semibold text-gray-900 leading-snug">{{ $blog[1] }}</h3>
                        <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{ $blog[2] }}</p>
                        <a
                            href="{{ route('shop.search.index') }}"
                            class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-green-600 hover:text-green-700"
                        >
                            Shop Related Products <span class="icon-arrow-right text-base"></span>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         PROMO BANNER — 10% off + urgency
    ═════════════════════════════════════════════════════════════════════ --}}
    <section class="relative overflow-hidden" aria-label="Health gadgets 10 percent off promotion Kenya">
        <div class="relative">
            <img
                src="{{ asset('images/promo-health-gadgets-10-percent-off-kenya-banner.webp') }}"
                alt="Health Gadgets 10% Off Promotion — New Age Wellness Solutions Kenya"
                class="h-auto max-h-[420px] w-full object-cover"
                loading="lazy"
                decoding="async"
                width="1373"
                height="1146"
            />
            <div class="absolute inset-0 flex items-center bg-gradient-to-r from-black/70 to-transparent">
                <div class="px-8 text-white md:px-16">
                    <span class="mb-3 inline-block rounded-full bg-amber-400 px-4 py-1 text-sm font-bold text-black uppercase tracking-wide">Limited Offer</span>
                    <h2 class="font-dmserif text-4xl font-bold leading-tight max-md:text-2xl max-sm:text-xl">
                        Save 10% on<br>Health Gadgets Today
                    </h2>
                    <p class="mt-3 max-w-md text-lg text-gray-200 max-sm:text-base">
                        Get your favourite wellness products at a special price. Fast delivery across Kenya.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <a
                            href="{{ route('shop.search.index') }}"
                            class="inline-flex items-center gap-2 rounded-xl bg-amber-400 px-7 py-3.5 font-bold text-black shadow-md transition-colors hover:bg-amber-500"
                        >
                            {!! $iconSvg('cart', 'h-5 w-5') !!}
                            Shop the Sale
                        </a>
                        <a
                            href="{{ $whatsAppProductsUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 rounded-xl bg-white/20 px-7 py-3.5 font-semibold text-white backdrop-blur-sm transition-colors hover:bg-white/30"
                        >
                            {!! $iconSvg('phone', 'h-5 w-5') !!}
                            Order via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 7 · TESTIMONIALS
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="testimonials" class="bg-white py-16 max-md:py-10" aria-labelledby="testimonials-heading">
        <div class="container mx-auto px-4 md:px-8">
            <div class="mb-10 text-center">
                <h2 id="testimonials-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    What Our Customers Say
                </h2>
                <p class="mt-2 text-gray-500">Real Kenyans. Real results. Real wellness.</p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    [
                        'name'    => 'Grace W.',
                        'city'    => 'Nairobi',
                        'product' => 'Foot Massager for Blood Circulation',
                        'stars'   => 5,
                        'review'  => 'Delivery to Nairobi was very fast and the foot massager helped my mother feel much better. Her circulation has improved significantly. Highly recommend this store!',
                        'avatar'  => 'G',
                        'color'   => 'bg-green-600',
                    ],
                    [
                        'name'    => 'John M.',
                        'city'    => 'Mombasa',
                        'product' => 'Oxygen Wellness Device',
                        'stars'   => 5,
                        'review'  => 'I ordered the oxygen device and it arrived in 2 days. The quality is excellent and my breathing has improved. Payment was easy via M-Pesa. I will order again!',
                        'avatar'  => 'J',
                        'color'   => 'bg-blue-600',
                    ],
                    [
                        'name'    => 'Aisha K.',
                        'city'    => 'Kisumu',
                        'product' => 'Pain Relief Recovery Gadget',
                        'stars'   => 5,
                        'review'  => 'The customer support was amazing. They helped me choose the right pain relief gadget for my back pain. After two weeks of use, the difference is night and day!',
                        'avatar'  => 'A',
                        'color'   => 'bg-amber-600',
                    ],
                ] as $testimonial)
                    <div
                        class="flex flex-col gap-4 rounded-2xl bg-gray-50 p-6 shadow-sm ring-1 ring-gray-100"
                        itemscope
                        itemtype="https://schema.org/Review"
                    >
                        {{-- Stars --}}
                        <div class="flex gap-0.5">
                            @for ($s = 0; $s < $testimonial['stars']; $s++)
                                <span class="naw-star text-lg">{!! $iconSvg('star', 'h-4 w-4') !!}</span>
                            @endfor
                        </div>

                        {{-- Review text --}}
                        <blockquote
                            class="text-sm leading-relaxed text-gray-700"
                            itemprop="reviewBody"
                        >
                            "{{ $testimonial['review'] }}"
                        </blockquote>

                        {{-- Product purchased --}}
                        <p class="text-xs text-gray-400 italic">
                            Purchased: <span itemprop="name">{{ $testimonial['product'] }}</span>
                        </p>

                        {{-- Reviewer --}}
                        <div class="flex items-center gap-3 border-t border-gray-100 pt-3">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full {{ $testimonial['color'] }} text-sm font-bold text-white"
                                aria-hidden="true"
                            >
                                {{ $testimonial['avatar'] }}
                            </div>
                            <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <p class="text-sm font-semibold text-gray-900" itemprop="name">{{ $testimonial['name'] }}</p>
                                <p class="text-xs text-gray-500">{{ $testimonial['city'] }}, Kenya</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 8 · DELIVERY COVERAGE
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="delivery" class="naw-delivery-section overflow-hidden py-16 max-md:py-10" aria-labelledby="delivery-heading">
        <div class="naw-delivery-container mx-auto px-4 md:px-8">
            <div class="naw-delivery-grid">
                <div class="relative z-10">
                    <div class="naw-delivery-badge inline-flex items-center gap-3 rounded-full px-6 py-2 text-xs font-semibold uppercase tracking-[0.22em] text-green-800 md:text-sm">
                        {!! $iconSvg('truck', 'h-5 w-5') !!}
                        Fast. Reliable. Nationwide
                    </div>

                    <div class="mt-8 max-w-4xl">
                        <h2 id="delivery-heading" class="naw-delivery-title font-dmserif font-bold text-green-950">
                            Fast Delivery
                            <span class="block text-green-600">Across Kenya</span>
                        </h2>
                        <p class="naw-delivery-copy mt-7 max-w-2xl leading-relaxed text-slate-600">
                            We deliver wellness products to every major city and town in Kenya
                        </p>
                    </div>

                    <div class="naw-delivery-cards mt-8">
                        @foreach ($deliveryCities as $city)
                            <div class="naw-delivery-card rounded-2xl bg-white p-4 md:p-5">
                                <span class="naw-delivery-city-dot mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-50 text-green-700 md:h-14 md:w-14">
                                    {!! $iconSvg($city[0], 'h-6 w-6 md:h-7 md:w-7') !!}
                                </span>
                                <p class="mt-3 text-center text-lg font-semibold leading-tight text-green-950 md:text-xl">{{ $city[1] }}</p>
                                <div class="mt-3 flex items-start justify-center gap-2 text-slate-600">
                                    <span class="mt-0.5 shrink-0 text-green-600">{!! $iconSvg('phone', 'h-4.5 w-4.5 md:h-5 md:w-5') !!}</span>
                                    <p class="text-center text-xs leading-snug md:text-sm">{!! $city[2] !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="naw-delivery-map-wrap relative px-0 py-0">
                    <div class="naw-delivery-skyline pointer-events-none absolute inset-x-[-4rem] bottom-0 h-72"></div>
                    <div class="naw-delivery-visual">
                        <img
                            src="/images/kenya-map.png"
                            alt="Kenya delivery coverage map"
                            class="naw-delivery-map absolute inset-x-0 top-0 z-10 mx-auto w-full drop-shadow-[0_24px_45px_rgba(22,101,52,0.18)]"
                        />

                        @foreach ($deliveryPins as $pin)
                            <div class="naw-delivery-map-pin absolute z-20 {{ $pin[2] }} {{ $pin[3] }} max-lg:scale-90 max-md:scale-75">
                                <div class="naw-delivery-pin relative rounded-2xl px-3 py-2.5 text-white">
                                    <p class="text-base font-semibold leading-none md:text-lg">{{ $pin[0] }}</p>
                                    <p class="mt-1 text-xs leading-tight text-green-50 md:text-sm">{!! $pin[1] !!}</p>
                                </div>
                            </div>
                        @endforeach

                        <img
                            src="/images/new-wellness-delivery-truck.png"
                            alt="New Age Wellness delivery truck"
                            class="naw-delivery-truck absolute z-20"
                        />
                    </div>
                </div>
            </div>

            <div class="naw-delivery-payment-band mt-8 border border-green-100 px-4 py-4 md:px-5 md:py-5">
                <div class="naw-delivery-payment-grid">
                    <div class="naw-payment-intro flex items-center gap-4 text-green-950 max-md:gap-4">
                        <span class="flex h-16 w-16 shrink-0 items-center justify-center overflow-hidden rounded-full border border-green-100 bg-green-50 md:h-18 md:w-18">
                            <img src="{{ asset('images/secure.svg') }}" alt="Secure payment icon" class="h-10 w-10 object-contain md:h-11 md:w-11" loading="lazy" />
                        </span>
                        <div>
                            <p class="text-[1.45rem] font-semibold leading-tight text-emerald-950 md:text-[1.85rem]">
                                Secure &amp; Convenient
                                <span class="block">Payment Options</span>
                            </p>
                            <p class="mt-2 max-w-xl text-sm leading-6 text-slate-500 md:hidden">
                                M-Pesa, Visa, Mastercard, Cash on Delivery
                            </p>
                        </div>
                    </div>

                    <div class="naw-payment-logo flex flex-col items-center justify-center gap-2 text-center">
                        <img src="{{ asset('images/m-pesa.png') }}" alt="M-Pesa logo" loading="lazy" />
                        <span class="text-sm text-slate-700">M-Pesa</span>
                    </div>
                    <div class="naw-payment-logo flex flex-col items-center justify-center gap-2 text-center">
                        <img src="{{ asset('images/visa.png') }}" alt="Visa logo" loading="lazy" />
                        <span class="text-sm text-slate-700">Visa</span>
                    </div>
                    <div class="naw-payment-logo flex flex-col items-center justify-center gap-2 text-center">
                        <img src="{{ asset('images/master-card.png') }}" alt="Mastercard logo" loading="lazy" />
                        <span class="text-sm text-slate-700">Mastercard</span>
                    </div>
                    <div class="naw-payment-logo naw-payment-logo--cod flex flex-col items-center justify-center gap-2 text-center">
                        <img src="{{ asset('images/cash-on-delivery.png') }}" alt="Cash on delivery icon" loading="lazy" />
                        <span class="text-sm text-slate-700">Cash on Delivery</span>
                    </div>
                </div>

                <div class="naw-payment-cta">
                    <a
                        href="{{ $whatsAppOrderUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 rounded-full bg-[#25d366] px-5 py-2.5 text-sm font-semibold text-white shadow-md transition-colors hover:bg-[#1ebe5c]"
                    >
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Order via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 9 · FAQ
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="faq" class="bg-white py-16 max-md:py-10" aria-labelledby="faq-heading">
        <div class="container mx-auto max-w-3xl px-4 md:px-8">
            <div class="mb-10 text-center">
                <h2 id="faq-heading" class="font-dmserif text-3xl font-bold text-gray-900 max-md:text-2xl">
                    Frequently Asked Questions
                </h2>
                <p class="mt-2 text-gray-500">Everything you need to know before you order</p>
            </div>

            <div class="naw-faq space-y-3">
                @foreach ([
                    ['Do you deliver wellness products across Kenya?',             'Yes! We deliver to Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, Thika, Kiambu and all major towns across Kenya. Same-day delivery is available in Nairobi.'],
                    ['Do you accept M-Pesa payments?',                             'Absolutely. We accept M-Pesa, Visa, Mastercard, and cash on delivery. M-Pesa is our most popular payment method.'],
                    ['Are your health gadgets original and genuine?',              'Yes. Every product on our store is carefully vetted and sourced from trusted manufacturers. We only list genuine, quality wellness devices.'],
                    ['How long does delivery take in Nairobi?',                    'Same-day or next-day delivery in Nairobi CBD and most estates. We\'ll confirm your delivery timeline when you place your order.'],
                    ['Can I order wellness products online in Kenya?',             'Yes! You can order directly on our website, or via WhatsApp. We make it easy to shop for wellness products from anywhere in Kenya.'],
                    ['Which wellness gadgets are best for elderly people?',        'We recommend foot massagers, blood circulation devices, TENS pain relief machines, and home oxygen therapy devices for elderly customers. Our team can advise you.'],
                    ['Do your products come with a warranty?',                     'Yes, most of our wellness gadgets come with manufacturer warranties. Check the individual product pages for warranty details.'],
                    ['Can I pay on delivery?',                                     'Yes, cash on delivery is available for orders in Nairobi and selected towns. Contact us via WhatsApp to confirm availability for your location.'],
                ] as $faq)
                    <details class="group rounded-xl border border-gray-100 bg-gray-50 px-5 py-4 shadow-sm">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold text-gray-900 hover:text-green-700 focus:outline-none">
                            <span>{{ $faq[0] }}</span>
                            <span class="naw-faq-chevron shrink-0 text-green-600">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                        </summary>
                        <p class="mt-3 text-sm leading-relaxed text-gray-600">{{ $faq[1] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ════════════════════════════════════════════════════════════════════
         SECTION 10 · FINAL CTA
    ═════════════════════════════════════════════════════════════════════ --}}
    <section id="final-cta" class="naw-final-cta py-16 text-white max-md:py-10" aria-labelledby="cta-heading">
        <div class="container relative z-10 mx-auto px-4 text-center md:px-8">
            <h2 id="cta-heading" class="font-dmserif text-4xl font-bold max-md:text-2xl">
                Start Your Wellness Journey Today
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-lg text-green-100">
                Shop trusted health gadgets and wellness products designed to support healthier living across Kenya.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a
                    href="{{ route('shop.search.index') }}"
                    class="naw-pulse inline-flex items-center gap-2 rounded-xl bg-white px-8 py-4 text-lg font-bold text-green-700 shadow-lg transition-colors hover:bg-green-50"
                >
                    {!! $iconSvg('cart', 'h-5 w-5') !!}
                    Shop Now
                </a>
                <a
                    href="{{ $whatsAppBrandOrderUrl }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 rounded-xl bg-[#25d366] px-8 py-4 text-lg font-bold text-white shadow-lg transition-colors hover:bg-[#1ebe5c]"
                >
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Talk on WhatsApp
                </a>
            </div>
        </div>
    </section>

    {{-- WhatsApp Floating Button --}}
    <a
        href="{{ $whatsAppEnquiryUrl }}"
        target="_blank"
        rel="noopener noreferrer"
        class="naw-whatsapp-float"
        aria-label="Chat with us on WhatsApp"
    >
        <svg class="h-7 w-7 fill-white" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    {{-- ════════════════════════════════════════════════════════════════════
         VUE COMPONENT — Hero image slider (v-hero-slider)
    ═════════════════════════════════════════════════════════════════════ --}}
    @push('scripts')
        <script type="text/x-template" id="v-hero-slider-template">
            <div class="relative aspect-video w-full overflow-hidden rounded-2xl bg-gray-100">
                <template v-for="(img, idx) in images" :key="idx">
                    <img
                        :src="img.src"
                        :alt="img.alt"
                        class="absolute inset-0 h-full w-full object-cover transition-all duration-700"
                        :class="{
                            'opacity-100 scale-100 z-10': idx === current,
                            'opacity-0 scale-105 z-0':  idx !== current,
                        }"
                        :fetchpriority="idx === 0 ? 'high' : 'low'"
                        :loading="idx === 0 ? 'eager' : 'lazy'"
                        decoding="async"
                    />
                </template>

                {{-- Dot pagination --}}
                <div class="absolute bottom-4 left-0 z-20 flex w-full justify-center gap-2">
                    <button
                        v-for="(img, idx) in images"
                        :key="idx"
                        class="h-2.5 w-2.5 rounded-full transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-1"
                        :class="idx === current ? 'bg-white scale-125' : 'bg-white/50'"
                        :aria-label="'Go to slide ' + (idx + 1)"
                        @click="go(idx)"
                    ></button>
                </div>
            </div>
        </script>

        <script type="module">
            app.component('v-hero-slider', {
                template: '#v-hero-slider-template',

                props: {
                    images: { type: Array, default: () => [] },
                },

                data() {
                    return {
                        current: 0,
                        timer:   null,
                    };
                },

                mounted() {
                    this.startTimer();
                },

                beforeUnmount() {
                    clearInterval(this.timer);
                },

                methods: {
                    startTimer() {
                        this.timer = setInterval(() => {
                            this.current = (this.current + 1) % this.images.length;
                        }, 4500);
                    },

                    go(idx) {
                        clearInterval(this.timer);
                        this.current = idx;
                        this.startTimer();
                    },
                },
            });
        </script>
    @endpush

</x-shop::layouts>
