@extends('layouts.admin')

@section('title', 'Struktur Organisasi - Admin')

@section('content')
<div class="max-w-6xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden mb-8 village-card">
        <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4">
            <h1 class="text-2xl font-bold text-white flex items-center">
                <i class="fas fa-sitemap mr-3 text-green-200"></i>
                Kelola Struktur Organisasi
            </h1>
            <p class="text-green-100 mt-1">Atur dan kelola struktur organisasi BUMDes Juron</p>
        </div>

        <div class="p-6">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                    <i class="fas fa-check-circle mr-2 text-green-600"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <strong>Terjadi kesalahan:</strong>
                    </div>
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <form action="{{ route('admin.organization.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($positions as $index => $position)
                    <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-lg p-6 border border-green-200 village-card">
                        <div class="text-center mb-4">
                            <div class="relative inline-block">
                                @if($position->photo)
                                    <img src="{{ asset('storage/' . $position->photo) }}" alt="{{ $position->name }}" 
                                         class="w-20 h-20 rounded-full object-cover border-4 border-white shadow-lg">
                                @else
                                    <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-blue-100 rounded-full flex items-center justify-center border-4 border-white shadow-lg">
                                        <i class="fas fa-user text-green-600 text-2xl"></i>
                                    </div>
                                @endif
                                <div class="absolute -bottom-2 -right-2 bg-green-500 text-white rounded-full p-2 shadow-lg">
                                    <i class="fas fa-crown text-sm"></i>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="positions[{{ $position->id }}][name]" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nama {{ $position->position }}
                                </label>
                                <input type="text" 
                                       name="positions[{{ $position->id }}][name]" 
                                       id="positions[{{ $position->id }}][name]"
                                       value="{{ old('positions.' . $position->id . '.name', $position->name) }}"
                                       class="village-input" 
                                       placeholder="Masukkan nama lengkap" required>
                            </div>

                            <div>
                                <label for="positions[{{ $position->id }}][position]" class="block text-sm font-medium text-gray-700 mb-2">
                                    Jabatan
                                </label>
                                <input type="text" 
                                       name="positions[{{ $position->id }}][position]" 
                                       id="positions[{{ $position->id }}][position]"
                                       value="{{ old('positions.' . $position->id . '.position', $position->position) }}"
                                       class="village-input" 
                                       placeholder="Masukkan jabatan" required>
                            </div>

                            <div>
                                <label for="positions[{{ $position->id }}][photo]" class="block text-sm font-medium text-gray-700 mb-2">
                                    Foto
                                </label>
                                <input type="file" 
                                       name="positions[{{ $position->id }}][photo]" 
                                       id="positions[{{ $position->id }}][photo]"
                                       class="village-input" 
                                       accept="image/*">
                                <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah foto</p>
                            </div>
                        </div>

                        <!-- Status Jabatan -->
                        <div class="mt-4 p-3 bg-white rounded-lg border border-gray-200">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-700">Status</span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                             @if($position->position == 'Direktur Utama') bg-red-100 text-red-800
                                             @elseif($position->position == 'Sekretaris') bg-blue-100 text-blue-800
                                             @else bg-green-100 text-green-800 @endif">
                                    @if($position->position == 'Direktur Utama')
                                        <i class="fas fa-crown mr-1"></i> Utama
                                    @elseif($position->position == 'Sekretaris')
                                        <i class="fas fa-file-alt mr-1"></i> Administrasi
                                    @else
                                        <i class="fas fa-coins mr-1"></i> Keuangan
                                    @endif
                                </span>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">Menjabat sejak 2020</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200 mt-8">
                    <a href="{{ route('admin.dashboard') }}" class="village-btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                    <button type="submit" class="village-btn-primary">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Semua Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Preview Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden village-card">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h2 class="text-xl font-bold text-white flex items-center">
                <i class="fas fa-eye mr-3 text-blue-200"></i>
                Preview Struktur Organisasi
            </h2>
            <p class="text-blue-100 mt-1">Lihat bagaimana struktur organisasi akan ditampilkan di halaman publik</p>
        </div>
        
        <div class="p-6">
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-lg p-8 border border-green-200">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-green-800 mb-2">Struktur Organisasi BUMDes</h3>
                    <p class="text-gray-600">Susunan pengurus BUMDes Juron periode 2020-2025</p>
                </div>

                <div class="flex flex-wrap justify-center gap-8">
                    @foreach($positions as $position)
                    <div class="text-center transform transition-all duration-300 hover:scale-105">
                        <div class="relative inline-block mb-3">
                            @if($position->photo)
                                <img src="{{ asset('storage/' . $position->photo) }}" alt="{{ $position->name }}" 
                                     class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-xl">
                            @else
                                <div class="w-24 h-24 bg-gradient-to-br from-green-100 to-blue-100 rounded-full flex items-center justify-center border-4 border-white shadow-xl">
                                    <i class="fas fa-user text-green-600 text-3xl"></i>
                                </div>
                            @endif
                            <div class="absolute -bottom-2 -right-2 bg-green-500 text-white rounded-full p-2 shadow-lg">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-lg border border-green-100 max-w-xs">
                            <h4 class="font-bold text-green-800 mb-1">{{ $position->name ?: 'Nama Belum Diisi' }}</h4>
                            <p class="text-sm text-gray-600 mb-2">{{ $position->position }}</p>
                            <div class="flex items-center justify-center space-x-2 text-xs text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>Menjabat Sejak 2020</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-8 text-center">
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full">
                        <i class="fas fa-shield-alt mr-2"></i>
                        <span class="text-sm font-medium">Terverifikasi & Sah</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.village-input {
    @apply w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 bg-white;
}

.village-card {
    @apply transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1;
}

.village-btn-primary {
    @apply bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center;
}

.village-btn-secondary {
    @apply bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 flex items-center;
}
</style>
@endpush