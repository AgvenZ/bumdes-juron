<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BUMDes Juron')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/village-theme.css') }}">
    <style>
        :root {
            --village-green-50: #f0fdf4;
            --village-green-100: #dcfce7;
            --village-green-200: #bbf7d0;
            --village-green-300: #86efac;
            --village-green-400: #4ade80;
            --village-green-500: #22c55e;
            --village-green-600: #16a34a;
            --village-green-700: #15803d;
            --village-green-800: #166534;
            --village-green-900: #14532d;
            --village-cream-50: #fefdf8;
            --village-cream-100: #fef7ed;
            --village-cream-200: #feebc8;
            --village-cream-300: #fbd38d;
            --village-cream-400: #f6ad55;
            --village-cream-500: #ed8936;
            --village-cream-600: #dd6b20;
            --village-cream-700: #c05621;
            --village-cream-800: #9c4221;
            --village-cream-900: #7b341e;
        }
        .bg-village-green-50 { background-color: var(--village-green-50); }
        .bg-village-green-100 { background-color: var(--village-green-100); }
        .bg-village-green-600 { background-color: var(--village-green-600); }
        .bg-village-green-700 { background-color: var(--village-green-700); }
        .bg-village-green-800 { background-color: var(--village-green-800); }
        .bg-village-green-900 { background-color: var(--village-green-900); }
        .bg-village-cream-50 { background-color: var(--village-cream-50); }
        .bg-village-cream-100 { background-color: var(--village-cream-100); }
        .text-village-green-600 { color: var(--village-green-600); }
        .text-village-green-700 { color: var(--village-green-700); }
        .text-village-green-800 { color: var(--village-green-800); }
        .text-village-cream-600 { color: var(--village-cream-600); }
        .text-village-cream-700 { color: var(--village-cream-700); }
        .text-village-cream-800 { color: var(--village-cream-800); }
        .border-village-green-200 { border-color: var(--village-green-200); }
        .border-village-green-300 { border-color: var(--village-green-300); }
        .hover\:bg-village-green-700:hover { background-color: var(--village-green-700); }
        .hover\:text-village-green-700:hover { color: var(--village-green-700); }
        .focus\:ring-village-green-500:focus { --tw-ring-color: var(--village-green-500); }
        .focus\:border-village-green-500:focus { border-color: var(--village-green-500); }
        .bg-gradient-village {
            background: linear-gradient(135deg, var(--village-green-700) 0%, var(--village-green-800) 50%, var(--village-green-900) 100%);
        }
        .bg-gradient-village-light {
            background: linear-gradient(135deg, var(--village-green-50) 0%, var(--village-cream-50) 100%);
        }
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .village-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .village-shadow-lg {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .village-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .village-hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.08);
        }
        .village-text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .village-border-gradient {
            border-image: linear-gradient(135deg, var(--village-green-500), var(--village-cream-500)) 1;
        }
    </style>
