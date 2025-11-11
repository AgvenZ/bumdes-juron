<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-lg shadow-lg transition-all duration-300">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="BUMDes Logo" class="h-10 w-10 rounded-full object-cover border-2 border-primary">
                <span class="text-primary font-bold text-lg hidden sm:block font-poppins">BUMDes Juron</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#beranda" class="text-gray-700 hover:text-primary font-semibold transition-colors duration-300">Beranda</a>
                <a href="#struktur" class="text-gray-700 hover:text-primary font-semibold transition-colors duration-300">Struktur Organisasi</a>
                <a href="#unit" class="text-gray-700 hover:text-primary font-semibold transition-colors duration-300">Unit Usaha</a>
                <a href="#dokumentasi" class="text-gray-700 hover:text-primary font-semibold transition-colors duration-300">Dokumentasi</a>
                <a href="#sk-kemenkumham" class="text-gray-700 hover:text-primary font-semibold transition-colors duration-300">Legalitas</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-primary focus:outline-none transition-colors duration-300">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-200">
                <div class="flex flex-col space-y-4 pt-4">
                    <a href="#beranda" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">Beranda</a>
                    <a href="#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">Struktur Organisasi</a>
                    <a href="#unit" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">Unit Usaha</a>
                    <a href="#dokumentasi" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">Dokumentasi</a>
                    <a href="#sk-kemenkumham" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">Legalitas</a>
                </div>
            </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>