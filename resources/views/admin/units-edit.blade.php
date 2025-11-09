@extends('layouts.admin')

@section('title', 'Edit Unit Usaha - Admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden mb-8 village-card">
        <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4">
            <h1 class="text-2xl font-bold text-white flex items-center">
                <i class="fas fa-edit mr-3 text-green-200"></i>
                Edit Unit Usaha
            </h1>
            <p class="text-green-100 mt-1">Perbarui informasi unit usaha di sistem BUMDes Juron</p>
        </div>

        <div class="p-6">
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

            <form action="{{ route('admin.units.update', $unit->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Informasi Dasar -->
                <div class="bg-green-50 rounded-lg p-6 border border-green-200">
                    <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        Informasi Dasar
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Unit Usaha</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $unit->name) }}" 
                                   class="village-input" placeholder="Contoh: Internet Desa" required>
                        </div>
                        
                        <div>
                            <label for="icon" class="block text-sm font-medium text-gray-700 mb-2">Ikon Font Awesome</label>
                            <input type="text" name="icon" id="icon" value="{{ old('icon', $unit->icon) }}" 
                                   class="village-input" placeholder="Contoh: fas fa-wifi" required>
                            <p class="text-xs text-gray-500 mt-1">Masukkan kode ikon Font Awesome</p>
                        </div>
                        
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Lokasi</label>
                            <input type="text" name="location" id="location" value="{{ old('location', $unit->location) }}" 
                                   class="village-input" placeholder="Contoh: Desa Juron, RT 01 RW 01" required>
                        </div>
                        
                        <div>
                            <label for="order_num" class="block text-sm font-medium text-gray-700 mb-2">Urutan Tampil</label>
                            <input type="number" name="order_num" id="order_num" value="{{ old('order_num', $unit->order_num) }}" 
                                   class="village-input" min="1" required>
                            <p class="text-xs text-gray-500 mt-1">Semakin kecil angka, semakin awal tampil</p>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="bg-blue-50 rounded-lg p-6 border border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-align-left mr-2"></i>
                        Deskripsi Unit Usaha
                    </h3>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Lengkap</label>
                        <textarea name="description" id="description" rows="4" 
                                  class="village-textarea" placeholder="Jelaskan secara detail tentang unit usaha ini..." required>{{ old('description', $unit->description) }}</textarea>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="bg-amber-50 rounded-lg p-6 border border-amber-200">
                    <h3 class="text-lg font-semibold text-amber-800 mb-4 flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        Informasi Kontak
                    </h3>
                    <div>
                        <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" value="{{ old('whatsapp', $unit->whatsapp) }}" 
                               class="village-input" placeholder="628xxxxxxxxxx" required>
                        <p class="text-xs text-gray-500 mt-1">Masukkan nomor WhatsApp dengan format 62 (tanpa +)</p>
                    </div>
                </div>

                <!-- Preview Ikon -->
                <div class="bg-purple-50 rounded-lg p-6 border border-purple-200">
                    <h3 class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                        <i class="fas fa-eye mr-2"></i>
                        Preview Ikon
                    </h3>
                    <div class="text-center">
                        <div id="icon-preview" class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg">
                            <i id="icon-display" class="{{ $unit->icon }} text-white text-2xl"></i>
                        </div>
                        <p class="text-sm text-gray-600">Ikon akan muncul seperti ini di halaman publik</p>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-between items-center pt-6">
                    <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="village-btn-danger">
                            <i class="fas fa-trash mr-2"></i>
                            Hapus Unit Usaha
                        </button>
                    </form>
                    
                    <div class="flex space-x-4">
                        <a href="{{ route('admin.units') }}" class="village-btn-secondary">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Batal
                        </a>
                        <button type="submit" class="village-btn-primary">
                            <i class="fas fa-save mr-2"></i>
                            Perbarui Unit Usaha
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Panduan Ikon -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden village-card">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h2 class="text-xl font-bold text-white flex items-center">
                <i class="fas fa-lightbulb mr-3 text-blue-200"></i>
                Panduan Ikon Font Awesome
            </h2>
            <p class="text-blue-100 mt-1">Beberapa contoh ikon yang cocok untuk unit usaha</p>
        </div>
        
        <div class="p-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-wifi text-2xl text-blue-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-wifi</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-sound text-2xl text-green-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-volume_up</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-fish text-2xl text-cyan-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-fish</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-seedling text-2xl text-emerald-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-seedling</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-store text-2xl text-orange-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-store</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-tractor text-2xl text-amber-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-tractor</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-hand-holding-usd text-2xl text-teal-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-hand-holding-usd</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors icon-suggestion">
                    <i class="fas fa-chart-line text-2xl text-indigo-600 mb-2"></i>
                    <p class="text-xs text-gray-600">fas fa-chart-line</p>
                </div>
            </div>
            <div class="mt-4 p-4 bg-blue-50 rounded-lg border border-blue-200">
                <p class="text-sm text-blue-800">
                    <i class="fas fa-info-circle mr-2"></i>
                    <strong>Tip:</strong> Kunjungi <a href="https://fontawesome.com/icons" target="_blank" class="text-blue-600 hover:underline">fontawesome.com/icons</a> untuk melihat koleksi ikon lengkapnya.
                </p>
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

.village-btn-danger {
    @apply bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center;
}

.village-card {
    @apply transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1;
}

.icon-suggestion {
    transition: all 0.3s ease;
}

.icon-suggestion:hover {
    transform: translateY(-2px);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconDisplay = document.getElementById('icon-display');
    const iconSuggestions = document.querySelectorAll('.icon-suggestion');

    // Update preview saat input berubah
    iconInput.addEventListener('input', function() {
        const iconClass = this.value.trim();
        if (iconClass) {
            iconDisplay.className = iconClass + ' text-white text-2xl';
        } else {
            iconDisplay.className = 'fas fa-store text-white text-2xl';
        }
    });

    // Klik pada suggestion
    iconSuggestions.forEach(suggestion => {
        suggestion.addEventListener('click', function() {
            const iconText = this.querySelector('p').textContent.trim();
            iconInput.value = iconText;
            iconDisplay.className = iconText + ' text-white text-2xl';
        });
    });
});
</script>
@endpush