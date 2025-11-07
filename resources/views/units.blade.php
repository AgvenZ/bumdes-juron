@extends('layouts.app')

@section('title', 'Unit Usaha')

@section('content')
    <!-- Hero Section -->
    <section class="bg-village-green-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4 font-poppins">Unit Usaha</h1>
            <p class="text-xl text-village-green-100">Berbagai Bidang Usaha yang Dikelola oleh BUMDes Juron</p>
        </div>
    </section>

    <!-- Units Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-village-green-800 mb-2 font-poppins">Unit Usaha BUMDes Juron</h2>
                <div class="w-24 h-1 bg-village-brown-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    BUMDes Juron mengelola berbagai unit usaha untuk mengoptimalkan potensi desa dan meningkatkan kesejahteraan masyarakat.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Unit 1: Pasar Desa -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-village-green-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-2">Pengelolaan Pasar Desa</h3>
                        <p class="text-gray-600 mb-4">
                            Unit usaha ini mengelola pasar desa yang menjadi pusat perdagangan produk-produk lokal. Pasar desa menyediakan tempat bagi para petani dan pengrajin lokal untuk menjual hasil produksi mereka secara langsung kepada konsumen.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-village-brown-600 font-medium">Manajer: Hendra Wijaya</span>
                            <a href="{{ route('unit.detail', 1) }}" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Unit 2: Simpan Pinjam -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-village-green-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-2">Simpan Pinjam</h3>
                        <p class="text-gray-600 mb-4">
                            Unit simpan pinjam menyediakan layanan keuangan mikro bagi masyarakat desa. Unit ini membantu masyarakat untuk mengembangkan usaha dan memenuhi kebutuhan finansial dengan bunga yang terjangkau dan prosedur yang mudah.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-village-brown-600 font-medium">Manajer: Rina Wati</span>
                            <a href="{{ route('unit.detail', 2) }}" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Unit 3: Wisata Desa -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-village-green-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-2">Wisata Desa</h3>
                        <p class="text-gray-600 mb-4">
                            Unit wisata desa mengembangkan dan mengelola potensi wisata yang ada di Desa Juron. Dengan keindahan alam dan kekayaan budaya yang dimiliki, unit ini berupaya menarik pengunjung dan meningkatkan pendapatan masyarakat lokal.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-village-brown-600 font-medium">Manajer: Agus Purnomo</span>
                            <a href="{{ route('unit.detail', 3) }}" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Unit 4: Pertanian -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-village-green-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-2">Pertanian Terpadu</h3>
                        <p class="text-gray-600 mb-4">
                            Unit pertanian terpadu mengelola lahan pertanian milik desa dengan menerapkan sistem pertanian modern dan berkelanjutan. Unit ini juga memberikan pendampingan kepada petani lokal untuk meningkatkan hasil produksi.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-village-brown-600 font-medium">Manajer: Joko Susilo</span>
                            <a href="{{ route('unit.detail', 4) }}" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Unit 5: Kerajinan -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-village-green-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-2">Kerajinan Desa</h3>
                        <p class="text-gray-600 mb-4">
                            Unit kerajinan desa memproduksi dan memasarkan berbagai kerajinan tangan yang dibuat oleh masyarakat Desa Juron. Produk kerajinan ini menjadi ciri khas desa dan memiliki nilai jual yang tinggi.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-village-brown-600 font-medium">Manajer: Sri Wahyuni</span>
                            <a href="{{ route('unit.detail', 5) }}" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Unit 6: Air Bersih -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-village-green-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-village-green-800 mb-2">Pengelolaan Air Bersih</h3>
                        <p class="text-gray-600 mb-4">
                            Unit pengelolaan air bersih bertanggung jawab untuk menyediakan akses air bersih bagi seluruh masyarakat Desa Juron. Unit ini mengelola sumber air dan jaringan distribusi untuk memastikan ketersediaan air bersih.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-village-brown-600 font-medium">Manajer: Bambang Sutrisno</span>
                            <a href="{{ route('unit.detail', 6) }}" class="text-village-green-600 hover:text-village-green-800 font-medium inline-flex items-center">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-village-green-700 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-2/3 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4 font-poppins">Tertarik Bekerja Sama dengan BUMDes Juron?</h2>
                    <p class="text-xl text-village-green-100">
                        Kami terbuka untuk berbagai bentuk kerja sama yang saling menguntungkan. Hubungi kami untuk informasi lebih lanjut.
                    </p>
                </div>
                <div>
                    <a href="#" class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-8 py-4 rounded-md font-medium text-lg transition-colors inline-block">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection