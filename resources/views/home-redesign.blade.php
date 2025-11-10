@extends('layouts.redesign')

@section('title', 'BUMDes Juron - Website Resmi')

@section('content')
<!-- Hero Section -->
<section id="beranda" class="relative h-screen flex items-center justify-center bg-gradient-to-br from-primary/20 to-secondary/20 overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-30 hero-bg-animation" style="background-image: url('{{ asset('images/village-background.jpg') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/10 to-white/20"></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <img src="{{ asset('images/logo.png') }}" alt="BUMDes Logo" class="h-24 w-24 rounded-full mx-auto mb-6 animate-float border-4 border-white shadow-2xl gradient-border" data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-4xl md:text-6xl font-bold text-primary mb-4 font-poppins gradient-text" data-aos="fade-up" data-aos-delay="200">
            BUMDes Juron
        </h1>
        <p class="text-lg md:text-xl text-gray-700 mb-8 font-open-sans font-medium" data-aos="fade-up" data-aos-delay="300">
            Membangun Desa yang Lebih Baik Melalui Kewirausahaan Sosial dan Pemberdayaan Ekonomi Masyarakat
        </p>
        <a href="#unit" class="btn-primary btn-hover-lift" data-aos="fade-up" data-aos-delay="400">
            <span>Jelajahi Layanan Kami</span>
            <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce" data-aos="fade-up" data-aos-delay="600">
        <i class="fas fa-chevron-down text-primary text-2xl"></i>
    </div>
</section>

<!-- SK Kemenkumham Section -->
<section id="sk-kemenkumham" class="py-20 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-gold/5 via-transparent to-primary/5"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4 font-poppins gradient-text">Legalitas BUMDes</h2>
            <p class="text-gray-600 text-lg font-medium">Terverifikasi dan Sah oleh Kementerian Hukum dan HAM RI</p>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-gold mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-2xl border border-gold/30 card-hover-lift relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-gold/20 to-primary/20 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="text-center relative z-10">
                    <div class="bg-gradient-to-br from-primary to-secondary text-white p-6 rounded-2xl mb-6 inline-block shadow-lg animate-pulse-slow">
                        <i class="fas fa-certificate text-5xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-primary mb-4 font-poppins">SK Kemenkumham RI</h3>
                    <div class="bg-gradient-to-r from-primary/10 to-secondary/10 p-6 rounded-xl mb-6">
                        <p class="text-gray-700 font-semibold text-lg mb-2">Nomor: AHU-000123.AH.01.01.TAHUN.2024</p>
                        <p class="text-gray-600 font-medium">Tanggal Pengesahan: 15 Januari 2024</p>
                    </div>
                    <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">
                        BUMDes Juron telah terverifikasi dan memiliki status badan hukum yang sah sesuai dengan peraturan perundang-undangan yang berlaku di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organization Structure Section -->
<section id="struktur" class="py-20 bg-neutral-light relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-primary/5 to-transparent"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4 font-poppins gradient-text">Struktur Organisasi</h2>
            <p class="text-gray-600 text-lg font-medium">Susunan Pengurus BUMDes Juron</p>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Director -->
            <div class="flex justify-center mb-12" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-8 rounded-2xl shadow-2xl card-hover-lift text-center max-w-sm relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-secondary"></div>
                    <img src="{{ asset('images/director.jpg') }}" alt="Direktur" class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-6 border-primary shadow-lg animate-float">
                    <h3 class="text-2xl font-bold text-primary font-poppins mb-2">Bapak Sutrisno</h3>
                    <p class="text-gray-600 font-semibold text-lg">Direktur Utama</p>
                    <div class="mt-4 flex justify-center space-x-2">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                        <div class="w-2 h-2 bg-secondary rounded-full"></div>
                        <div class="w-2 h-2 bg-gold rounded-full"></div>
                    </div>
                </div>
            </div>

            <!-- Management Team -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl shadow-xl card-hover-lift text-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-secondary to-accent"></div>
                    <img src="{{ asset('images/manager1.jpg') }}" alt="Manager" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-secondary shadow-lg">
                    <h3 class="text-xl font-bold text-secondary font-poppins mb-2">Ibu Ani</h3>
                    <p class="text-gray-600 font-medium">Manager Keuangan</p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-xl card-hover-lift text-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-accent to-primary"></div>
                    <img src="{{ asset('images/manager2.jpg') }}" alt="Manager" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-accent shadow-lg">
                    <h3 class="text-xl font-bold text-accent font-poppins mb-2">Bapak Budi</h3>
                    <p class="text-gray-600 font-medium">Manager Operasional</p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-xl card-hover-lift text-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-gold"></div>
                    <img src="{{ asset('images/manager3.jpg') }}" alt="Manager" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-gold shadow-lg">
                    <h3 class="text-xl font-bold text-gold font-poppins mb-2">Ibu Citra</h3>
                    <p class="text-gray-600 font-medium">Manager Pemasaran</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Director Profile Section -->
