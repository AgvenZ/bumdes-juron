@extends('layouts.admin')

@section('title', 'Unit Usaha - Admin')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden mb-8 village-card">
        <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-white flex items-center">
                        <i class="fas fa-store mr-3 text-green-200"></i>
                        Kelola Unit Usaha
                    </h1>
                    <p class="text-green-100 mt-1">Atur dan kelola semua unit usaha BUMDes Juron</p>
                </div>
                <a href="{{ route('admin.units.create') }}" class="village-btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Unit Baru
                </a>
            </div>
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

            <!-- Unit Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($units as $unit)
                <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-lg p-6 border border-green-200 village-card">
                    <!-- Header Unit -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center shadow-lg">
                                <i class="{{ $unit->icon }} text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-green-800 text-lg">{{ $unit->name }}</h3>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>{{ $unit->location }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check mr-1"></i>
                                Aktif
                            </span>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $unit->description }}</p>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        <div class="bg-white rounded-lg p-3 text-center border border-gray-200">
                            <div class="text-2xl font-bold text-green-600">{{ $unit->photos->count() }}</div>
                            <div class="text-xs text-gray-600">Foto</div>
                        </div>
                        <div class="bg-white rounded-lg p-3 text-center border border-gray-200">
                            <div class="text-2xl font-bold text-blue-600">{{ $unit->order_num }}</div>
                            <div class="text-xs text-gray-600">Urutan</div>
                        </div>
                    </div>

                    <!-- Kontak WhatsApp -->
                    <div class="bg-white rounded-lg p-3 border border-gray-200 mb-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <i class="fab fa-whatsapp text-green-500"></i>
                                <span class="text-sm text-gray-700">WhatsApp</span>
                            </div>
                            <a href="https://wa.me/{{ $unit->whatsapp }}" target="_blank" class="text-sm text-green-600 hover:text-green-700 font-medium">
                                Chat <i class="fas fa-external-link-alt ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.units.edit', $unit->id) }}" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center justify-center">
                            <i class="fas fa-edit mr-2"></i>
                            Edit
                        </a>
                        <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus unit ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex-1 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center justify-center">
                                <i class="fas fa-trash mr-2"></i>
                                Hapus
                            </button>
                        </form>
                    </div>

                    <!-- Photo Preview -->
                    @if($unit->photos->count() > 0)
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <p class="text-sm text-gray-600 mb-2">Preview Foto:</p>
                        <div class="flex space-x-2 overflow-x-auto">
                            @foreach($unit->photos->take(3) as $photo)
                            <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="Foto Unit" 
                                 class="w-16 h-16 rounded-lg object-cover border-2 border-gray-200 flex-shrink-0">
                            @endforeach
                            @if($unit->photos->count() > 3)
                            <div class="w-16 h-16 rounded-lg bg-gray-100 flex items-center justify-center border-2 border-gray-200 flex-shrink-0">
                                <span class="text-xs text-gray-600">+{{ $unit->photos->count() - 3 }}</span>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>

            @if($units->count() == 0)
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-store text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada unit usaha</h3>
                <p class="text-gray-500 mb-4">Tambahkan unit usaha pertama Anda untuk memulai</p>
                <a href="{{ route('admin.units.create') }}" class="village-btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Unit Baru
                </a>
            </div>
            @endif
        </div>
    </div>

    <!-- Preview Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden village-card">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h2 class="text-xl font-bold text-white flex items-center">
                <i class="fas fa-eye mr-3 text-blue-200"></i>
                Preview Tampilan Publik
            </h2>
            <p class="text-blue-100 mt-1">Lihat bagaimana unit usaha akan ditampilkan di halaman publik</p>
        </div>
        
        <div class="p-6">
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-lg p-8 border border-green-200">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-green-800 mb-2">Unit Usaha Kami</h3>
                    <p class="text-gray-600">Berbagai unit usaha yang dikelola oleh BUMDes Juron</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($units as $unit)
                    <div class="bg-white rounded-lg p-6 shadow-lg border border-gray-100 transform transition-all duration-300 hover:scale-105">
                        <div class="text-center mb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg">
                                <i class="{{ $unit->icon }} text-white text-xl"></i>
                            </div>
                            <h4 class="font-bold text-green-800 text-lg mb-2">{{ $unit->name }}</h4>
                            <p class="text-gray-600 text-sm">{{ $unit->description }}</p>
                        </div>
                        
                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-green-500"></i>
                                <span>{{ $unit->location }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone mr-2 text-blue-500"></i>
                                <span>{{ $unit->whatsapp }}</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <a href="https://wa.me/{{ $unit->whatsapp }}" target="_blank" 
                               class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center justify-center">
                                <i class="fab fa-whatsapp mr-2"></i>
                                Chat WhatsApp
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.village-btn-primary {
    @apply bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center;
}

.village-card {
    @apply transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endpush