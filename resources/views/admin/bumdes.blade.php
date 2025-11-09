@extends('layouts.admin')

@section('title', 'Profil BUMDes - Admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden mb-8 village-card">
        <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4">
            <h1 class="text-2xl font-bold text-white flex items-center">
                <i class="fas fa-building mr-3 text-green-200"></i>
                Kelola Profil BUMDes
            </h1>
            <p class="text-green-100 mt-1">Kelola informasi dan profil BUMDes Juron</p>
        </div>

        <div class="p-6">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                    <i class="fas fa-check-circle mr-2 text-green-600"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <strong>Terjadi kesalahan:</strong>
                    </div>
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.bumdes.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Informasi Umum -->
                <div class="bg-green-50 rounded-lg p-6 border border-green-200">
                    <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        Informasi Umum
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama BUMDes</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $bumdes->name ?? '') }}" 
                                   class="village-input" placeholder="Masukkan nama BUMDes" required>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $bumdes->email ?? '') }}" 
                                   class="village-input" placeholder="email@bumdes.com" required>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $bumdes->phone ?? '') }}" 
                                   class="village-input" placeholder="08xxxxxxxxxx" required>
                        </div>
                        
                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                            <input type="text" name="address" id="address" value="{{ old('address', $bumdes->address ?? '') }}" 
                                   class="village-input" placeholder="Masukkan alamat lengkap" required>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="bg-blue-50 rounded-lg p-6 border border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-align-left mr-2"></i>
                        Deskripsi BUMDes
                    </h3>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" 
                                  class="village-textarea" placeholder="Jelaskan tentang BUMDes ini..." required>{{ old('description', $bumdes->description ?? '') }}</textarea>
                    </div>
                </div>

                <!-- Informasi Direktur -->
                <div class="bg-amber-50 rounded-lg p-6 border border-amber-200">
                    <h3 class="text-lg font-semibold text-amber-800 mb-4 flex items-center">
                        <i class="fas fa-user-tie mr-2"></i>
                        Informasi Direktur
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="director_name" class="block text-sm font-medium text-gray-700 mb-2">Nama Direktur</label>
                            <input type="text" name="director_name" id="director_name" value="{{ old('director_name', $bumdes->director_name ?? '') }}" 
                                   class="village-input" placeholder="Masukkan nama direktur" required>
                        </div>
                        
                        <div>
                            <label for="director_photo" class="block text-sm font-medium text-gray-700 mb-2">Foto Direktur</label>
                            <input type="file" name="director_photo" id="director_photo" 
                                   class="village-input" accept="image/*">
                            @if($bumdes->director_photo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $bumdes->director_photo) }}" alt="Foto Direktur" class="w-20 h-20 rounded-full object-cover border-2 border-amber-200">
                                    <p class="text-xs text-gray-500 mt-1">Foto saat ini</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <label for="director_message" class="block text-sm font-medium text-gray-700 mb-2">Pesan Direktur</label>
                        <textarea name="director_message" id="director_message" rows="4" 
                                  class="village-textarea" placeholder="Masukkan pesan dari direktur..." required>{{ old('director_message', $bumdes->director_message ?? '') }}</textarea>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-4 pt-6">
                    <a href="{{ route('admin.dashboard') }}" class="village-btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                    <button type="submit" class="village-btn-primary">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Perubahan
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
                Preview Tampilan
            </h2>
            <p class="text-blue-100 mt-1">Lihat bagaimana profil akan ditampilkan di halaman publik</p>
        </div>
        
        <div class="p-6">
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-lg p-6 border border-green-200">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-green-800 mb-2">{{ $bumdes->name ?? 'Nama BUMDes' }}</h3>
                    <p class="text-gray-600">{{ $bumdes->description ?? 'Deskripsi BUMDes akan muncul di sini' }}</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <i class="fas fa-map-marker-alt text-green-600 text-xl mb-2"></i>
                        <p class="text-sm text-gray-600">Alamat</p>
                        <p class="font-medium">{{ $bumdes->address ?? 'Alamat belum diisi' }}</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <i class="fas fa-phone text-blue-600 text-xl mb-2"></i>
                        <p class="text-sm text-gray-600">Telepon</p>
                        <p class="font-medium">{{ $bumdes->phone ?? 'Telepon belum diisi' }}</p>
                    </div>
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <i class="fas fa-envelope text-amber-600 text-xl mb-2"></i>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="font-medium">{{ $bumdes->email ?? 'Email belum diisi' }}</p>
                    </div>
                </div>
                
                @if($bumdes->director_name)
                <div class="mt-6 bg-white rounded-lg p-4 shadow-sm">
                    <div class="flex items-center space-x-4">
                        @if($bumdes->director_photo)
                            <img src="{{ asset('storage/' . $bumdes->director_photo) }}" alt="Direktur" class="w-16 h-16 rounded-full object-cover border-2 border-green-200">
                        @else
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-green-600 text-xl"></i>
                            </div>
                        @endif
                        <div>
                            <h4 class="font-semibold text-green-800">{{ $bumdes->director_name }}</h4>
                            <p class="text-sm text-gray-600">Direktur BUMDes</p>
                        </div>
                    </div>
                </div>
                @endif
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

.village-textarea {
    @apply w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 bg-white resize-none;
}

.village-btn-primary {
    @apply bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center;
}

.village-btn-secondary {
    @apply bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 flex items-center;
}

.village-card {
    @apply transition-all duration-300 hover:shadow-xl;
}

/* Animasi untuk card */
.village-card:hover {
    transform: translateY(-5px);
}
</style>
@endpush