@extends('layouts.admin')

@section('title', 'Kelola Dokumen')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-900">Kelola Dokumen</h1>
            <button type="button" onclick="document.getElementById('uploadForm').classList.toggle('hidden')" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-village-green-600 hover:bg-village-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah Dokumen
            </button>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="py-4">
            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
            @endif

            @if($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div id="uploadForm" class="bg-white shadow overflow-hidden sm:rounded-lg mb-6 hidden">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Unggah Dokumen Baru</h3>
                    <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul Dokumen</label>
                                <input type="text" name="title" id="title" class="mt-1 focus:ring-village-green-500 focus:border-village-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>

                            <div class="col-span-6">
                                <label for="doc_type" class="block text-sm font-medium text-gray-700">Jenis Dokumen</label>
                                <select id="doc_type" name="doc_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-village-green-500 focus:border-village-green-500 sm:text-sm" required>
                                    <option value="">Pilih Jenis Dokumen</option>
                                    <option value="SK">Surat Keputusan</option>
                                    <option value="Perdes">Peraturan Desa</option>
                                    <option value="Laporan">Laporan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="col-span-6">
                                <label for="document" class="block text-sm font-medium text-gray-700">Pilih Dokumen</label>
                                <input type="file" name="document" id="document" accept=".pdf,.doc,.docx" class="mt-1 block w-full" required>
                                <p class="mt-1 text-sm text-gray-500">Format: PDF, DOC, DOCX. Ukuran maksimal: 5MB.</p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-village-green-600 hover:bg-village-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                                Unggah Dokumen
                            </button>
                            <button type="button" onclick="document.getElementById('uploadForm').classList.add('hidden')" class="ml-3 inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Daftar Dokumen</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Dokumen resmi BUMDes Juron.</p>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($documents ?? [] as $document)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $document->title }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            @if($document->doc_type == 'SK') bg-blue-100 text-blue-800 
                                            @elseif($document->doc_type == 'Perdes') bg-green-100 text-green-800 
                                            @elseif($document->doc_type == 'Laporan') bg-yellow-100 text-yellow-800 
                                            @else bg-gray-100 text-gray-800 @endif">
                                            {{ $document->doc_type }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $document->created_at ? $document->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ asset($document->doc_path) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900 mr-3">Lihat</a>
                                        <form action="{{ route('admin.documents.destroy', $document->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                        Belum ada dokumen yang diunggah.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection