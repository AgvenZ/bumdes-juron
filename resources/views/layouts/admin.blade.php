<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - BUMDes Juron')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Premium Admin Layout Styles */
        .admin-gradient-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
        }
        
        .admin-glass {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .admin-glass-light {
            background: rgba(30, 41, 59, 0.6);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        
        .admin-text-gradient {
            background: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .admin-nav-item {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .admin-nav-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -10px;
            right: -10px;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.2), transparent);
            border-radius: 12px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .admin-nav-item:hover::before,
        .admin-nav-item.active::before {
            opacity: 1;
        }
        
        .admin-nav-item.active {
            background: linear-gradient(90deg, rgba(16, 185, 129, 0.1), rgba(59, 130, 246, 0.1));
            border-radius: 12px;
        }
        
        .admin-btn-glow {
            position: relative;
            overflow: hidden;
        }
        
        .admin-btn-glow::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.5s ease;
            opacity: 0;
        }
        
        .admin-btn-glow:hover::before {
            opacity: 1;
            animation: admin-glow 0.5s ease;
        }
        
        @keyframes admin-glow {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
        
        .admin-floating {
            animation: admin-float 6s ease-in-out infinite;
        }
        
        @keyframes admin-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .admin-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .admin-hover-lift:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Modern CSS for Village Theme */
        /* Village Color Palette */
        .village-green-50 { background-color: #f0fdf4; }
        .village-green-100 { background-color: #dcfce7; }
        .village-green-500 { background-color: #22c55e; }
        .village-green-600 { background-color: #16a34a; }
        .village-green-700 { background-color: #15803d; }
        
        .village-cream-50 { background-color: #fefdf8; }
        .village-cream-100 { background-color: #fef9e7; }
        .village-cream-200 { background-color: #fef3c7; }
        
        /* Modern Shadows */
        .village-shadow-lg {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .village-shadow-xl {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Modern Border Gradient */
        .village-border-gradient {
            position: relative;
            border: 1px solid transparent;
            background-clip: padding-box;
        }
        
        .village-border-gradient::before {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            z-index: -1;
            margin: -1px;
            border-radius: inherit;
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }
        
        /* Modern Hover Effects */
        .village-hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .village-hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Modern Text Shadow */
        .village-text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        /* Modern Cards */
        .village-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Modern Icon Backgrounds */
        .village-icon-bg {
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }
        
        .village-icon-bg-blue {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }
        
        .village-icon-bg-amber {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }
        
        .village-icon-bg-purple {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }
        
        /* Modern Counter */
        .village-counter {
            font-weight: 700;
            font-size: 2rem;
            color: #16a34a;
        }
        
        /* Modern Loading Overlay */
        .village-loading-overlay {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        
        .village-spinner {
            width: 40px;
            height: 40px;
            border: 3px solid rgba(34, 197, 94, 0.2);
            border-left: 3px solid #22c55e;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .village-loading-text {
            color: #16a34a;
            font-weight: 600;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.7; }
            50% { opacity: 1; }
        }
        
        /* Modern Navigation */
        .village-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-right: 1px solid rgba(34, 197, 94, 0.1);
        }
        
        /* Modern Transitions */
        .village-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .village-counter {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 font-poppins min-h-screen" style="opacity: 0; transform: translateY(20px); transition: all 0.8s ease;">
    <!-- Modern Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 z-50 flex items-center justify-center village-loading-overlay" style="display: none;">
        <div class="text-center">
            <div class="village-spinner mx-auto mb-6"></div>
            <div class="text-xl font-semibold mb-2 village-loading-text">
                Memuat Dashboard Admin
            </div>
            <div class="text-gray-600 text-sm">
                BUMDes Juron - Sistem Administrasi
            </div>
        </div>
    </div>

    <!-- Modern Header -->
    <header class="bg-white/95 backdrop-blur-sm village-shadow-lg sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <button id="sidebarToggle" class="text-gray-700 hover:text-village-green-600 transition-colors duration-200">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-8 rounded-lg shadow-md">
                        <div>
                            <h1 class="text-lg font-bold text-gray-800 village-text-shadow">BUMDes Juron</h1>
                            <p class="text-gray-500 text-xs">Sistem Administrasi</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-village-green-600 transition-colors duration-200 relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="flex items-center space-x-3">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'Admin' }}&background=22c55e&color=fff" alt="Admin" class="w-8 h-8 rounded-full border border-village-green-200 shadow-sm">
                        <div class="hidden sm:block text-right">
                            <p class="text-gray-800 font-medium text-sm">{{ Auth::user()->name ?? 'Administrator' }}</p>
                            <p class="text-gray-500 text-xs">{{ Auth::user()->role ?? 'Admin' }}</p>
                        </div>
                    </div>
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-village-green-600 transition-colors duration-200">
                            <i class="fas fa-sign-out-alt text-lg"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Modern Navigation -->
        <nav id="sidebar" class="bg-white/95 backdrop-blur-sm village-shadow-lg w-64 min-h-screen p-6 transition-all duration-300">
        <div class="mb-6">
            <div class="flex items-center space-x-3 mb-4">
                <div class="w-10 h-10 village-icon-bg rounded-lg flex items-center justify-center shadow-sm">
                    <i class="fas fa-leaf text-white"></i>
                </div>
                <div>
                    <h2 class="text-gray-800 font-bold text-base">Menu Admin</h2>
                    <p class="text-gray-500 text-xs">Navigasi</p>
                </div>
            </div>
            <hr class="border-gray-200">
        </div>
        
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50 {{ request()->routeIs('admin.dashboard') ? 'bg-village-green-100 text-village-green-700 border-l-2 border-village-green-600' : '' }}">
                    <i class="fas fa-tachometer-alt text-base"></i>
                    <span class="font-medium text-sm">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.units') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50 {{ request()->routeIs('admin.units*') ? 'bg-village-green-100 text-village-green-700 border-l-2 border-village-green-600' : '' }}">
                    <i class="fas fa-building text-base"></i>
                    <span class="font-medium text-sm">Unit Usaha</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.organization') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50 {{ request()->routeIs('admin.organization*') ? 'bg-village-green-100 text-village-green-700 border-l-2 border-village-green-600' : '' }}">
                    <i class="fas fa-users text-base"></i>
                    <span class="font-medium text-sm">Pengurus</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.documents') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50 {{ request()->routeIs('admin.documents*') ? 'bg-village-green-100 text-village-green-700 border-l-2 border-village-green-600' : '' }}">
                    <i class="fas fa-file-alt text-base"></i>
                    <span class="font-medium text-sm">Dokumen</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.units') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50 {{ request()->routeIs('admin.units*') ? 'bg-village-green-100 text-village-green-700 border-l-2 border-village-green-600' : '' }}">
                    <i class="fas fa-images text-base"></i>
                    <span class="font-medium text-sm">Galeri</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50 {{ request()->routeIs('admin.dashboard') ? 'bg-village-green-100 text-village-green-700 border-l-2 border-village-green-600' : '' }}">
                    <i class="fas fa-chart-bar text-base"></i>
                    <span class="font-medium text-sm">Laporan</span>
                </a>
            </li>
            <li class="pt-4 border-t border-gray-200">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 text-gray-700 hover:text-village-green-600 p-3 rounded-lg transition-all duration-200 hover:bg-village-green-50">
                    <i class="fas fa-home text-base"></i>
                    <span class="font-medium text-sm">Kembali ke Home</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Modern Main Content -->
    <main class="flex-1 p-6 overflow-y-auto bg-gradient-to-br from-village-cream-50 to-white">
        @if(session('success'))
            <div class="mb-8 bg-emerald-500/20 backdrop-blur-lg border border-emerald-500/30 text-emerald-100 px-6 py-4 rounded-2xl shadow-2xl card-premium premium-shadow-hover">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-emerald-400 text-xl mr-3 pulse-premium"></i>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-8 bg-red-500/20 backdrop-blur-lg border border-red-500/30 text-red-100 px-6 py-4 rounded-2xl shadow-lg admin-transition admin-hover-lift">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle text-red-400 text-xl mr-3"></i>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Modern Footer -->
    <footer class="bg-white/95 backdrop-blur-sm border-t border-gray-200 village-shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <p class="text-gray-600 text-sm">
                        <i class="fas fa-leaf text-village-green-600 mr-2"></i>
                        <span class="village-text-shadow">BUMDes Juron</span> - Sistem Administrasi Desa
                    </p>
                    <p class="text-gray-500 text-xs mt-1">
                        <span id="current-time" class="font-mono"></span> | 
                        <span id="current-date"></span>
                    </p>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600 text-sm flex items-center">
                        <i class="fas fa-shield-alt text-village-green-600 mr-2"></i>
                        Aman
                    </span>
                    <span class="text-gray-600 text-sm flex items-center">
                        <i class="fas fa-check-circle text-village-green-600 mr-2"></i>
                        Terpercaya
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modern JavaScript -->
    <script>
        // Modern Real-time Clock
        function updateDateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            const dateString = now.toLocaleDateString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            
            document.getElementById('current-time').textContent = timeString;
            document.getElementById('current-date').textContent = dateString;
        }
        
        updateDateTime();
        setInterval(updateDateTime, 1000);

        // Modern Loading Animation
        window.addEventListener('load', function() {
            const loadingOverlay = document.getElementById('loadingOverlay');
            loadingOverlay.style.opacity = '0';
            loadingOverlay.style.transition = 'opacity 0.5s ease-out';
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        });

        console.log('%c🌿 BUMDes Juron Admin Loaded', 'color: #16a34a; font-size: 14px; font-weight: bold;');
    </script>

    @stack('scripts')
</body>
</html>