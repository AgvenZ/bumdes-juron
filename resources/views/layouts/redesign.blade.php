<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BUMDes Juron - Badan Usaha Milik Desa yang memberdayakan ekonomi masyarakat melalui berbagai unit usaha seperti internet desa, persewaan, wisata, dan ketahanan pangan.">
    <meta name="keywords" content="BUMDes, Badan Usaha Milik Desa, Juron, Internet Desa, Persewaan Tenda, Wisata Desa, Ketahanan Pangan, UMKM Desa, Ekonomi Desa">
    <meta name="author" content="BUMDes Juron">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title', 'BUMDes Juron - Badan Usaha Milik Desa')">
    <meta property="og:description" content="BUMDes Juron - Memberdayakan ekonomi masyarakat desa melalui berbagai unit usaha yang inovatif dan berkelanjutan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/logo-bumdes.png') }}">
    <meta property="og:site_name" content="BUMDes Juron">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'BUMDes Juron - Badan Usaha Milik Desa')">
    <meta name="twitter:description" content="BUMDes Juron - Memberdayakan ekonomi masyarakat desa melalui berbagai unit usaha yang inovatif dan berkelanjutan.">
    <meta name="twitter:image" content="{{ asset('images/logo-bumdes.png') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "BUMDes Juron",
        "description": "Badan Usaha Milik Desa yang memberdayakan ekonomi masyarakat melalui berbagai unit usaha seperti internet desa, persewaan, wisata, dan ketahanan pangan.",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('images/logo-bumdes.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+6281234567890",
            "contactType": "customer service",
            "areaServed": "ID",
            "availableLanguage": "Indonesian"
        },
        "sameAs": [
            "https://www.facebook.com/BUMDesJuron",
            "https://www.instagram.com/bumdesjuron",
            "https://wa.me/6281234567890"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Desa Juron No. 1",
            "addressLocality": "Desa Juron",
            "addressRegion": "Jawa Timur",
            "postalCode": "68183",
            "addressCountry": "ID"
        }
    }
    </script>
    
    <title>@yield('title', 'BUMDes Juron')</title>
    @vite(['resources/css/redesign.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-neutral-light">
    @include('layouts.partials.redesign-header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.redesign-footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>