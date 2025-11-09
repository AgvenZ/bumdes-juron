@extends('layouts.app')

@section('title', 'Unit Usaha - BUMDes Juron')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-cyan-100 py-20">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23007ACC\" fill-opacity=\"0.05\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-blue-800 mb-4">Unit Usaha Kami</h1>
            <p class="text-lg text-blue-600 max-w-2xl mx-auto">Berbagai unit usaha yang dikelola oleh BUMDes Juron untuk kesejahteraan masyarakat desa</p>
        </div>
    </div>
</section>

<!-- Units Grid Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Daftar Unit Usaha</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Setiap unit usaha dikelola secara profesional untuk memberikan pelayanan terbaik kepada masyarakat</p>
        </div>

        @if($units->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($units as $unit)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden border border-gray-100">
                        <!-- Card Header -->
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 p-6 text-white">
                            <div class="flex items-center justify-between mb-4">
                                <div class="text-3xl">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div class="text-right">
                                    <div class="text-sm opacity-80">Unit Usaha</div>
                                    <div class="text-xs opacity-70">#{{ $loop->iteration }}</div>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">{{ $unit->name }}</h3>
                            <p class="text-blue-100 text-sm">{{ Str::limit($unit->description, 80) }}</p>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6">
                            <!-- Manager Info -->
                            <div class="mb-4">
                                <h4 class="text-sm font-semibold text-gray-700 mb-2">Pengelola</h4>
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-user-tie text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800">{{ $unit->manager_name }}</p>
                                        <p class="text-sm text-gray-600">
                                            <i class="fas fa-phone-alt text-blue-500 mr-1"></i>
                                            {{ $unit->manager_phone }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Photos Preview -->
                            @if($unit->photos->count() > 0)
                                <div class="mb-4">
                                    <h4 class="text-sm font-semibold text-gray-700 mb-2">Galeri</h4>
                                    <div class="grid grid-cols-3 gap-2">
                                        @foreach($unit->photos->take(3) as $photo)
                                            <div class="aspect-square rounded-lg overflow-hidden">
                                                <img src="{{ asset('storage/' . $photo->photo_path) }}" 
                                                     alt="{{ $unit->name }}" 
                                                     class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                            </div>
                                        @endforeach
                                        @if($unit->photos->count() > 3)
                                            <div class="aspect-square rounded-lg bg-gray-100 flex items-center justify-center">
                                                <span class="text-xs text-gray-500">+{{ $unit->photos->count() - 3 }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <!-- Action Buttons -->
                            <div class="flex space-x-2">
                                <a href="{{ route('unit.detail', $unit->id) }}" 
                                   class="flex-1 bg-gradient-to-r from-blue-600 to-cyan-600 text-white text-center py-2 px-4 rounded-lg hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 font-medium">
                                    <i class="fas fa-eye mr-2"></i>
                                    Detail
                                </a>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $unit->manager_phone) }}" 
                                   target="_blank"
                                   class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-600 transition-colors duration-300">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="bg-gray-50 px-6 py-3 border-t border-gray-100">
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span><i class="fas fa-calendar-alt mr-1"></i>{{ $unit->created_at->format('d M Y') }}</span>
                                <span><i class="fas fa-images mr-1"></i>{{ $unit->photos->count() }} foto</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-store-slash text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum ada unit usaha</h3>
                <p class="text-gray-500">Unit usaha akan ditampilkan di sini setelah ditambahkan.</p>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-cyan-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ingin Bergabung atau Berkolaborasi?</h2>
        <p class="text-xl mb-8">Kami terbuka untuk kemitraan dan kolaborasi dalam pengembangan unit usaha desa</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $bumdes->phone ?? '') }}" 
               target="_blank"
               class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300">
                <i class="fab fa-whatsapp mr-2"></i>
                Hubungi Kami via WhatsApp
            </a>
            <a href="mailto:{{ $bumdes->email ?? '' }}" 
               class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300">
                <i class="fas fa-envelope mr-2"></i>
                Kirim Email
            </a>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Alamat Kantor</h3>
                <p class="text-gray-600">{{ $bumdes->address ?? 'Desa Juron' }}</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-green-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Telepon</h3>
                <p class="text-gray-600">{{ $bumdes->phone ?? '-' }}</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-purple-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Email</h3>
                <p class="text-gray-600">{{ $bumdes->email ?? '-' }}</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .unit-card {
        transition: all 0.3s ease;
    }
    .unit-card:hover {
        transform: translateY(-8px);
    }
    .unit-card img {
        transition: transform 0.3s ease;
    }
    .unit-card:hover img {
        transform: scale(1.1);
    }
    .whatsapp-btn {
        transition: all 0.3s ease;
    }
    .whatsapp-btn:hover {
        transform: scale(1.1);
    }
</style>
@endpush