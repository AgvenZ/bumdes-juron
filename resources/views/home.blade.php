@extends('layouts.app')

@section('title', 'BUMDes Juron Sejahtera - Beranda')

@section('content')
    <!-- 1) Hero Section -->
    <section class="bg-gradient-to-br from-green-700 to-green-800 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <!-- Logo BUMDes -->
            <div class="mb-8">
                <img src="{{ asset('images/bumdes-logo.png') }}" alt="Logo BUMDes Juron" class="w-32 h-32 mx-auto rounded-full shadow-lg border-4 border-white">
            </div>
            
            <!-- Nama dan Lokasi -->
            <h1 class="text-5xl md:text-6xl font-bold mb-4 font-poppins">BUMDes "Juron Sejahtera"</h1>
            <p class="text-xl md:text-2xl mb-2">Desa Juron, Kec. Jogonalan, Kab. Klaten</p>
            <p class="text-lg text-green-100 mb-8">"Maju Bersama Pemberdayaan Ekonomi Desa"</p>
            
            <!-- Tombol WhatsApp -->
            <a href="https://wa.me/6281234567890?text=Halo%20BUMDes%20Juron,%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda" 
               target="_blank" 
               class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0024.003 11.892"/>
                </svg>
                Hubungi via WhatsApp
            </a>
        </div>
    </section>

    <!-- 2) SK Kemenham (Legalitas) -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Terdaftar Resmi Berdasarkan SK Kemenham</h2>
                <button onclick="openSKModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Lihat SK
                </button>
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
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/sk-kemenham.jpg') }}" alt="SK Kemenham" class="w-full max-w-2xl mx-auto rounded-lg">
                    <div class="mt-4">
                        <a href="{{ asset('images/sk-kemenham.pdf') }}" download class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg inline-block">
                            Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3) Sekilas Struktur Organisasi (Mini Overview) -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Struktur Organisasi</h2>
                <p class="text-gray-600">Tiga jabatan kunci dalam pengelolaan BUMDes</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <!-- Direktur -->
                <div class="text-center">
                    <img src="{{ asset('images/direktur.jpg') }}" alt="Direktur" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-green-200">
                    <h3 class="font-bold text-lg text-gray-800">Nama Direktur</h3>
                    <p class="text-green-600">Direktur BUMDes</p>
                </div>
                
                <!-- Sekretaris -->
                <div class="text-center">
                    <img src="{{ asset('images/sekretaris.jpg') }}" alt="Sekretaris" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-green-200">
                    <h3 class="font-bold text-lg text-gray-800">Nama Sekretaris</h3>
                    <p class="text-green-600">Sekretaris</p>
                </div>
                
                <!-- Bendahara -->
                <div class="text-center">
                    <img src="{{ asset('images/bendahara.jpg') }}" alt="Bendahara" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-green-200">
                    <h3 class="font-bold text-lg text-gray-800">Nama Bendahara</h3>
                    <p class="text-green-600">Bendahara</p>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="{{ route('organization') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Lihat Struktur Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- 4) Direktur BUMDes (Section Orang) -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/3">
                        <img src="{{ asset('images/direktur-large.jpg') }}" alt="Direktur BUMDes" class="w-full rounded-lg shadow-lg object-cover">
                    </div>
                    <div class="md:w-2/3 text-center md:text-left">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Direktur BUMDes</h2>
                        <h3 class="text-2xl text-green-600 mb-6">Nama Lengkap Direktur</h3>
                        <p class="text-gray-600 mb-8">Pemimpin BUMDes yang berkomitmen untuk mengembangkan ekonomi desa dan meningkatkan kesejahteraan masyarakat Desa Juron.</p>
                        <a href="https://wa.me/6281234567890?text=Halo%20Pak%20Direktur,%20saya%20ingin%20bertanya%20tentang%20BUMDes" 
                           target="_blank" 
                           class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-medium transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0024.003 11.892"/>
                            </svg>
                            Chat WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5) Unit Usaha (Card Grid) -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Unit Usaha Kami</h2>
                <p class="text-gray-600">Empat unit usaha utama BUMDes Juron</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <!-- Internet Desa -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <svg class="w-20 h-20 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Internet Desa</h3>
                        <p class="text-gray-600 mb-4">Penanggung Jawab: Nama PJ</p>
                        <div class="space-y-2">
                            <a href="https://wa.me/6281234567891" target="_blank" class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-medium">
                                Chat WhatsApp
                            </a>
                            <a href="{{ route('units') }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center py-2 rounded-lg font-medium">
                                Detail Unit
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Persewaan Kajang & Sound System -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-purple-100 flex items-center justify-center">
                        <svg class="w-20 h-20 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Persewaan Kajang & Sound System</h3>
                        <p class="text-gray-600 mb-4">Penanggung Jawab: Nama PJ</p>
                        <div class="space-y-2">
                            <a href="https://wa.me/6281234567892" target="_blank" class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-medium">
                                Chat WhatsApp
                            </a>
                            <a href="{{ route('units') }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center py-2 rounded-lg font-medium">
                                Detail Unit
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Wisata & Pemancingan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-teal-100 flex items-center justify-center">
                        <svg class="w-20 h-20 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Wisata & Pemancingan</h3>
                        <p class="text-gray-600 mb-4">Penanggung Jawab: Nama PJ</p>
                        <div class="space-y-2">
                            <a href="https://wa.me/6281234567893" target="_blank" class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-medium">
                                Chat WhatsApp
                            </a>
                            <a href="{{ route('units') }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center py-2 rounded-lg font-medium">
                                Detail Unit
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Ketahanan Pangan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-green-100 flex items-center justify-center">
                        <svg class="w-20 h-20 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ketahanan Pangan</h3>
                        <p class="text-gray-600 mb-1">Padi / Lombok / Ayam Joper</p>
                        <p class="text-gray-600 mb-4">Penanggung Jawab: Nama PJ</p>
                        <div class="space-y-2">
                            <a href="https://wa.me/6281234567894" target="_blank" class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-medium">
                                Chat WhatsApp
                            </a>
                            <a href="{{ route('units') }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center py-2 rounded-lg font-medium">
                                Detail Unit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6) Dokumentasi / Galeri Usaha -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Dokumentasi & Galeri Usaha</h2>
                <p class="text-gray-600">Momen terbaik dari kegiatan usaha kami</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <img src="{{ asset('images/galeri1.jpg') }}" alt="Kegiatan 1" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-4 text-white">
                            <p class="font-semibold">Kegiatan Internet Desa</p>
                        </div>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <img src="{{ asset('images/galeri2.jpg') }}" alt="Kegiatan 2" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-4 text-white">
                            <p class="font-semibold">Persewaan Sound System</p>
                        </div>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <img src="{{ asset('images/galeri3.jpg') }}" alt="Kegiatan 3" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-4 text-white">
                            <p class="font-semibold">Wisata Pemancingan</p>
                        </div>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <img src="{{ asset('images/galeri4.jpg') }}" alt="Kegiatan 4" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-4 text-white">
                            <p class="font-semibold">Budidaya Padi</p>
                        </div>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <img src="{{ asset('images/galeri5.jpg') }}" alt="Kegiatan 5" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-4 text-white">
                            <p class="font-semibold">Kegiatan Lombok</p>
                        </div>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all">
                    <img src="{{ asset('images/galeri6.jpg') }}" alt="Kegiatan 6" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-4 text-white">
                            <p class="font-semibold">Ayam Joper</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Lihat Semua Galeri
                </a>
            </div>
        </div>
    </section>

    <!-- JavaScript untuk Modal -->
    <script>
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
    </script>
@endsection