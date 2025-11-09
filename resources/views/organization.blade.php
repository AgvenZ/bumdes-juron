@extends('layouts.app')

@section('title', 'Struktur Organisasi - BUMDes Juron')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-green-50 to-emerald-100 py-20">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%239C92AC\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-4">Struktur Organisasi</h1>
            <p class="text-lg text-green-600 max-w-2xl mx-auto">Susunan organisasi BUMDes Juron yang menggambarkan hierarki dan tanggung jawab setiap posisi</p>
        </div>
    </div>
</section>

<!-- Organization Chart Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Susunan Pengurus</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Top Level - Direktur -->
            <div class="flex justify-center mb-8">
                @php
                    $director = $positions->where('title', 'Direktur')->first();
                @endphp
                @if($director)
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-green-200 bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                                @if($director->photo_path)
                                    <img src="{{ asset('storage/' . $director->photo_path) }}" alt="{{ $director->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="text-green-500 text-4xl">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                @endif
                            </div>
                            <h3 class="text-xl font-bold text-green-800 mb-1">{{ $director->title }}</h3>
                            <p class="text-lg text-gray-700 font-medium mb-2">{{ $director->name }}</p>
                            @if($director->phone)
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-phone-alt text-green-500 mr-2"></i>
                                    {{ $director->phone }}
                                </p>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <!-- Connecting Line -->
            <div class="flex justify-center mb-8">
                <div class="w-px h-12 bg-green-300"></div>
            </div>

            <!-- Second Level -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @php
                    $secondLevel = $positions->where('title', '!=', 'Direktur')->where('order_num', '<=', 3);
                @endphp
                @foreach($secondLevel as $position)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden border-3 border-green-200 bg-gradient-to-br from-green-50 to-emerald-50 flex items-center justify-center">
                                @if($position->photo_path)
                                    <img src="{{ asset('storage/' . $position->photo_path) }}" alt="{{ $position->name }}" class="w-full h-full object-cover">
                                @else
                                    <div class="text-green-500 text-3xl">
                                        <i class="fas fa-user"></i>
                                    </div>
                                @endif
                            </div>
                            <h4 class="text-lg font-bold text-green-700 mb-1">{{ $position->title }}</h4>
                            <p class="text-gray-700 font-medium mb-2">{{ $position->name }}</p>
                            @if($position->phone)
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-phone-alt text-green-500 mr-1"></i>
                                    {{ $position->phone }}
                                </p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Third Level and Below -->
            @php
                $thirdLevel = $positions->where('title', '!=', 'Direktur')->where('order_num', '>', 3);
            @endphp
            @if($thirdLevel->count() > 0)
                <!-- Connecting Line -->
                <div class="flex justify-center mb-8">
                    <div class="w-px h-12 bg-green-300"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($thirdLevel as $position)
                        <div class="bg-gray-50 rounded-lg p-4 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100">
                            <div class="text-center">
                                <div class="w-16 h-16 mx-auto mb-3 rounded-full overflow-hidden border-2 border-green-200 bg-gradient-to-br from-green-50 to-emerald-50 flex items-center justify-center">
                                    @if($position->photo_path)
                                        <img src="{{ asset('storage/' . $position->photo_path) }}" alt="{{ $position->name }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="text-green-500 text-xl">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    @endif
                                </div>
                                <h5 class="text-sm font-bold text-green-700 mb-1">{{ $position->title }}</h5>
                                <p class="text-xs text-gray-700 font-medium">{{ $position->name }}</p>
                                @if($position->phone)
                                    <p class="text-xs text-gray-600 mt-1">
                                        <i class="fas fa-phone-alt text-green-500 mr-1"></i>
                                        {{ $position->phone }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Legend -->
        <div class="mt-12 text-center">
            <div class="inline-flex items-center space-x-6 bg-green-50 rounded-lg px-6 py-4">
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                    <span class="text-sm text-gray-700">Pimpinan</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-green-300 rounded-full"></div>
                    <span class="text-sm text-gray-700">Pengurus</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-gray-300 rounded-full"></div>
                    <span class="text-sm text-gray-700">Staf</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-gradient-to-r from-green-600 to-emerald-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
        <p class="text-xl mb-8">Untuk informasi lebih lanjut tentang struktur organisasi kami</p>
        <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">
            <div class="flex items-center space-x-3">
                <i class="fas fa-map-marker-alt text-2xl"></i>
                <span>{{ $bumdes->address ?? 'Desa Juron' }}</span>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fas fa-phone text-2xl"></i>
                <span>{{ $bumdes->phone ?? '-' }}</span>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fas fa-envelope text-2xl"></i>
                <span>{{ $bumdes->email ?? '-' }}</span>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .organization-card {
        transition: all 0.3s ease;
    }
    .organization-card:hover {
        transform: translateY(-5px);
    }
    .organization-card img {
        transition: transform 0.3s ease;
    }
    .organization-card:hover img {
        transform: scale(1.05);
    }
</style>
@endpush