@extends('layouts.admin')

@section('title', 'Kelola Dokumen - Admin')

@section('content')
<div class="max-w-6xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white rounded-xl shadow-lg border border-green-100 overflow-hidden mb-8 village-card">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-white flex items-center">
                        <i class="fas fa-folder-open mr-3 text-blue-200"></i>
                        Kelola Dokumen
                    </h1>
                    <p class="text-blue-100 mt-1">Kelola semua dokumen BUMDes Juron</p>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
            </div>
        </div>

        <div class="p-6">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
            @endif

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-600 text-sm font-medium">Total Dokumen</p>
                            <p class="text-3xl font-bold text-blue-800">{{ $documents->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-folder text-white"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-600 text-sm font-medium">SK Kemenham</p>
                            <p class="text-3xl font-bold text-green-800">{{ $documents->where('category', 'SK Kemenham')->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-certificate text-white"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-amber-50 to-amber-100 rounded-xl p-6 border border-amber-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-amber-600 text-sm font-medium">Laporan Keuangan</p>
                            <p class="text-3xl font-bold text-amber-800">{{ $documents->where('category', 'Laporan Keuangan')->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-amber-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-purple-600 text-sm font-medium">Peraturan Desa</p>
                            <p class="text-3xl font-bold text-purple-800">{{ $documents->where('category', 'Peraturan Desa')->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-scroll text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Document Button -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Daftar Dokumen</h2>
                <button onclick="openAddModal()" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-6 py-3 rounded-lg font-medium transition-all duration-200 flex items-center shadow-lg hover:shadow-xl">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Dokumen
                </button>
            </div>

            <!-- Documents Table -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Judul Dokumen</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Kategori</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Ukuran</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Tanggal</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($documents as $document)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-village-green-100 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-file-pdf text-village-green-600"></i>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-800">{{ $document->title }}</h3>
                                                <p class="text-sm text-gray-600">{{ Str::limit($document->description, 50) }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                            @if($document->category == 'SK Kemenham') bg-blue-100 text-blue-800
                                            @elseif($document->category == 'Anggaran Dasar') bg-green-100 text-green-800
                                            @elseif($document->category == 'Laporan Keuangan') bg-amber-100 text-amber-800
                                            @elseif($document->category == 'Peraturan Desa') bg-purple-100 text-purple-800
                                            @else bg-gray-100 text-gray-800
                                            @endif">
                                            {{ $document->category }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ number_format($document->size / 1024, 1) }} KB
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $document->created_at->format('d M Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex space-x-2">
                                            <a href="{{ asset('storage/' . $document->doc_path) }}" 
                                               target="_blank"
                                               class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg text-sm transition-colors flex items-center">
                                                <i class="fas fa-eye mr-1"></i>
                                                Lihat
                                            </a>
                                            <form action="{{ route('admin.documents.destroy', $document->id) }}" 
                                                  method="POST" 
                                                  class="inline"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-lg text-sm transition-colors flex items-center">
                                                    <i class="fas fa-trash mr-1"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($documents->count() == 0)
                    <div class="text-center py-12">
                        <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-folder-open text-gray-400 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Belum Ada Dokumen</h3>
                        <p class="text-gray-600">Tambahkan dokumen pertama Anda untuk memulai.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Add Document Modal -->
    <div id="addModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="bg-gradient-to-r from-green-600 to-green-700 px-6 py-4 rounded-t-2xl">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-white">Tambah Dokumen Baru</h3>
                    <button onclick="closeAddModal()" class="text-white hover:text-gray-200 transition-colors">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
            </div>

            <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                @csrf
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Dokumen</label>
                    <input type="text" name="title" id="title" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           placeholder="Contoh: Laporan Keuangan Tahun 2023">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea name="description" id="description" rows="3" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                              placeholder="Jelaskan isi dokumen ini secara singkat"></textarea>
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="category" id="category" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                        <option value="">Pilih Kategori</option>
                        <option value="SK Kemenham">SK Kemenham</option>
                        <option value="Anggaran Dasar">Anggaran Dasar</option>
                        <option value="Laporan Keuangan">Laporan Keuangan</option>
                        <option value="Peraturan Desa">Peraturan Desa</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div>
                    <label for="document" class="block text-sm font-medium text-gray-700 mb-2">File Dokumen (PDF)</label>
                    <input type="file" name="document" id="document" accept=".pdf" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                           onchange="validateFile(this)">
                    <p class="text-xs text-gray-500 mt-1">Format: PDF, Maksimal: 10MB</p>
                </div>

                <div class="flex space-x-3 pt-4">
                    <button type="button" onclick="closeAddModal()" 
                            class="flex-1 bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg font-medium transition-colors">
                        Batal
                    </button>
                    <button type="submit" 
                            class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white py-2 px-4 rounded-lg font-medium transition-all duration-200">
                        Simpan Dokumen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.village-card {
    @apply transition-all duration-300 hover:shadow-xl hover:transform hover:-translate-y-1;
}

.village-transition {
    @apply transition-all duration-200 ease-in-out;
}

.village-shadow-lg {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.village-text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
@endpush

@push('scripts')
<script>
function openAddModal() {
    document.getElementById('addModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeAddModal() {
    document.getElementById('addModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function validateFile(input) {
    const file = input.files[0];
    if (file) {
        // Check file size (10MB = 10 * 1024 * 1024 bytes)
        if (file.size > 10 * 1024 * 1024) {
            alert('File terlalu besar! Maksimal ukuran file adalah 10MB.');
            input.value = '';
            return;
        }
        
        // Check file type
        if (!file.type.includes('pdf')) {
            alert('Format file tidak valid! Hanya file PDF yang diperbolehkan.');
            input.value = '';
            return;
        }
    }
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('addModal');
    if (event.target === modal) {
        closeAddModal();
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeAddModal();
    }
});
</script>
@endpush