<section id="direktur" class="py-20 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-transparent to-secondary/5"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white/90 backdrop-blur-sm p-10 rounded-3xl shadow-2xl border border-primary/10" data-aos="fade-up" data-aos-delay="200">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-2/5 flex justify-center">
                        <div class="relative">
                            <img src="{{ asset('images/director-large.jpg') }}" alt="Direktur Utama" class="w-72 h-72 rounded-full object-cover border-8 border-white shadow-2xl animate-float">
                            <div class="absolute -bottom-4 -right-4 bg-gradient-to-br from-primary to-secondary text-white p-4 rounded-2xl shadow-lg">
                                <i class="fas fa-user-tie text-2xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-3/5 text-center lg:text-left">
                        <h2 class="text-4xl font-bold text-primary mb-3 font-poppins gradient-text">Direktur BUMDes Juron</h2>
                        <h3 class="text-3xl font-bold text-secondary mb-6 font-poppins">Bapak Sutrisno, S.E.</h3>
                        <div class="bg-gradient-to-r from-primary/10 to-secondary/10 p-6 rounded-2xl mb-6">
                            <p class="text-gray-700 text-lg leading-relaxed font-medium italic">
                                "Visi kami adalah membangun ekonomi desa yang mandiri dan berkelanjutan melalui pengelolaan usaha yang profesional serta pemberdayaan masyarakat setempat."
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="https://wa.me/6281234567890" target="_blank" class="btn-whatsapp btn-hover-lift">
                                <i class="fab fa-whatsapp text-xl"></i>
                                <span>Hubungi via WhatsApp</span>
                            </a>
                            <button class="btn-secondary btn-hover-lift">
                                <i class="fas fa-envelope text-xl"></i>
                                <span>Kirim Email</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Units Section -->
