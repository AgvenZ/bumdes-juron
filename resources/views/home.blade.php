<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMDes Juron - Badan Usaha Milik Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'village-green': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d'
                        },
                        'village-cream': {
                            50: '#fefdf8',
                            100: '#fef9f0',
                            200: '#fdf2e0',
                            300: '#fbe6c1',
                            400: '#f8d5a0',
                            500: '#f4c178',
                            600: '#f0b35b',
                            700: '#e9a047',
                            800: '#d68c3a',
                            900: '#b87530'
                        }
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .village-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .village-shadow-lg {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        .village-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .village-hover-lift:hover {
            transform: translateY(-5px);
        }
        .village-text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .village-border-gradient {
            border-image: linear-gradient(45deg, #16a34a, #f4c178) 1;
        }
        .village-profile-ring {
            border: 4px solid transparent;
            background: linear-gradient(45deg, #16a34a, #f4c178) border-box;
            border-radius: 50%;
        }
        .village-profile-img {
            border: 4px solid white;
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        .animate-slide-up {
            animation: slideUp 0.6s ease-out;
        }
        .delay-200 { animation-delay: 200ms; }
        .delay-400 { animation-delay: 400ms; }
        .delay-600 { animation-delay: 600ms; }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="font-poppins bg-gradient-to-br from-village-green-50 to-village-cream-50">
    <!-- Modern Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2316a34a" fill-opacity="0.1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-village-green-200 rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute bottom-32 right-16 w-16 h-16 bg-village-cream-400 rounded-full opacity-30 animate-bounce delay-1000"></div>
        <div class="absolute top-1/3 right-20 w-12 h-12 bg-village-green-300 rounded-full opacity-25 animate-pulse"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="text-center lg:text-left">
                        <div class="animate-slide-up">
                            <h1 class="text-5xl lg:text-7xl font-bold text-gray-800 mb-6 village-text-shadow">
                                <span class="bg-gradient-to-r from-village-green-700 to-village-green-800 bg-clip-text text-transparent">
                                    BUMDes
                                </span>
                                <br>
                                <span class="text-village-cream-700">Juron</span>
                            </h1>
                            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                                Badan Usaha Milik Desa yang melayani masyarakat dengan penuh dedikasi,
                                transparansi, dan profesionalisme untuk kemajuan Desa Juron.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 animate-slide-up delay-200">
                            <a href="#profile" class="bg-gradient-to-r from-village-green-600 to-village-green-700 hover:from-village-green-700 hover:to-village-green-800 text-white px-8 py-4 rounded-2xl font-semibold village-transition village-shadow-lg hover:scale-105 village-hover-lift flex items-center justify-center space-x-3">
                                <i class="fas fa-building"></i>
                                <span>Lihat Profil</span>
                            </a>
                            <a href="#contact" class="bg-white hover:bg-gray-50 text-village-green-700 px-8 py-4 rounded-2xl font-semibold village-transition village-shadow-lg hover:scale-105 village-hover-lift border-2 border-village-green-200 flex items-center justify-center space-x-3">
                                <i class="fas fa-phone"></i>
                                <span>Hubungi Kami</span>
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-6 mt-12 animate-slide-up delay-400">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-village-green-700">3+</div>
                                <div class="text-sm text-gray-600">Tahun Melayani</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-village-green-700">5</div>
                                <div class="text-sm text-gray-600">Unit Usaha</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-village-green-700">1000+</div>
                                <div class="text-sm text-gray-600">Masyarakat Terlayani</div>
                            </div>
                        </div>
                    </div>

                    <div class="relative animate-fade-in delay-600">
                        <div class="relative">
                            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 village-shadow-lg village-border-gradient border-2 village-hover-lift village-transition">
                                <div class="text-center mb-6">
                                    <div class="w-24 h-24 bg-gradient-to-br from-village-green-100 to-village-cream-100 rounded-2xl mx-auto mb-4 flex items-center justify-center village-shadow-md">
                                        <i class="fas fa-handshake text-4xl text-village-green-700"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Misi Kami</h3>
                                    <p class="text-gray-600">Melayani dengan sepenuh hati</p>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-village-green-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-village-green-600 text-sm"></i>
                                        </div>
                                        <span class="text-gray-700">Pelayanan cepat & efisien</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-village-green-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-village-green-600 text-sm"></i>
                                        </div>
                                        <span class="text-gray-700">Transparansi dalam pengelolaan</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-village-green-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-village-green-600 text-sm"></i>
                                        </div>
                                        <span class="text-gray-700">Kemajuan bersama masyarakat</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Decorative elements -->
                            <div class="absolute -top-4 -right-4 w-8 h-8 bg-village-cream-500 rounded-full village-shadow-lg"></div>
                            <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-village-green-500 rounded-full village-shadow-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern SK Kemenham Section -->
    <section id="profile" class="py-20 bg-gradient-to-br from-village-green-50 to-village-cream-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2316a34a" fill-opacity="0.1"%3E%3Cpath d="M0 38.59l2.83-2.83 1.41 1.41L1.41 40H0v-1.41zM0 1.4l2.83 2.83 1.41-1.41L1.41 0H0v1.41zM38.59 40l-2.83-2.83 1.41-1.41L40 38.59V40h-1.41zM40 1.41l-2.83 2.83-1.41-1.41L38.59 0H40v1.41zM20 18.6l2.83-2.83 1.41 1.41L21.41 20l2.83 2.83-1.41 1.41L20 21.41l-2.83 2.83-1.41-1.41L18.59 20l-2.83-2.83 1.41-1.41L20 18.59z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-village-green-100 to-village-cream-100 rounded-2xl mb-6 village-shadow-lg village-hover-lift village-transition">
                        <i class="fas fa-certificate text-3xl text-village-green-700"></i>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 font-poppins village-text-shadow">
                        <span class="bg-gradient-to-r from-village-green-700 to-village-green-800 bg-clip-text text-transparent">
                            Terdaftar Resmi
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        BUMDes Juron telah terdaftar secara resmi berdasarkan Surat Keputusan Kementerian Hukum dan HAM
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-xl flex items-center justify-center village-shadow-lg">
                                    <i class="fas fa-shield-alt text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Legalitas Resmi</h3>
                                    <p class="text-gray-600">Telah memiliki izin operasional dari Kemenkumham dengan nomor registrasi yang sah.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-xl flex items-center justify-center village-shadow-lg">
                                    <i class="fas fa-calendar-check text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Berdiri Sejak 2020</h3>
                                    <p class="text-gray-600">Melayani masyarakat Desa Juron secara legal dan transparan selama lebih dari 3 tahun.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-xl flex items-center justify-center village-shadow-lg">
                                    <i class="fas fa-eye text-white text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Pengawasan Ketat</h3>
                                    <p class="text-gray-600">Senantiasa mematuhi peraturan dan tunduk pada pengawasan pemerintah desa.</p>
                                </div>
                            </div>

                            <div class="pt-4">
                                <button onclick="openSKModal()" class="bg-gradient-to-r from-village-green-600 to-village-green-700 hover:from-village-green-700 hover:to-village-green-800 text-white px-8 py-4 rounded-2xl font-semibold village-transition village-shadow-lg hover:scale-105 village-hover-lift flex items-center space-x-3">
                                    <i class="fas fa-file-alt"></i>
                                    <span>Lihat Dokumen Legalitas</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 md:order-2">
                        <div class="relative">
                            <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 village-shadow-lg village-border-gradient border-2">
                                <div class="text-center">
                                    <div class="w-24 h-24 bg-gradient-to-br from-village-green-100 to-village-cream-100 rounded-2xl mx-auto mb-6 flex items-center justify-center village-shadow-md">
                                        <i class="fas fa-file-certificate text-4xl text-village-green-700"></i>
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-4 font-poppins">Surat Keputusan</h3>
                                    <div class="space-y-3 text-left">
                                        <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                            <span class="text-gray-600">Nomor SK</span>
                                            <span class="font-semibold text-village-green-700">123/BA.01/2020</span>
                                        </div>
                                        <div class="flex justify-between items-center py-2 border-b border-gray-200">
                                            <span class="text-gray-600">Tanggal</span>
                                            <span class="font-semibold text-village-green-700">15 Januari 2020</span>
                                        </div>
                                        <div class="flex justify-between items-center py-2">
                                            <span class="text-gray-600">Status</span>
                                            <span class="font-semibold text-green-600"><i class="fas fa-check-circle mr-1"></i>Aktif</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 w-8 h-8 bg-village-green-600 rounded-full flex items-center justify-center village-shadow-lg">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal SK -->
    <div id="skModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg max-w-4xl mx-4 max-h-[90vh] overflow-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold">SK Kemenham BUMDes Juron</h3>
                    <button onclick="closeSKModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/sk-kemenham.jpg') }}" alt="SK Kemenham" class="w-full max-w-2xl mx-auto rounded-lg">
                    <div class="mt-4">
                        <a href="{{ asset('images/sk-kemenham.pdf') }}" download class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg inline-block">
                            <i class="fas fa-download mr-2"></i>Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modern Struktur Organisasi Section -->
    <section class="py-20 bg-gradient-to-br from-village-cream-50 to-village-green-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%2316a34a" fill-opacity="0.1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-village-green-100 to-village-cream-100 rounded-3xl mb-6 village-shadow-lg village-hover-lift village-transition">
                        <i class="fas fa-users-cog text-4xl text-village-green-700"></i>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 font-poppins village-text-shadow">
                        <span class="bg-gradient-to-r from-village-green-700 to-village-green-800 bg-clip-text text-transparent">
                            Struktur Organisasi
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        Tiga jabatan kunci dalam pengelolaan BUMDes yang profesional dan transparan
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-12">
                    <!-- Direktur -->
                    <div class="group relative">
                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 village-shadow-lg village-hover-lift village-transition text-center village-border-gradient border-2">
                            <div class="relative mb-6">
                                <div class="w-32 h-32 mx-auto relative village-profile-ring">
                                    <img src="{{ asset('images/direktur.jpg') }}" alt="Direktur" class="w-full h-full rounded-full object-cover village-profile-img">
                                    <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-full flex items-center justify-center village-shadow-md">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 font-poppins">Nama Direktur</h3>
                            <p class="text-village-green-700 font-semibold mb-4">Direktur BUMDes</p>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p><i class="fas fa-user-tie mr-2 text-village-green-600"></i>Pemimpin Utama</p>
                                <p><i class="fas fa-calendar mr-2 text-village-green-600"></i>Menjabat Sejak 2020</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sekretaris -->
                    <div class="group relative">
                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 village-shadow-lg village-hover-lift village-transition text-center village-border-gradient border-2">
                            <div class="relative mb-6">
                                <div class="w-32 h-32 mx-auto relative village-profile-ring">
                                    <img src="{{ asset('images/sekretaris.jpg') }}" alt="Sekretaris" class="w-full h-full rounded-full object-cover village-profile-img">
                                    <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-full flex items-center justify-center village-shadow-md">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 font-poppins">Nama Sekretaris</h3>
                            <p class="text-village-green-700 font-semibold mb-4">Sekretaris</p>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p><i class="fas fa-file-alt mr-2 text-village-green-600"></i>Pengelola Administrasi</p>
                                <p><i class="fas fa-calendar mr-2 text-village-green-600"></i>Menjabat Sejak 2020</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bendahara -->
                    <div class="group relative">
                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 village-shadow-lg village-hover-lift village-transition text-center village-border-gradient border-2">
                            <div class="relative mb-6">
                                <div class="w-32 h-32 mx-auto relative village-profile-ring">
                                    <img src="{{ asset('images/bendahara.jpg') }}" alt="Bendahara" class="w-full h-full rounded-full object-cover village-profile-img">
                                    <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-village-green-600 to-village-green-700 rounded-full flex items-center justify-center village-shadow-md">
                                        <i class="fas fa-check text-white text-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 font-poppins">Nama Bendahara</h3>
                            <p class="text-village-green-700 font-semibold mb-4">Bendahara</p>
                            <div class="space-y-2 text-sm text-gray-600">
                                <p><i class="fas fa-calculator mr-2 text-village-green-600"></i>Pengelola Keuangan</p>
                                <p><i class="fas fa-calendar mr-2 text-village-green-600"></i>Menjabat Sejak 2020</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center">
                    <a href="{{ route('organization') }}" class="bg-gradient-to-r from-village-green-600 to-village-green-700 hover:from-village-green-700 hover:to-village-green-800 text-white px-8 py-4 rounded-2xl font-semibold village-transition village-shadow-lg hover:scale-105 village-hover-lift inline-flex items-center space-x-3">
                        <i class="fas fa-sitemap"></i>
                        <span>Lihat Struktur Lengkap</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Direktur Section -->
    <section class="py-20 bg-gradient-to-br from-village-green-50 to-village-cream-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-village-green-100 to-village-cream-100 rounded-2xl mb-6 village-shadow-lg village-hover-lift village-transition">
                        <i class="fas fa-user-tie text-3xl text-village-green-700"></i>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 font-poppins village-text-shadow">
                        <span class="bg-gradient-to-r from-village-green-700 to-village-green-800 bg-clip-text text-transparent">
                            Pimpinan BUMDes
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        Profil direktur yang memimpin BUMDes Juron dengan integritas dan dedikasi
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 village-shadow-lg village-border-gradient border-2 village-hover-lift village-transition">
                            <div class="text-center mb-6">
                                <div class="w-40 h-40 mx-auto relative village-profile-ring mb-4">
                                    <img src="{{ asset('images/direktur-large.jpg') }}" alt="Direktur" class="w-full h-full rounded-full object-cover village-profile-img">
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Nama Lengkap Direktur</h3>
                                <p class="text-village-green-700 font-semibold text-lg">Direktur Utama BUMDes Juron</p>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-village-green-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-village-green-600 text-sm"></i>
                                    </div>
                                    <span class="text-gray-700">Latar Belakang Pendidikan</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-village-green-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-briefcase text-village-green-600 text-sm"></i>
                                    </div>
                                    <span class="text-gray-700">Pengalaman Kerja</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-village-green-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-award text-village-green-600 text-sm"></i>
                                    </div>
                                    <span class="text-gray-700">Prestasi & Pengalaman</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-6 village-shadow-lg village-border-gradient border-2 village-hover-lift village-transition">
                            <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-quote-left text-village-green-600 mr-3"></i>
                                Visi Pimpinan
                            </h4>
                            <p class="text-gray-700 leading-relaxed">
                                "Mewujudkan BUMDes yang profesional, transparan, dan berdaya saing tinggi
                                untuk kemajuan ekonomi masyarakat Desa Juron."
                            </p>
                        </div>

                        <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-6 village-shadow-lg village-border-gradient border-2 village-hover-lift village-transition">
                            <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-target text-village-green-600 mr-3"></i>
                                Target Strategis
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-arrow-right text-village-green-500 mt-1 text-sm"></i>
                                    <span>Meningkatkan pelayanan kepada masyarakat</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-arrow-right text-village-green-500 mt-1 text-sm"></i>
                                    <span>Mengembangkan unit-unit usaha yang berkelanjutan</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fas fa-arrow-right text-village-green-500 mt-1 text-sm"></i>
                                    <span>Menciptakan lapangan kerja baru</span>
                                </li>
                            </ul>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('units') }}" class="bg-gradient-to-r from-village-green-600 to-village-green-700 hover:from-village-green-700 hover:to-village-green-800 text-white px-8 py-4 rounded-2xl font-semibold village-transition village-shadow-lg hover:scale-105 village-hover-lift inline-flex items-center space-x-3">
                                <i class="fas fa-building"></i>
                                <span>Lihat Unit Usaha</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gradient-to-br from-gray-800 to-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center md:text-left">
                        <h3 class="text-2xl font-bold mb-4 text-village-cream-300">BUMDes Juron</h3>
                        <p class="text-gray-300 mb-4">
                            Badan Usaha Milik Desa yang melayani masyarakat dengan penuh dedikasi dan transparansi.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-village-cream-400 hover:text-village-cream-300 village-transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-village-cream-400 hover:text-village-cream-300 village-transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-village-cream-400 hover:text-village-cream-300 village-transition">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-center">
                        <h3 class="text-xl font-bold mb-4 text-village-cream-300">Kontak</h3>
                        <div class="space-y-2 text-gray-300">
                            <p><i class="fas fa-map-marker-alt mr-2 text-village-cream-400"></i>Desa Juron, Kecamatan...</p>
                            <p><i class="fas fa-phone mr-2 text-village-cream-400"></i>+62 8xx xxxx xxxx</p>
                            <p><i class="fas fa-envelope mr-2 text-village-cream-400"></i>bumdes.juron@email.com</p>
                        </div>
                    </div>

                    <div class="text-center md:text-right">
                        <h3 class="text-xl font-bold mb-4 text-village-cream-300">Jam Operasional</h3>
                        <div class="space-y-2 text-gray-300">
                            <p>Senin - Jumat: 08:00 - 16:00</p>
                            <p>Sabtu: 08:00 - 12:00</p>
                            <p>Minggu: Tutup</p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2024 BUMDes Juron. Hak Cipta Dilindungi.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
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

        // Modal functions
        function openSKModal() {
            document.getElementById('skModal').classList.remove('hidden');
            document.getElementById('skModal').classList.add('flex');
        }

        function closeSKModal() {
            document.getElementById('skModal').classList.add('hidden');
            document.getElementById('skModal').classList.remove('flex');
        }

        // Close modal when clicking outside
        document.getElementById('skModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSKModal();
            }
        });

        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
