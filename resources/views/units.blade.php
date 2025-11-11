<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Usaha - BUMDes Maju Jaya</title>
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

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, 15px); }
            100% { transform: translate(0, -0px); }
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

        .back-button {
            transition: all 0.3s ease;
        }

        .back-button:hover {
            transform: translateX(-5px);
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
                <a href="units.html" class="text-primary font-medium transition-colors">Unit Usaha</a>
                <a href="documents.html" class="text-gray-700 hover:text-primary font-medium transition-colors">Dokumentasi</a>
            </div>

            <button class="md:hidden text-gray-700">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>



    <!-- Unit Usaha Section -->
    <section id="unit-list" class="rural-bg section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Semua Unit Usaha</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Berbagai unit usaha yang dikelola BUMDes Maju Jaya untuk meningkatkan perekonomian masyarakat desa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Internet Desa -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInLeft">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Internet Desa" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-primary">Internet Desa</h3>
                            <span class="bg-primary-light text-white text-sm font-medium py-1 px-3 rounded-full">Teknologi</span>
                        </div>
                        <p class="text-gray-600 mb-4">Layanan internet berkecepatan tinggi untuk masyarakat desa dengan harga terjangkau. Menjangkau seluruh wilayah desa dengan koneksi stabil untuk mendukung aktivitas pendidikan, bisnis, dan komunikasi.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Fasilitas:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-wifi text-secondary mr-2"></i> Wi-Fi Area</li>
                                <li class="flex items-center"><i class="fas fa-tachometer-alt text-secondary mr-2"></i> High Speed</li>
                                <li class="flex items-center"><i class="fas fa-headset text-secondary mr-2"></i> Support 24/7</li>
                                <li class="flex items-center"><i class="fas fa-money-bill-wave text-secondary mr-2"></i> Harga Terjangkau</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Budi Santoso</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567891" target="_blank" class="bg-primary hover:bg-primary-light text-white font-medium py-2 px-4 rounded-lg transition-colors inline-flex items-center">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Rp 150.000/bulan</span>
                        </div>
                    </div>
                </div>

                <!-- Persewaan Tendangan + Sound System -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInRight">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Persewaan Kajang + Sound System" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-primary">Persewaan Kajang + Sound System</h3>
                            <span class="bg-accent text-white text-sm font-medium py-1 px-3 rounded-full">Event</span>
                        </div>
                        <p class="text-gray-600 mb-4">Menyewakan tenda (kajang) dan peralatan sound system untuk acara pernikahan, khitanan, dan acara desa. Dilengkapi dengan peralatan lengkap dan tim profesional untuk mendukung kesuksesan acara Anda.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Paket Tersedia:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-umbrella-beach text-secondary mr-2"></i> Tenda Kecil</li>
                                <li class="flex items-center"><i class="fas fa-home text-secondary mr-2"></i> Tenda Besar</li>
                                <li class="flex items-center"><i class="fas fa-volume-up text-secondary mr-2"></i> Sound System</li>
                                <li class="flex items-center"><i class="fas fa-lightbulb text-secondary mr-2"></i> Penerangan</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Joko Prasetyo</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567892" target="_blank" class="bg-primary hover:bg-primary-light text-white font-medium py-2 px-4 rounded-lg transition-colors inline-flex items-center">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Mulai Rp 500.000</span>
                        </div>
                    </div>
                </div>

                <!-- Wisata + Pemancingan -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInLeft">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Wisata + Pemancingan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-primary">Wisata + Pemancingan</h3>
                            <span class="bg-green-500 text-white text-sm font-medium py-1 px-3 rounded-full">Wisata</span>
                        </div>
                        <p class="text-gray-600 mb-4">Destinasi wisata alam dengan fasilitas pemancingan yang asri dan nyaman untuk keluarga. Menawarkan pengalaman bersantai di alam dengan berbagai jenis ikan yang dapat ditangkap dan dinikmati.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Fasilitas Wisata:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-fish text-secondary mr-2"></i> Kolam Pemancingan</li>
                                <li class="flex items-center"><i class="fas fa-utensils text-secondary mr-2"></i> Warung Makan</li>
                                <li class="flex items-center"><i class="fas fa-campground text-secondary mr-2"></i> Area Camping</li>
                                <li class="flex items-center"><i class="fas fa-swimming-pool text-secondary mr-2"></i> Kolam Renang</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Rudi Hermawan</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567893" target="_blank" class="bg-primary hover:bg-primary-light text-white font-medium py-2 px-4 rounded-lg transition-colors inline-flex items-center">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Rp 25.000/orang</span>
                        </div>
                    </div>
                </div>

                <!-- Ketahanan Pangan -->
                <div class="bg-white rounded-2xl overflow-hidden card-hover animate-slideInRight">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1621351183012-e2f9972dd9bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Ketahanan Pangan" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-primary">Ketahanan Pangan</h3>
                            <span class="bg-yellow-600 text-white text-sm font-medium py-1 px-3 rounded-full">Pertanian</span>
                        </div>
                        <p class="text-gray-600 mb-4">Budidaya padi, lombok, dan ayam joper (jowo super) untuk mendukung ketahanan pangan desa. Menggunakan metode pertanian organik dan berkelanjutan untuk menghasilkan produk berkualitas tinggi.</p>

                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Produk Unggulan:</h4>
                            <ul class="text-gray-600 grid grid-cols-2 gap-1">
                                <li class="flex items-center"><i class="fas fa-seedling text-secondary mr-2"></i> Padi Organik</li>
                                <li class="flex items-center"><i class="fas fa-pepper-hot text-secondary mr-2"></i> Lombok Segar</li>
                                <li class="flex items-center"><i class="fas fa-egg text-secondary mr-2"></i> Ayam Joper</li>
                                <li class="flex items-center"><i class="fas fa-tractor text-secondary mr-2"></i> Pertanian Modern</li>
                            </ul>
                        </div>

                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Penanggung Jawab" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Sutrisno</p>
                                <p class="text-sm text-gray-600">Penanggung Jawab</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center">
                            <a href="https://wa.me/6281234567894" target="_blank" class="bg-primary hover:bg-primary-light text-white font-medium py-2 px-4 rounded-lg transition-colors inline-flex items-center">
                                <i class="fab fa-whatsapp mr-2"></i> Hubungi
                            </a>
                            <span class="text-lg font-bold text-secondary">Harga Kompetitif</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->

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
                        <li><a href="units.html" class="text-white transition-colors">Unit Usaha</a></li>
                        <li><a href="documents.html" class="text-primary-light hover:text-white transition-colors">Dokumentasi</a></li>
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

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.card-hover').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>
