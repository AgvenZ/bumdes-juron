@extends('layouts.app')

@section('title', 'Dokumentasi Kegiatan - BUMDes Juron')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-village-green-600 via-village-green-700 to-village-green-800 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-32 h-32 bg-white rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-32 w-24 h-24 bg-village-cream-200 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-32 left-1/4 w-40 h-40 bg-white rounded-full animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <i class="fas fa-file-alt absolute top-1/4 left-10 text-white text-4xl opacity-20 animate-float"></i>
        <i class="fas fa-folder-open absolute top-1/3 right-16 text-white text-3xl opacity-20 animate-float" style="animation-delay: 1.5s;"></i>
        <i class="fas fa-certificate absolute bottom-1/3 left-20 text-white text-5xl opacity-20 animate-float" style="animation-delay: 2.5s;"></i>
        <i class="fas fa-scroll absolute bottom-1/4 right-12 text-white text-4xl opacity-20 animate-float" style="animation-delay: 3.5s;"></i>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-white/20 backdrop-blur-sm rounded-3xl shadow-2xl mb-8 village-transition hover:scale-110">
                <i class="fas fa-folder-open text-white text-5xl"></i>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 font-poppins village-text-shadow animate-fade-in">
                Dokumentasi Kegiatan
            </h1>
            <p class="text-xl text-village-green-100 max-w-3xl mx-auto leading-relaxed animate-fade-in-delay">
                Arsip dokumen resmi dan transparansi kegiatan BUMDes Juron untuk kemandirian desa
            </p>
            <div class="mt-8 flex justify-center animate-fade-in-delay-2">
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 border border-white/30">
                    <span class="text-white font-medium flex items-center">
                        <i class="fas fa-file-contract mr-2"></i>
                        {{ $documents->count() }} Dokumen Tersedia
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Document Categories -->
<section class="py-16 bg-gradient-to-br from-village-cream-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-village-green-800 mb-4 font-poppins">Kategori Dokumen</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Dokumen-dokumen penting yang dikelola oleh BUMDes Juron untuk transparansi dan akuntabilitas
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <!-- SK Kemenham -->
            <div class="bg-white rounded-2xl p-8 shadow-xl village-card hover:shadow-2xl border border-village-green-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 village-transition hover:scale-110">
                    <i class="fas fa-certificate text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">SK Kemenham</h3>
                <p class="text-gray-600 text-center mb-4">Surat Keputusan Kementerian Hukum dan HAM</p>
                <div class="text-center">
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                        Dokumen Resmi
                    </span>
                </div>
            </div>

            <!-- Anggaran Dasar -->
            <div class="bg-white rounded-2xl p-8 shadow-xl village-card hover:shadow-2xl border border-village-green-100">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 village-transition hover:scale-110">
                    <i class="fas fa-file-contract text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Anggaran Dasar</h3>
                <p class="text-gray-600 text-center mb-4">Panduan dasar pengelolaan BUMDes</p>
                <div class="text-center">
                    <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">
                        Peraturan
                    </span>
                </div>
            </div>

            <!-- Laporan Keuangan -->
            <div class="bg-white rounded-2xl p-8 shadow-xl village-card hover:shadow-2xl border border-village-green-100">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center mx-auto mb-6 village-transition hover:scale-110">
                    <i class="fas fa-chart-line text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Laporan Keuangan</h3>
                <p class="text-gray-600 text-center mb-4">Transparansi keuangan BUMDes</p>
                <div class="text-center">
                    <span class="bg-amber-100 text-amber-800 text-sm font-medium px-3 py-1 rounded-full">
                        Keuangan
                    </span>
                </div>
            </div>

            <!-- Peraturan Desa -->
            <div class="bg-white rounded-2xl p-8 shadow-xl village-card hover:shadow-2xl border border-village-green-100">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 village-transition hover:scale-110">
                    <i class="fas fa-scroll text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Peraturan Desa</h3>
                <p class="text-gray-600 text-center mb-4">Peraturan yang mengatur BUMDes</p>
                <div class="text-center">
                    <span class="bg-purple-100 text-purple-800 text-sm font-medium px-3 py-1 rounded-full">
                        Perdes
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documents List -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-village-green-800 mb-4 font-poppins">Arsip Dokumen</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Semua dokumen tersedia dalam format PDF dan dapat diunduh secara gratis
            </p>
        </div>

        @if($documents->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($documents as $document)
                    <div class="bg-gradient-to-br from-village-cream-50 to-white rounded-2xl p-6 shadow-lg village-card hover:shadow-2xl border border-village-green-100 group">
                        <!-- Document Icon -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-village-green-500 to-village-green-600 rounded-xl flex items-center justify-center village-transition group-hover:scale-110">
                                <i class="fas fa-file-pdf text-white text-lg"></i>
                            </div>
                            <span class="bg-village-green-100 text-village-green-800 text-xs font-medium px-2 py-1 rounded-full">
                                {{ $document->created_at->format('d M Y') }}
                            </span>
                        </div>

                        <!-- Document Info -->
                        <h3 class="text-lg font-bold text-gray-800 mb-2 group-hover:text-village-green-700 transition-colors">
                            {{ $document->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $document->description }}
                        </p>

                        <!-- Document Details -->
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-tag mr-2 text-village-green-500"></i>
                                <span>{{ $document->category }}</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-hdd mr-2 text-village-green-500"></i>
                                <span>{{ number_format($document->size / 1024, 1) }} KB</span>
                            </div>
                        </div>

                        <!-- Download Button -->
                        <a href="{{ asset('storage/' . $document->doc_path) }}" 
                           target="_blank"
                           class="w-full bg-gradient-to-r from-village-green-600 to-village-green-700 hover:from-village-green-700 hover:to-village-green-800 text-white font-medium py-3 px-4 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-download mr-2"></i>
                            Unduh Dokumen
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-village-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-folder-open text-village-green-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Dokumen</h3>
                <p class="text-gray-600">Dokumen akan segera ditambahkan oleh admin BUMDes.</p>
            </div>
        @endif
    </div>
</section>

<!-- Transparency Section -->
<section class="py-16 bg-gradient-to-br from-village-green-600 to-village-green-800">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl shadow-2xl mb-8 village-transition hover:scale-110">
                <i class="fas fa-eye text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-bold text-white mb-6 font-poppins">Transparansi untuk Desa</h2>
            <p class="text-xl text-village-green-100 max-w-3xl mx-auto mb-8">
                Kami percaya bahwa transparansi adalah kunci kepercayaan masyarakat. Semua dokumen tersedia untuk dilihat dan diunduh secara gratis.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-4 village-transition hover:scale-110">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Akuntabilitas</h3>
                    <p class="text-village-green-100">Setiap kegiatan tercatat dan didokumentasikan dengan baik</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-4 village-transition hover:scale-110">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Partisipatif</h3>
                    <p class="text-village-green-100">Masyarakat dapat mengakses informasi kapan saja</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-4 village-transition hover:scale-110">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Berkelanjutan</h3>
                    <p class="text-village-green-100">Pertumbuhan desa yang terencana dan berkelanjutan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

@keyframes fade-in {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-delay {
    0% { opacity: 0; transform: translateY(30px); }
    50% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-delay-2 {
    0% { opacity: 0; transform: translateY(30px); }
    60% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}

.animate-fade-in-delay {
    animation: fade-in-delay 1.5s ease-out;
}

.animate-fade-in-delay-2 {
    animation: fade-in-delay-2 2s ease-out;
}
</style>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scrolling for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add loading animation for download links
    document.querySelectorAll('a[href*="storage"]').forEach(link => {
        link.addEventListener('click', function() {
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memuat...';
            
            setTimeout(() => {
                this.innerHTML = originalText;
            }, 2000);
        });
    });
});
</script>
@endpush