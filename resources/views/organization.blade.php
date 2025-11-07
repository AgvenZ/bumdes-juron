@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
    <!-- Hero Section -->
    <section class="bg-village-green-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4 font-poppins">Struktur Organisasi</h1>
            <p class="text-xl text-village-green-100">Pengelola BUMDes Juron yang Profesional dan Berdedikasi</p>
        </div>
    </section>

    <!-- Organization Structure Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-village-green-800 mb-2 font-poppins">Pengurus BUMDes Juron</h2>
                <div class="w-24 h-1 bg-village-brown-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Struktur organisasi BUMDes Juron terdiri dari individu-individu yang berpengalaman dan berdedikasi untuk memajukan perekonomian desa.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Komisaris -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-64 bg-village-green-100 flex items-center justify-center">
                        <div class="w-40 h-40 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-1">Budi Santoso</h3>
                        <p class="text-village-brown-600 font-medium mb-4">Komisaris</p>
                        <p class="text-gray-600 mb-4">
                            Bertanggung jawab untuk mengawasi kinerja BUMDes dan memberikan arahan strategis.
                        </p>
                        <button onclick="openWhatsApp('6281234567890')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
                
                <!-- Direktur -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-64 bg-village-green-100 flex items-center justify-center">
                        <div class="w-40 h-40 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-1">Siti Rahayu</h3>
                        <p class="text-village-brown-600 font-medium mb-4">Direktur</p>
                        <p class="text-gray-600 mb-4">
                            Memimpin operasional BUMDes dan bertanggung jawab atas pengelolaan seluruh unit usaha.
                        </p>
                        <button onclick="openWhatsApp('6281234567891')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
                
                <!-- Sekretaris -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-64 bg-village-green-100 flex items-center justify-center">
                        <div class="w-40 h-40 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-1">Ahmad Fauzi</h3>
                        <p class="text-village-brown-600 font-medium mb-4">Sekretaris</p>
                        <p class="text-gray-600 mb-4">
                            Mengelola administrasi dan dokumentasi BUMDes serta membantu direktur dalam koordinasi.
                        </p>
                        <button onclick="openWhatsApp('6281234567892')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Bendahara -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-48 bg-village-green-100 flex items-center justify-center">
                        <div class="w-28 h-28 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-village-green-800 mb-1">Dewi Lestari</h3>
                        <p class="text-village-brown-600 font-medium mb-3">Bendahara</p>
                        <p class="text-gray-600 mb-3 text-sm">
                            Mengelola keuangan BUMDes dan membuat laporan keuangan.
                        </p>
                        <button onclick="openWhatsApp('6281234567893')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
                
                <!-- Manajer Unit Pasar -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-48 bg-village-green-100 flex items-center justify-center">
                        <div class="w-28 h-28 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-village-green-800 mb-1">Hendra Wijaya</h3>
                        <p class="text-village-brown-600 font-medium mb-3">Manajer Unit Pasar</p>
                        <p class="text-gray-600 mb-3 text-sm">
                            Mengelola operasional pasar desa dan pengembangan usaha.
                        </p>
                        <button onclick="openWhatsApp('6281234567894')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
                
                <!-- Manajer Unit Simpan Pinjam -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-48 bg-village-green-100 flex items-center justify-center">
                        <div class="w-28 h-28 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-village-green-800 mb-1">Rina Wati</h3>
                        <p class="text-village-brown-600 font-medium mb-3">Manajer Unit Simpan Pinjam</p>
                        <p class="text-gray-600 mb-3 text-sm">
                            Mengelola layanan keuangan mikro untuk masyarakat desa.
                        </p>
                        <button onclick="openWhatsApp('6281234567895')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
                
                <!-- Manajer Unit Wisata -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden text-center transform transition-transform hover:scale-105">
                    <div class="h-48 bg-village-green-100 flex items-center justify-center">
                        <div class="w-28 h-28 rounded-full bg-village-green-200 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-village-green-800 mb-1">Agus Purnomo</h3>
                        <p class="text-village-brown-600 font-medium mb-3">Manajer Unit Wisata</p>
                        <p class="text-gray-600 mb-3 text-sm">
                            Mengembangkan dan mengelola potensi wisata desa.
                        </p>
                        <button onclick="openWhatsApp('6281234567896')" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organization Chart Section -->
    <section class="py-16 bg-village-cream-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-village-green-800 mb-2 font-poppins">Bagan Organisasi</h2>
                <div class="w-24 h-1 bg-village-brown-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Struktur organisasi BUMDes Juron dirancang untuk memastikan pengelolaan yang efektif dan profesional.
                </p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="flex flex-col items-center">
                    <!-- Komisaris -->
                    <div class="bg-village-green-600 text-white px-6 py-3 rounded-lg mb-4 w-64 text-center">
                        <h3 class="font-semibold">Komisaris</h3>
                        <p class="text-sm text-village-green-100">Budi Santoso</p>
                    </div>
                    
                    <!-- Connecting Line -->
                    <div class="w-1 h-8 bg-village-green-600"></div>
                    
                    <!-- Direktur -->
                    <div class="bg-village-green-600 text-white px-6 py-3 rounded-lg mb-4 w-64 text-center">
                        <h3 class="font-semibold">Direktur</h3>
                        <p class="text-sm text-village-green-100">Siti Rahayu</p>
                    </div>
                    
                    <!-- Connecting Lines -->
                    <div class="w-1 h-8 bg-village-green-600"></div>
                    <div class="w-3/4 h-1 bg-village-green-600"></div>
                    <div class="flex justify-between w-3/4 mb-4">
                        <div class="w-1 h-8 bg-village-green-600"></div>
                        <div class="w-1 h-8 bg-village-green-600"></div>
                        <div class="w-1 h-8 bg-village-green-600"></div>
                    </div>
                    
                    <!-- Second Level -->
                    <div class="flex flex-col md:flex-row justify-between w-full mb-8 space-y-4 md:space-y-0 md:space-x-4">
                        <div class="bg-village-brown-500 text-white px-4 py-2 rounded-lg w-full md:w-1/3 text-center">
                            <h3 class="font-semibold">Sekretaris</h3>
                            <p class="text-sm text-village-brown-100">Ahmad Fauzi</p>
                        </div>
                        
                        <div class="bg-village-brown-500 text-white px-4 py-2 rounded-lg w-full md:w-1/3 text-center">
                            <h3 class="font-semibold">Bendahara</h3>
                            <p class="text-sm text-village-brown-100">Dewi Lestari</p>
                        </div>
                    </div>
                    
                    <!-- Connecting Lines -->
                    <div class="w-3/4 h-1 bg-village-green-600 mb-4"></div>
                    <div class="flex justify-between w-3/4 mb-4">
                        <div class="w-1 h-8 bg-village-green-600"></div>
                        <div class="w-1 h-8 bg-village-green-600"></div>
                        <div class="w-1 h-8 bg-village-green-600"></div>
                    </div>
                    
                    <!-- Third Level -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
                        <div class="bg-village-green-500 text-white px-4 py-2 rounded-lg text-center">
                            <h3 class="font-semibold">Unit Pasar Desa</h3>
                            <p class="text-sm text-village-green-100">Hendra Wijaya</p>
                        </div>
                        
                        <div class="bg-village-green-500 text-white px-4 py-2 rounded-lg text-center">
                            <h3 class="font-semibold">Unit Simpan Pinjam</h3>
                            <p class="text-sm text-village-green-100">Rina Wati</p>
                        </div>
                        
                        <div class="bg-village-green-500 text-white px-4 py-2 rounded-lg text-center">
                            <h3 class="font-semibold">Unit Wisata Desa</h3>
                            <p class="text-sm text-village-green-100">Agus Purnomo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection