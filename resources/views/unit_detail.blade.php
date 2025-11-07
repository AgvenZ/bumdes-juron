@extends('layouts.app')

@section('title', $unit->name)

@section('content')
    <!-- Hero Section -->
    <section class="bg-village-green-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4 font-poppins">{{ $unit->name }}</h1>
            <p class="text-xl text-village-green-100">Unit Usaha BUMDes Juron</p>
        </div>
    </section>

    <!-- Unit Detail Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        @if($unit->photos->count() > 0)
                            <img src="{{ asset('storage/' . $unit->photos->first()->photo_path) }}" alt="{{ $unit->name }}" class="w-full h-96 object-cover">
                        @else
                            <div class="w-full h-96 bg-village-green-200 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-village-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="md:w-1/2 p-8">
                        <h2 class="text-3xl font-bold text-village-green-800 mb-4">{{ $unit->name }}</h2>
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-village-green-700 mb-2">Deskripsi</h3>
                            <p class="text-gray-700">{{ $unit->description }}</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-village-green-700 mb-2">Manajer Unit</h3>
                            <p class="text-gray-700">{{ $unit->manager_name }}</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-village-green-700 mb-2">Tahun Berdiri</h3>
                            <p class="text-gray-700">{{ $unit->established_year }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @if($unit->photos->count() > 1)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-village-green-800 mb-6">Galeri Foto</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($unit->photos as $photo)
                            <div class="bg-white rounded-lg shadow overflow-hidden">
                                <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="{{ $unit->name }}" class="w-full h-48 object-cover">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Back to Units -->
    <section class="pb-16">
        <div class="container mx-auto px-4">
            <a href="{{ route('units') }}" class="inline-flex items-center text-village-green-700 hover:text-village-green-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar Unit Usaha
            </a>
        </div>
    </section>
@endsection
