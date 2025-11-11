<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi - BUMDes Maju Jaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2E7D32',
                        'primary-light': '#4CAF50',
                        'secondary': '#FF9800',
                        'accent': '#795548',
                        'light': '#F5F5F5',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'fadeIn': 'fadeIn 0.8s ease-in-out',
                        'slideInUp': 'slideInUp 0.8s ease-out',
                        'slideInLeft': 'slideInLeft 0.8s ease-out',
                        'slideInRight': 'slideInRight 0.8s ease-out',
                        'bounceIn': 'bounceIn 1s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideInUp: {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        slideInLeft: {
                            '0%': { transform: 'translateX(-30px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        slideInRight: {
                            '0%': { transform: 'translateX(30px)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        bounceIn: {
                            '0%': { transform: 'scale(0.3)', opacity: '0' },
                            '50%': { transform: 'scale(1.05)', opacity: '0.8' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .section-padding {
            padding: 5rem 0;
        }

        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .rural-bg {
            background-color: #f9f7f2;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23e0d6c9' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .sticky-nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .scroll-down {
            transform: translate3d(0, -100%, 0);
        }

        .scroll-up {
            transform: none;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .gallery-item {
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .filter-btn {
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background-color: #2E7D32;
            color: white;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav id="navbar" class="sticky-nav scroll-down bg-white py-4 transition-all duration-300">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://via.placeholder.com/50x50/2E7D32/FFFFFF?text=BD" alt="Logo BUMDes" class="h-10 w-10 rounded-full mr-3">
                <span class="text-xl font-bold text-primary">BUMDes Maju Jaya</span>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="index.html" class="text-gray-700 hover:text-primary font-medium transition-colors">Beranda</a>
                <a href="index.html#sk" class="text-gray-700 hover:text-primary font-medium transition-colors">SK Kemenham</a>
                <a href="index.html#struktur" class="text-gray-700 hover:text-primary font-medium transition-colors">Struktur Organisasi</a>
                <a href="index.html#direktur" class="text-gray-700 hover:text-primary font-medium transition-colors">Direktur</a>
                <a href="units.html" class="text-gray-700 hover:text-primary font-medium transition-colors">Unit Usaha</a>
                <a href="documents.html" class="text-primary font-medium transition-colors">Dokumentasi</a>
            </div>

            <button class="md:hidden text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>



    <!-- Gallery Filter Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-4">Filter Dokumentasi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan dokumentasi berdasarkan kategori unit usaha</p>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button class="filter-btn active bg-primary text-white font-medium py-2 px-6 rounded-full transition-all duration-300" data-filter="all">
                    Semua
                </button>
                <button class="filter-btn bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-6 rounded-full transition-all duration-300" data-filter="internet">
                    Internet Desa
                </button>
                <button class="filter-btn bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-6 rounded-full transition-all duration-300" data-filter="persewaan">
                    Persewaan
                </button>
                <button class="filter-btn bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-6 rounded-full transition-all duration-300" data-filter="wisata">
                    Wisata & Pemancingan
                </button>
                <button class="filter-btn bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-6 rounded-full transition-all duration-300" data-filter="pangan">
                    Ketahanan Pangan
                </button>
                <button class="filter-btn bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-6 rounded-full transition-all duration-300" data-filter="kegiatan">
                    Kegiatan Desa
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="rural-bg section-padding">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Internet Desa -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp" data-category="internet">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Internet Desa" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-primary-light text-white text-xs font-medium py-1 px-2 rounded">Internet Desa</span>
                            <span class="text-gray-500 text-sm">15 Jan 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Pemasangan Tower Internet</h3>
                        <p class="text-gray-600 text-sm">Proses pemasangan tower internet untuk menjangkau seluruh wilayah desa dengan koneksi stabil.</p>
                    </div>
                </div>

                <!-- Persewaan Kajang -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-100" data-category="persewaan">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="Persewaan Kajang" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-accent text-white text-xs font-medium py-1 px-2 rounded">Persewaan</span>
                            <span class="text-gray-500 text-sm">22 Feb 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Acara Pernikahan Desa</h3>
                        <p class="text-gray-600 text-sm">Penyewaan tenda kajang dan sound system untuk acara pernikahan warga desa.</p>
                    </div>
                </div>

                <!-- Sound System -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-200" data-category="persewaan">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sound System" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-accent text-white text-xs font-medium py-1 px-2 rounded">Persewaan</span>
                            <span class="text-gray-500 text-sm">10 Mar 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Peralatan Sound System</h3>
                        <p class="text-gray-600 text-sm">Peralatan sound system lengkap untuk berbagai acara desa dan hajatan.</p>
                    </div>
                </div>

                <!-- Wisata Alam -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp" data-category="wisata">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Wisata Alam" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-green-500 text-white text-xs font-medium py-1 px-2 rounded">Wisata</span>
                            <span class="text-gray-500 text-sm">5 Apr 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Area Wisata Alam</h3>
                        <p class="text-gray-600 text-sm">Pemandangan area wisata alam dengan suasana asri dan sejuk.</p>
                    </div>
                </div>

                <!-- Pemancingan -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-100" data-category="wisata">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Pemancingan" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-green-500 text-white text-xs font-medium py-1 px-2 rounded">Wisata</span>
                            <span class="text-gray-500 text-sm">18 Apr 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Kolam Pemancingan</h3>
                        <p class="text-gray-600 text-sm">Area pemancingan yang nyaman dengan berbagai jenis ikan air tawar.</p>
                    </div>
                </div>

                <!-- Ketahanan Pangan -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-200" data-category="pangan">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Ketahanan Pangan" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-yellow-600 text-white text-xs font-medium py-1 px-2 rounded">Pangan</span>
                            <span class="text-gray-500 text-sm">2 Mei 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Budidaya Padi Organik</h3>
                        <p class="text-gray-600 text-sm">Proses budidaya padi organik untuk mendukung ketahanan pangan desa.</p>
                    </div>
                </div>

                <!-- Kegiatan Desa -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp" data-category="kegiatan">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551135049-8a33b42738b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Kegiatan Desa" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-purple-500 text-white text-xs font-medium py-1 px-2 rounded">Kegiatan</span>
                            <span class="text-gray-500 text-sm">20 Mei 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Rapat Koordinasi BUMDes</h3>
                        <p class="text-gray-600 text-sm">Kegiatan rapat koordinasi pengurus BUMDes untuk membahas perkembangan unit usaha.</p>
                    </div>
                </div>

                <!-- Internet Desa 2 -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-100" data-category="internet">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Internet Desa" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-primary-light text-white text-xs font-medium py-1 px-2 rounded">Internet Desa</span>
                            <span class="text-gray-500 text-sm">8 Jun 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Pelatihan Internet untuk Warga</h3>
                        <p class="text-gray-600 text-sm">Kegiatan pelatihan penggunaan internet untuk warga desa dalam memanfaatkan teknologi digital.</p>
                    </div>
                </div>

                <!-- Ketahanan Pangan 2 -->
                <div class="gallery-item bg-white rounded-xl overflow-hidden shadow-lg card-hover animate-slideInUp delay-200" data-category="pangan">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80" alt="Ketahanan Pangan" class="w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="bg-yellow-600 text-white text-xs font-medium py-1 px-2 rounded">Pangan</span>
                            <span class="text-gray-500 text-sm">25 Jun 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2">Panen Lombok Segar</h3>
                        <p class="text-gray-600 text-sm">Kegiatan panen lombok dari kebun BUMDes yang dikelola secara organik.</p>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button id="loadMore" class="bg-primary hover:bg-primary-light text-white font-bold py-3 px-8 rounded-full inline-block transition-all duration-300 transform hover:scale-105">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="bg-primary text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/50x50/FFFFFF/2E7D32?text=BD" alt="Logo BUMDes" class="h-10 w-10 rounded-full mr-3">
                        <span class="text-xl font-bold">BUMDes Maju Jaya</span>
                    </div>
                    <p class="text-primary-light mb-4">Badan Usaha Milik Desa yang berfokus pada pengembangan ekonomi desa melalui berbagai unit usaha.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-primary-light hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-primary-light hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-primary-light hover:text-white transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="text-primary-light hover:text-white transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-primary-light hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="index.html#sk" class="text-primary-light hover:text-white transition-colors">SK Kemenham</a></li>
                        <li><a href="index.html#struktur" class="text-primary-light hover:text-white transition-colors">Struktur Organisasi</a></li>
                        <li><a href="index.html#direktur" class="text-primary-light hover:text-white transition-colors">Direktur</a></li>
                        <li><a href="units.html" class="text-primary-light hover:text-white transition-colors">Unit Usaha</a></li>
                        <li><a href="documents.html" class="text-white transition-colors">Dokumentasi</a></li>
                    </ul>
                </div>


                <div>
                    <h3 class="text-lg font-bold mb-4">Kontak Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1 text-secondary"></i>
                            <span>Jl. Desa Maju No. 123, Kecamatan Sejahtera, Kabupaten Makmur</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-secondary"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-secondary"></i>
                            <span>info@bumdesmajujaya.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-primary-light pt-6 text-center text-primary-light">
                <p>&copy; 2023 BUMDes Maju Jaya. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Sticky Navbar
        const navbar = document.getElementById('navbar');
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            if (lastScrollY < window.scrollY) {
                navbar.classList.add('scroll-down');
                navbar.classList.remove('scroll-up');
            } else {
                navbar.classList.add('scroll-up');
                navbar.classList.remove('scroll-down');
            }

            lastScrollY = window.scrollY;
        });

        // Gallery Filter Functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
                filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'text-gray-700'));

                // Add active class to clicked button
                button.classList.add('active', 'bg-primary', 'text-white');
                button.classList.remove('bg-gray-200', 'text-gray-700');

                const filterValue = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Load More Functionality
        const loadMoreButton = document.getElementById('loadMore');
        let visibleItems = 9;

        // Initially hide items beyond the first 9
        galleryItems.forEach((item, index) => {
            if (index >= visibleItems) {
                item.style.display = 'none';
            }
        });

        loadMoreButton.addEventListener('click', () => {
            // Show next set of items
            for (let i = visibleItems; i < visibleItems + 3 && i < galleryItems.length; i++) {
                galleryItems[i].style.display = 'block';
                setTimeout(() => {
                    galleryItems[i].style.opacity = '1';
                    galleryItems[i].style.transform = 'translateY(0)';
                }, 100);
            }

            visibleItems += 3;

            // Hide button if all items are visible
            if (visibleItems >= galleryItems.length) {
                loadMoreButton.style.display = 'none';
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
