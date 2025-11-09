<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BUMDes Juron')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-village-cream-100 { background-color: #fef7ed; }
        .text-village-green-800 { color: #166534; }
        .bg-village-green-600 { background-color: #16a34a; }
        .bg-village-green-700 { background-color: #15803d; }
        .text-village-green-500 { color: #22c55e; }
        .text-village-green-600 { color: #16a34a; }
        .bg-village-green-100 { background-color: #dcfce7; }
        .border-village-green-400 { border-color: #4ade80; }
        .focus\:ring-village-green-500:focus { --tw-ring-color: #22c55e; }
        .focus\:border-village-green-500:focus { border-color: #22c55e; }
        .hover\:bg-village-green-700:hover { background-color: #15803d; }
        .hover\:text-village-green-400:hover { color: #4ade80; }
        .focus\:ring-village-green-500:focus { --tw-ring-color: #22c55e; }
        .group:hover .group-hover\:text-village-green-400 { color: #4ade80; }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>