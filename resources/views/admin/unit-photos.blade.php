@extends('layouts.admin')

@section('title', 'Kelola Foto Unit Usaha')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-900">Foto Unit: {{ $unit->name ?? 'Unit Usaha' }}</h1>
            <div>
                <a href="{{ route('admin.units') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500 mr-2">
                    Kembali
                </a>
                <button type="button" onclick="document.getElementById('uploadForm').classList.toggle('hidden')" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-village-green-600 hover:bg-village-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Tambah Foto
                </button>
            </div>
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
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Unggah Foto Baru</h3>
                    <form action="{{ route('admin.units.photos.store', $unit->id ?? 0) }}" method="POST" enctype="multipart/form-data" class="mt-5">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Pilih Foto</label>
                                <input type="file" name="photo" id="photo" accept="image/*" class="mt-1 block w-full" required>
                                <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG. Ukuran maksimal: 2MB.</p>
                            </div>

                            <div class="col-span-6">
                                <label for="caption" class="block text-sm font-medium text-gray-700">Keterangan Foto</label>
                                <input type="text" name="caption" id="caption" class="mt-1 focus:ring-village-green-500 focus:border-village-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-village-green-600 hover:bg-village-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                                Unggah Foto
                            </button>
                            <button type="button" onclick="document.getElementById('uploadForm').classList.add('hidden')" class="ml-3 inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    @if(isset($photos) && count($photos) > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($photos as $photo)
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <div class="relative pb-3/4">
                                <img src="{{ asset($photo->photo_path) }}" alt="{{ $photo->caption }}" class="absolute h-full w-full object-cover rounded-md">
                            </div>
                            <div class="mt-2">
                                <p class="text-sm font-medium text-gray-900">{{ $photo->caption }}</p>
                                <p class="text-xs text-gray-500">Ditambahkan: {{ $photo->created_at ? $photo->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}</p>
                                <div class="mt-2 flex justify-end">
                                    <form action="{{ route('admin.units.photos.destroy', ['unit' => $unit->id ?? 0, 'photo' => $photo->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="text-center py-10">
                        <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada foto</h3>
                        <p class="mt-1 text-sm text-gray-500">Mulai dengan mengunggah foto pertama untuk unit usaha ini.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .pb-3\/4 {
        padding-bottom: 75%;
    }
</style>
@endsection