</head>
<body class="bg-village-cream-50 font-inter scroll-smooth">
    <!-- Modern Header with Glass Effect -->
    <header class="bg-white/90 backdrop-blur-md shadow-lg border-b border-village-green-200 sticky top-0 z-50 village-transition">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo & Brand with Animation -->
                <div class="flex items-center space-x-4 group village-transition">
                    @if(isset($bumdes) && $bumdes->logo_path)
                        <img src="{{ asset('storage/' . $bumdes->logo_path) }}" alt="Logo BUMDes" class="h-12 w-12 rounded-full shadow-md group-hover:scale-110 village-transition">
                    @else
                        <div class="h-12 w-12 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 village-transition">
                            <span class="text-white text-xl font-bold font-poppins">B</span>
                        </div>
                    @endif
                    <div class="hidden md:block">
                        <h1 class="text-xl font-bold bg-gradient-to-r from-village-green-700 to-village-green-800 bg-clip-text text-transparent font-poppins">
                            @if(isset($bumdes))
                                {{ $bumdes->name }}
                            @else
                                BUMDes Juron
                            @endif
                        </h1>
                        <p class="text-xs text-village-green-600 font-medium tracking-wide">Badan Usaha Milik Desa</p>
                    </div>
                </div>
                
                <!-- Modern Navigation -->
                <nav class="hidden lg:flex">
                    <ul class="flex items-center space-x-2">
                        <li>
                            <a href="{{ route('home') }}" class="px-4 py-2 rounded-xl font-medium village-transition hover:bg-village-green-100 hover:text-village-green-700 {{ request()->routeIs('home') ? 'bg-village-green-100 text-village-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-home mr-2"></i>Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('organization') }}" class="px-4 py-2 rounded-xl font-medium village-transition hover:bg-village-green-100 hover:text-village-green-700 {{ request()->routeIs('organization') ? 'bg-village-green-100 text-village-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-sitemap mr-2"></i>Struktur
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('units') }}" class="px-4 py-2 rounded-xl font-medium village-transition hover:bg-village-green-100 hover:text-village-green-700 {{ request()->routeIs('units') ? 'bg-village-green-100 text-village-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-building mr-2"></i>Unit Usaha
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#dokumentasi" class="px-4 py-2 rounded-xl font-medium village-transition hover:bg-village-green-100 hover:text-village-green-700 {{ request()->routeIs('home') ? 'bg-village-green-100 text-village-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-file-alt mr-2"></i>Dokumentasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#sk-kemenkumham" class="px-4 py-2 rounded-xl font-medium village-transition hover:bg-village-green-100 hover:text-village-green-700 {{ request()->routeIs('home') ? 'bg-village-green-100 text-village-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-certificate mr-2"></i>Legalitas
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- User Menu -->
                <div class="hidden lg:flex items-center space-x-4">
                    @auth
                        <div class="relative group">
                            <button class="bg-gradient-to-r from-village-green-600 to-village-green-700 text-white px-4 py-2 rounded-xl font-medium village-transition hover:shadow-lg hover:scale-105 flex items-center space-x-2">
                                <i class="fas fa-user-circle"></i>
                                <span>Admin</span>
                                <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2">
                                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-village-green-50 hover:text-village-green-700 village-transition">
                                    <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                                </a>
                                <form action="{{ route('admin.logout') }}" method="POST" class="block">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 village-transition">
                                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-village-green-600 to-village-green-700 text-white px-6 py-2 rounded-xl font-medium village-transition hover:shadow-lg hover:scale-105 flex items-center space-x-2">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login Admin</span>
                        </a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden p-3 rounded-xl text-gray-700 hover:bg-village-green-100 hover:text-village-green-700 village-transition">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4 border-t border-village-green-200">
                <ul class="space-y-2 mt-4">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium village-transition {{ request()->routeIs('home') ? 'bg-village-green-100 text-village-green-700' : 'text-gray-700 hover:bg-village-green-100 hover:text-village-green-700' }}">
                            <i class="fas fa-home w-5"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('organization') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium village-transition {{ request()->routeIs('organization') ? 'bg-village-green-100 text-village-green-700' : 'text-gray-700 hover:bg-village-green-100 hover:text-village-green-700' }}">
                            <i class="fas fa-sitemap w-5"></i>
                            <span>Struktur Organisasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('units') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium village-transition {{ request()->routeIs('units') ? 'bg-village-green-100 text-village-green-700' : 'text-gray-700 hover:bg-village-green-100 hover:text-village-green-700' }}">
                            <i class="fas fa-building w-5"></i>
                            <span>Unit Usaha</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#dokumentasi" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium village-transition {{ request()->routeIs('home') ? 'bg-village-green-100 text-village-green-700' : 'text-gray-700 hover:bg-village-green-100 hover:text-village-green-700' }}">
                            <i class="fas fa-file-alt w-5"></i>
                            <span>Dokumentasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#sk-kemenkumham" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium village-transition {{ request()->routeIs('home') ? 'bg-village-green-100 text-village-green-700' : 'text-gray-700 hover:bg-village-green-100 hover:text-village-green-700' }}">
                            <i class="fas fa-certificate w-5"></i>
                            <span>Legalitas</span>
                        </a>
                    </li>
                    @auth
                        <li class="border-t border-village-green-200 pt-2 mt-2">
                            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium text-village-green-700 hover:bg-village-green-100 village-transition">
                                <i class="fas fa-tachometer-alt w-5"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST" class="inline w-full">
                                @csrf
                                <button type="submit" class="flex items-center space-x-3 w-full text-left px-4 py-3 rounded-xl font-medium text-red-600 hover:bg-red-50 village-transition">
                                    <i class="fas fa-sign-out-alt w-5"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="border-t border-village-green-200 pt-2 mt-2">
                            <a href="{{ route('admin.login') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl font-medium bg-gradient-to-r from-village-green-600 to-village-green-700 text-white village-transition hover:shadow-lg">
                                <i class="fas fa-sign-in-alt w-5"></i>
                                <span>Login Admin</span>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Modern Footer -->
    <footer class="bg-gradient-to-br from-village-green-800 to-village-green-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Brand Section -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-4 mb-6">
                        @if(isset($bumdes) && $bumdes->logo_path)
                            <img src="{{ asset('storage/' . $bumdes->logo_path) }}" alt="Logo BUMDes" class="h-16 w-16 rounded-full shadow-lg">
                        @else
                            <div class="h-16 w-16 bg-gradient-to-br from-village-green-400 to-village-green-500 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white text-2xl font-bold font-poppins">B</span>
                            </div>
                        @endif
                        <div>
                            <h3 class="text-2xl font-bold font-poppins village-text-shadow">
                                @if(isset($bumdes))
                                    {{ $bumdes->name }}
                                @else
                                    BUMDes Juron
                                @endif
                            </h3>
                            <p class="text-village-green-200 font-medium">Badan Usaha Milik Desa</p>
                        </div>
                    </div>
                    <p class="text-village-green-200 mb-6 leading-relaxed">
                        @if(isset($bumdes))
                            {{ \Illuminate\Support\Str::limit($bumdes->description, 200) }}
                        @else
                            Mendorong pertumbuhan ekonomi lokal melalui pengelolaan sumber daya desa yang optimal, 
                            menciptakan lapangan kerja, dan meningkatkan kesejahteraan masyarakat desa secara berkelanjutan.
                        @endif
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-village-green-700 hover:bg-village-green-600 p-3 rounded-full village-transition hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-village-green-700 hover:bg-village-green-600 p-3 rounded-full village-transition hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-village-green-700 hover:bg-village-green-600 p-3 rounded-full village-transition hover:scale-110">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-6 font-poppins">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="flex items-center space-x-2 text-village-green-200 hover:text-white village-transition">
                                <i class="fas fa-chevron-right text-xs"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('organization') }}" class="flex items-center space-x-2 text-village-green-200 hover:text-white village-transition">
                                <i class="fas fa-chevron-right text-xs"></i>
                                <span>Struktur Organisasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('units') }}" class="flex items-center space-x-2 text-village-green-200 hover:text-white village-transition">
                                <i class="fas fa-chevron-right text-xs"></i>
                                <span>Unit Usaha</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#dokumentasi" class="flex items-center space-x-2 text-village-green-200 hover:text-white village-transition">
                                <i class="fas fa-chevron-right text-xs"></i>
                                <span>Dokumentasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#sk-kemenkumham" class="flex items-center space-x-2 text-village-green-200 hover:text-white village-transition">
                                <i class="fas fa-chevron-right text-xs"></i>
                                <span>Legalitas</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-village-green-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-village-green-300 text-sm mb-4 md:mb-0">
                        &copy; {{ date('Y') }} {{ $bumdes->name ?? 'BUMDes Juron' }}. Hak Cipta Dilindungi.
                    </p>
                    <div class="flex items-center space-x-6 text-sm text-village-green-300">
                        <a href="#" class="hover:text-white village-transition">Kebijakan Privasi</a>
                        <span>|</span>
                        <a href="#" class="hover:text-white village-transition">Syarat & Ketentuan</a>
                        <span>|</span>
                        <a href="#" class="hover:text-white village-transition">Peta Situs</a>
                    </div>
                </div>
            </div>

            <!-- Scroll to Top Button -->
            <button id="scrollToTop" class="fixed bottom-8 right-8 bg-gradient-to-r from-village-green-600 to-village-green-700 text-white p-3 rounded-full shadow-lg hover:shadow-xl village-transition hover:scale-110 opacity-0 invisible translate-y-4">
                <i class="fas fa-arrow-up"></i>
            </button>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            if (!mobileMenu.classList.contains('hidden') && 
                !mobileMenu.contains(event.target) && 
                !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Scroll to Top Functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');
        
        // Show/hide scroll button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                scrollToTopBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                scrollToTopBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
                scrollToTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
            }
        });

        // Scroll to top when button is clicked
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Add smooth scroll behavior for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>