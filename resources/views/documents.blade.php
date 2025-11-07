@extends('layouts.app')

@section('title', 'Dokumen BUMDes')

@section('content')
    <!-- Hero Section -->
    <section class="bg-village-green-700 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4 font-poppins">Dokumen BUMDes</h1>
            <p class="text-xl text-village-green-100">Akses dokumen resmi dan surat keputusan BUMDes Juron</p>
        </div>
    </section>

    <!-- Documents Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-village-green-800 mb-6 font-poppins">Dokumen Resmi</h2>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">No</th>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">Judul Dokumen</th>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">Jenis</th>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @if(isset($documents) && $documents->count() > 0)
                                    @foreach($documents as $index => $document)
                                        <tr>
                                            <td class="py-4 px-4 text-sm text-gray-500">{{ $index + 1 }}</td>
                                            <td class="py-4 px-4 text-sm text-gray-900">{{ $document->title }}</td>
                                            <td class="py-4 px-4 text-sm text-gray-500">{{ $document->doc_type }}</td>
                                            <td class="py-4 px-4 text-sm">
                                                <a href="{{ asset('storage/' . $document->doc_path) }}" target="_blank" class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    Lihat
                                                </a>
                                                <a href="{{ asset('storage/' . $document->doc_path) }}" download class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                    </svg>
                                                    Unduh
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <!-- Placeholder Documents -->
                                    <tr>
                                        <td class="py-4 px-4 text-sm text-gray-500">1</td>
                                        <td class="py-4 px-4 text-sm text-gray-900">SK Pembentukan BUMDes Juron</td>
                                        <td class="py-4 px-4 text-sm text-gray-500">Surat Keputusan</td>
                                        <td class="py-4 px-4 text-sm">
                                            <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </button>
                                            <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                                Unduh
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 px-4 text-sm text-gray-500">2</td>
                                        <td class="py-4 px-4 text-sm text-gray-900">Anggaran Dasar BUMDes Juron</td>
                                        <td class="py-4 px-4 text-sm text-gray-500">Anggaran Dasar</td>
                                        <td class="py-4 px-4 text-sm">
                                            <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </button>
                                            <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                                Unduh
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 px-4 text-sm text-gray-500">3</td>
                                        <td class="py-4 px-4 text-sm text-gray-900">Laporan Keuangan Tahunan 2023</td>
                                        <td class="py-4 px-4 text-sm text-gray-500">Laporan Keuangan</td>
                                        <td class="py-4 px-4 text-sm">
                                            <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </button>
                                            <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                                Unduh
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 px-4 text-sm text-gray-500">4</td>
                                        <td class="py-4 px-4 text-sm text-gray-900">SK Pengangkatan Pengurus BUMDes</td>
                                        <td class="py-4 px-4 text-sm text-gray-500">Surat Keputusan</td>
                                        <td class="py-4 px-4 text-sm">
                                            <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </button>
                                            <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                                Unduh
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 px-4 text-sm text-gray-500">5</td>
                                        <td class="py-4 px-4 text-sm text-gray-900">Rencana Kerja BUMDes 2024</td>
                                        <td class="py-4 px-4 text-sm text-gray-500">Rencana Kerja</td>
                                        <td class="py-4 px-4 text-sm">
                                            <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                Lihat
                                            </button>
                                            <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                </svg>
                                                Unduh
                                            </button>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-village-green-800 mb-6 font-poppins">Peraturan Desa</h2>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">No</th>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">Judul Dokumen</th>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">Jenis</th>
                                    <th class="py-3 px-4 bg-village-green-100 text-left text-xs font-semibold text-village-green-800 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Placeholder Peraturan Desa -->
                                <tr>
                                    <td class="py-4 px-4 text-sm text-gray-500">1</td>
                                    <td class="py-4 px-4 text-sm text-gray-900">Perdes No. 5 Tahun 2022 tentang BUMDes</td>
                                    <td class="py-4 px-4 text-sm text-gray-500">Peraturan Desa</td>
                                    <td class="py-4 px-4 text-sm">
                                        <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            Lihat
                                        </button>
                                        <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Unduh
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 text-sm text-gray-500">2</td>
                                    <td class="py-4 px-4 text-sm text-gray-900">Perdes No. 7 Tahun 2022 tentang Pengelolaan Aset Desa</td>
                                    <td class="py-4 px-4 text-sm text-gray-500">Peraturan Desa</td>
                                    <td class="py-4 px-4 text-sm">
                                        <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            Lihat
                                        </button>
                                        <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Unduh
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 text-sm text-gray-500">3</td>
                                    <td class="py-4 px-4 text-sm text-gray-900">Perdes No. 3 Tahun 2023 tentang Alokasi Dana Desa</td>
                                    <td class="py-4 px-4 text-sm text-gray-500">Peraturan Desa</td>
                                    <td class="py-4 px-4 text-sm">
                                        <button class="bg-village-green-600 hover:bg-village-green-700 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            Lihat
                                        </button>
                                        <button class="bg-village-brown-500 hover:bg-village-brown-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors inline-flex items-center ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Unduh
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-2xl font-bold text-village-green-800 mb-6 font-poppins">Permintaan Dokumen</h2>
                    
                    <div class="bg-village-cream-100 p-6 rounded-lg">
                        <p class="text-gray-700 mb-4">
                            Jika Anda membutuhkan dokumen resmi BUMDes yang tidak tersedia di halaman ini, silakan isi formulir permintaan dokumen di bawah ini.
                        </p>
                        
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-village-green-500 focus:border-village-green-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-village-green-500 focus:border-village-green-500">
                            </div>
                            
                            <div>
                                <label for="document" class="block text-sm font-medium text-gray-700 mb-1">Dokumen yang Diminta</label>
                                <input type="text" id="document" name="document" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-village-green-500 focus:border-village-green-500">
                            </div>
                            
                            <div>
                                <label for="purpose" class="block text-sm font-medium text-gray-700 mb-1">Tujuan Penggunaan</label>
                                <textarea id="purpose" name="purpose" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-village-green-500 focus:border-village-green-500"></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" class="bg-village-green-600 hover:bg-village-green-700 text-white px-6 py-3 rounded-md font-medium transition-colors">
                                    Kirim Permintaan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Script untuk menangani formulir permintaan dokumen
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Terima kasih! Permintaan dokumen Anda telah dikirim. Kami akan menghubungi Anda melalui email.');
                form.reset();
            });
        }
    });
</script>
@endsection