<section id="unit" class="py-20 bg-neutral-light relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-secondary/5 to-transparent"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4 font-poppins gradient-text">Unit Usaha Kami</h2>
            <p class="text-gray-600 text-lg font-medium">Berbagai Layanan dan Usaha yang Dikelola BUMDes Juron</p>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Internet Desa -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group relative" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-56 bg-gradient-to-br from-blue-500 to-blue-700 overflow-hidden">
                    <img src="{{ asset('images/internet-tower.jpg') }}" alt="Internet Desa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                        <span class="text-blue-600 font-bold text-sm">Internet</span>
                    </div>
                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                        <i class="fas fa-wifi text-blue-600 mr-1"></i>
                        <span class="text-blue-600 text-sm font-semibold">24/7</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-primary mb-3 font-poppins group-hover:text-secondary transition-colors">Internet Desa</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Layanan internet cepat dan stabil untuk masyarakat desa dengan harga terjangkau.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('images/pj-internet.jpg') }}" alt="Penanggung Jawab" class="w-12 h-12 rounded-full object-cover border-3 border-blue-200 shadow-md">
                            <div>
                                <p class="font-bold text-gray-800">Bapak Andi</p>
                                <p class="text-sm text-gray-500 font-medium">Penanggung Jawab</p>
                            </div>
                        </div>
                        <a href="https://wa.me/6281234567891" target="_blank" class="btn-whatsapp btn-hover-lift-sm">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Persewaan Tenda & Sound -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="relative h-56 bg-gradient-to-br from-orange-500 to-orange-700 overflow-hidden">
                    <img src="{{ asset('images/tenda-sound.jpg') }}" alt="Tenda dan Sound" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                        <span class="text-orange-600 font-bold text-sm">Persewaan</span>
                    </div>
                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                        <i class="fas fa-calendar text-orange-600 mr-1"></i>
                        <span class="text-orange-600 text-sm font-semibold">Event</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-primary mb-3 font-poppins group-hover:text-secondary transition-colors">Persewaan Tenda & Sound</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Penyewaan tenda, sound system, dan perlengkapan acara dengan kualitas terbaik.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('images/pj-sewa.jpg') }}" alt="Penanggung Jawab" class="w-12 h-12 rounded-full object-cover border-3 border-orange-200 shadow-md">
                            <div>
                                <p class="font-bold text-gray-800">Ibu Ratna</p>
                                <p class="text-sm text-gray-500 font-medium">Penanggung Jawab</p>
                            </div>
                        </div>
                        <a href="https://wa.me/6281234567892" target="_blank" class="btn-whatsapp btn-hover-lift-sm">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Wisata & Pemancingan -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group relative" data-aos="fade-up" data-aos-delay="400">
                <div class="relative h-56 bg-gradient-to-br from-green-500 to-green-700 overflow-hidden">
                    <img src="{{ asset('images/wisata-mancing.jpg') }}" alt="Wisata Pemancingan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                        <span class="text-green-600 font-bold text-sm">Wisata</span>
                    </div>
                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                        <i class="fas fa-fish text-green-600 mr-1"></i>
                        <span class="text-green-600 text-sm font-semibold">Relax</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-primary mb-3 font-poppins group-hover:text-secondary transition-colors">Wisata & Pemancingan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Tempat wisata alam dan kolam pemancingan yang asri untuk rekreasi keluarga.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('images/pj-wisata.jpg') }}" alt="Penanggung Jawab" class="w-12 h-12 rounded-full object-cover border-3 border-green-200 shadow-md">
                            <div>
                                <p class="font-bold text-gray-800">Bapak Joko</p>
                                <p class="text-sm text-gray-500 font-medium">Penanggung Jawab</p>
                            </div>
                        </div>
                        <a href="https://wa.me/6281234567893" target="_blank" class="btn-whatsapp btn-hover-lift-sm">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ketahanan Pangan -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group relative" data-aos="fade-up" data-aos-delay="500">
                <div class="relative h-56 bg-gradient-to-br from-yellow-500 to-yellow-700 overflow-hidden">
                    <img src="{{ asset('images/pangan.jpg') }}" alt="Ketahanan Pangan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                        <span class="text-yellow-600 font-bold text-sm">Pangan</span>
                    </div>
                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                        <i class="fas fa-seedling text-yellow-600 mr-1"></i>
                        <span class="text-yellow-600 text-sm font-semibold">Fresh</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-primary mb-3 font-poppins group-hover:text-secondary transition-colors">Ketahanan Pangan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Produksi padi, lombok, dan ayam joper untuk mendukung ketahanan pangan desa.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('images/pj-pangan.jpg') }}" alt="Penanggung Jawab" class="w-12 h-12 rounded-full object-cover border-3 border-yellow-200 shadow-md">
                            <div>
                                <p class="font-bold text-gray-800">Ibu Siti</p>
                                <p class="text-sm text-gray-500 font-medium">Penanggung Jawab</p>
                            </div>
                        </div>
                        <a href="https://wa.me/6281234567894" target="_blank" class="btn-whatsapp btn-hover-lift-sm">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dokumentasi Kegiatan -->
        <section class="py-24 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-20 left-20 w-32 h-32 bg-primary rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-20 w-40 h-40 bg-secondary rounded-full blur-3xl"></div>
                <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-accent rounded-full blur-2xl transform -translate-x-1/2 -translate-y-1/2"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center mb-20" data-aos="fade-up">
                    <h2 class="text-5xl font-bold text-primary mb-6 font-poppins gradient-text">Dokumentasi Kegiatan</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mb-6 rounded-full"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto text-lg leading-relaxed">Momen-momen berharga dari kegiatan dan program BUMDes kami yang telah memberdayakan masyarakat desa.</p>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap justify-center gap-4 mb-16" data-aos="fade-up" data-aos-delay="200">
                    <button class="filter-btn active px-8 py-3 rounded-full bg-gradient-to-r from-primary to-secondary text-white font-semibold transition-all transform hover:scale-105 shadow-lg" data-filter="all">
                        <i class="fas fa-th-large mr-2"></i>Semua
                    </button>
                    <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-700 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all transform hover:scale-105 shadow-md font-semibold" data-filter="internet">
                        <i class="fas fa-wifi mr-2"></i>Internet Desa
                    </button>
                    <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-700 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all transform hover:scale-105 shadow-md font-semibold" data-filter="sewa">
                        <i class="fas fa-tent mr-2"></i>Persewaan
                    </button>
                    <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-700 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all transform hover:scale-105 shadow-md font-semibold" data-filter="wisata">
                        <i class="fas fa-fish mr-2"></i>Wisata
                    </button>
                    <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-700 hover:bg-gradient-to-r hover:from-primary hover:to-secondary hover:text-white transition-all transform hover:scale-105 shadow-md font-semibold" data-filter="pangan">
                        <i class="fas fa-seedling mr-2"></i>Ketahanan Pangan
                    </button>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="400">
                    <!-- Internet Desa -->
                    <div class="gallery-item bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group" data-category="internet">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/gallery/internet1.jpg') }}" alt="Internet Desa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <p class="text-sm font-medium">Klik untuk detail</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                                <i class="fas fa-wifi text-primary text-sm"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-primary mb-2 text-lg font-poppins">Instalasi Internet Desa</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Proses pemasangan tower wifi di area desa untuk memenuhi kebutuhan internet masyarakat.</p>
                        </div>
                    </div>

                    <!-- Persewaan -->
                    <div class="gallery-item bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group" data-category="sewa">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/gallery/sewa1.jpg') }}" alt="Persewaan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <p class="text-sm font-medium">Klik untuk detail</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                                <i class="fas fa-tent text-secondary text-sm"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-primary mb-2 text-lg font-poppins">Pelayanan Persewaan</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Peminjaman tenda untuk acara pernikahan dan kegiatan masyarakat desa.</p>
                        </div>
                    </div>

                    <!-- Wisata -->
                    <div class="gallery-item bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group" data-category="wisata">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/gallery/wisata1.jpg') }}" alt="Wisata" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <p class="text-sm font-medium">Klik untuk detail</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                                <i class="fas fa-fish text-accent text-sm"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-primary mb-2 text-lg font-poppins">Area Wisata</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Pemandangan area wisata dan pemancingan yang asri dan menenangkan.</p>
                        </div>
                    </div>

                    <!-- Ketahanan Pangan -->
                    <div class="gallery-item bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group" data-category="pangan">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/gallery/pangan1.jpg') }}" alt="Ketahanan Pangan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <p class="text-sm font-medium">Klik untuk detail</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                                <i class="fas fa-seedling text-yellow-600 text-sm"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-primary mb-2 text-lg font-poppins">Panen Padi</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Kegiatan panen padi di lahan desa yang menghasilkan hasil pertanian berkualitas.</p>
                        </div>
                    </div>

                    <!-- Internet Desa 2 -->
                    <div class="gallery-item bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group" data-category="internet">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/gallery/internet2.jpg') }}" alt="Internet Desa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <p class="text-sm font-medium">Klik untuk detail</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                                <i class="fas fa-tools text-primary text-sm"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-primary mb-2 text-lg font-poppins">Maintenance Jaringan</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Perawatan rutin jaringan internet desa untuk menjaga kualitas layanan.</p>
                        </div>
                    </div>

                    <!-- Wisata 2 -->
                    <div class="gallery-item bg-white rounded-3xl shadow-2xl overflow-hidden card-hover-lift group" data-category="wisata">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('images/gallery/wisata2.jpg') }}" alt="Wisata" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <p class="text-sm font-medium">Klik untuk detail</p>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                                <i class="fas fa-water text-blue-500 text-sm"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-primary mb-2 text-lg font-poppins">Area Pemancingan</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Fasilitas pemancingan yang nyaman dengan pemandangan alam yang indah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection