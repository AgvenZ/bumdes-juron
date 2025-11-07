<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BUMDes Juron</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans scroll-smooth">
    <!-- Header Modern -->
    <header class="bg-white/90 backdrop-blur-md shadow-lg border-b border-gray-100 sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo & Brand -->
                <div class="flex items-center space-x-4 group">
                    @if(isset($bumdes) && $bumdes->logo_path)
                        <img src="{{ asset('storage/' . $bumdes->logo_path) }}" alt="Logo BUMDes" class="h-12 w-12 rounded-full shadow-md group-hover:scale-110 transition-transform duration-300">
                    @else
                        <div class="h-12 w-12 bg-gradient-to-br from-green-600 to-green-700 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white text-xl font-bold">B</span>
                        </div>
                    @endif
                    <div class="hidden md:block">
                        <h1 class="text-xl font-bold bg-gradient-to-r from-green-700 to-green-800 bg-clip-text text-transparent">
                            @if(isset($bumdes))
                                {{ $bumdes->name }}
                            @else
                                BUMDes Juron
                            @endif
                        </h1>
                        <p class="text-xs text-gray-500 font-medium">Badan Usaha Milik Desa</p>
                    </div>
                </div>
                
                <!-- Navigation Modern -->
                <nav class="hidden md:flex">
                    <ul class="flex items-center space-x-2">
                        <li>
                            <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('home') ? 'bg-green-100 text-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-home mr-2"></i>Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('organization') }}" class="px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('organization') ? 'bg-green-100 text-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-sitemap mr-2"></i>Struktur
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('units') }}" class="px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('units') ? 'bg-green-100 text-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-building mr-2"></i>Unit Usaha
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('documents') }}" class="px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:bg-green-50 hover:text-green-700 {{ request()->routeIs('documents') ? 'bg-green-100 text-green-700 shadow-sm' : 'text-gray-700' }}">
                                <i class="fas fa-file-alt mr-2"></i>Dokumen
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4 border-t border-gray-200">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg font-medium transition-all {{ request()->routeIs('home') ? 'bg-green-100 text-green-700' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-home mr-3"></i>Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('organization') }}" class="block px-4 py-3 rounded-lg font-medium transition-all {{ request()->routeIs('organization') ? 'bg-green-100 text-green-700' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-sitemap mr-3"></i>Struktur Organisasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('units') }}" class="block px-4 py-3 rounded-lg font-medium transition-all {{ request()->routeIs('units') ? 'bg-green-100 text-green-700' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-building mr-3"></i>Unit Usaha
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('documents') }}" class="block px-4 py-3 rounded-lg font-medium transition-all {{ request()->routeIs('documents') ? 'bg-gree-100 text-green-700' : 'text-gray-700 hover:bg-gray-100' }}">
                            <i class="fas fa-file-alt mr-3"></i>Dokumen
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-village-green-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tentang BUMDes</h3>
                    <p class="text-village-green-200">
                        @if(isset($bumdes))
                            {{ \Illuminate\Support\Str::limit($bumdes->description, 150) }}
                        @else
                            Badan Usaha Milik Desa yang bertujuan untuk meningkatkan perekonomian desa dan kesejahteraan masyarakat.
                        @endif
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <p class="flex items-center text-village-green-200 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>0812-3456-7890</span>
                    </p>
                    <p class="flex items-center text-village-green-200 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>bumdes@desa.id</span>
                    </p>
                    <p class="flex items-center text-village-green-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Desa Juron, Kecamatan Contoh, Kabupaten Contoh</span>
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan</h3>
                    <ul class="space-y-2 text-village-green-200">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('organization') }}" class="hover:text-white transition-colors">Struktur Organisasi</a></li>
                        <li><a href="{{ route('units') }}" class="hover:text-white transition-colors">Unit Usaha</a></li>
                        <li><a href="{{ route('documents') }}" class="hover:text-white transition-colors">Dokumen</a></li>
                        <li><a href="{{ route('admin.login') }}" class="hover:text-white transition-colors">Admin</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-village-green-700 mt-8 pt-6 text-center text-village-green-300">
                <p>&copy; {{ date('Y') }} BUMDes Juron. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Link Script -->
    <script>
        function openWhatsApp(phone) {
            window.open(`https://wa.me/${phone.replace(/\+/g, '')}`, '_blank');
        }
    </script>
</body>
</html>