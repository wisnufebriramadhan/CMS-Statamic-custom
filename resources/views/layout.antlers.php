<!doctype html>
<html lang="{{ site:short_locale }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/assets/img/toru-icon.png" rel="icon">
    <link href="/assets/img/toru-icon.png" rel="apple-touch-icon">

    <!-- Fonts (preconnect dulu, lalu load dengan display=swap) -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&family=Nunito:wght@400;500;600;700&family=Sora:wght@300;400;600;700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&family=Nunito:wght@400;500;600;700&family=Sora:wght@300;400;600;700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
    </noscript>
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- CSS utama — load di semua halaman -->
    <link href="/assets/css/main.css?v=1.11" rel="stylesheet">
    <link href="/assets/css/custom.css?v=8.101" rel="stylesheet">

    <!-- CSS per halaman — hanya load jika dibutuhkan -->
    {{ if segment_1 == 'digital-solution' }}
    <link rel="stylesheet" href="/assets/css/digital-solution.css?v=1110">
    {{ /if }}
    {{ if segment_1 == 'torucorp-businesses' }}
    <link rel="stylesheet" href="/assets/css/business.css?v=121214">
    {{ /if }}
    {{ if segment_1 == 'portofolio' or segment_1 == 'residential' or segment_1 == 'villa-luxury-house' or segment_1 == 'industrial' or segment_1 == 'office' or segment_1 == 'restaurant-and-coffee-shop' or segment_1 == 'interior' or segment_1 == 'our-workshop' }}
    <link rel="stylesheet" href="/assets/css/portofolio.css?v=1410112112">
    {{ /if }}
    {{ if segment_1 == 'whistleblowing' }}
    <link rel="stylesheet" href="/assets/css/whistleblower.css?v=1621031">
    {{ /if }}
    {{ if segment_1 == 'about-torucorp' }}
    <link rel="stylesheet" href="/assets/css/about.css?v=123211">
    {{ /if }}
    {{ if segment_1 == 'governance-compliance' }}
    <link rel="stylesheet" href="/assets/css/governance.css?v=10221">
    {{ /if }}
    {{ if segment_1 == 'corporate-value-culture' }}
    <link rel="stylesheet" href="/assets/css/corporate-value.css?v=1203112">
    {{ /if }}

    <title>{{ title ?? site:name }}</title>
    {{ vite src="resources/css/tailwind.css|resources/js/site.js" }}
    {{ livewire:styles }}

    <!-- Light-page detection — dijalankan di <head> SEBELUM render -->
    <script>
        (function() {
            var lightPages = [
                '/about-torucorp',
                '/corporate-value-culture',
                '/torucorp-businesses',
                '/governance-compliance',
                '/whistleblowing',
                '/open-collaboration',
                '/digital-solution',
                '/article',
                '/careers',
                '/contact-us',
                '/villa-luxury-house',
                '/industrial',
                '/residential',
                '/office',
                '/restaurant-and-coffee-shop',
                '/interior',
                '/our-workshop'
            ];
            var path = window.location.pathname;
            var isLight = lightPages.some(function(p) {
                return path === p || path.startsWith(p + '/');
            });
            if (isLight) {
                document.documentElement.classList.add('light-page');
            }
        })();
    </script>
</head>

<body class="index-page">
    {{ livewire:Component.Header }}

    <div class="flex flex-col items-center justify-center px-2 mx-auto lg:min-h-screen">
        {{ template_content }}
    </div>

    {{ livewire:scripts }}
    {{ livewire:Component.Footer }}

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files (defer agar tidak blocking render) -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>

    <!-- Main JS Files (defer agar tidak blocking render) -->
    <script src="/assets/js/main.js?v=1203112" defer></script>
    <script src="/assets/js/custom.js?v=1203112" defer></script>
</body>

</html>