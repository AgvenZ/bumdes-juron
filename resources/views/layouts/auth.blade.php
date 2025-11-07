<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BUMDes Juron</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-village-cream-50 font-sans">
    <!-- Main Content - Full Page untuk Auth -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- WhatsApp Link Script -->
    <script>
        function openWhatsApp(phone) {
            window.open(`https://wa.me/${phone.replace(/\+/g, '')}`, '_blank');
        }
    </script>
</body>
</html>