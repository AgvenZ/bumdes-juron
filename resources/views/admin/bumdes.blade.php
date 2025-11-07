@extends('layouts.admin')

@section('title', 'Kelola Profil BUMDes')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Kelola Profil BUMDes</h1>
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

            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi BUMDes</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Detail dan pengaturan BUMDes Juron.</p>
                    </div>
                </div>

                <form action="{{ route('admin.bumdes.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Nama BUMDes</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="name" value="{{ $bumdes->name ?? 'BUMDes Juron' }}" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <textarea name="description" rows="4" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $bumdes->description ?? 'BUMDes Juron adalah Badan Usaha Milik Desa yang bergerak dalam berbagai bidang untuk meningkatkan kesejahteraan masyarakat Desa Juron.' }}</textarea>
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Alamat</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="address" value="{{ $bumdes->address ?? 'Jl. Desa Juron No. 123, Kecamatan Juron, Kabupaten Juron' }}" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <input type="email" name="email" value="{{ $bumdes->email ?? 'info@bumdesjuron.desa.id' }}" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Telepon</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="phone" value="{{ $bumdes->phone ?? '0812-3456-7890' }}" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Tahun Berdiri</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <input type="number" name="established_year" value="{{ $bumdes->established_year ?? '2018' }}" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Logo BUMDes</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    @if(isset($bumdes->logo_path))
                                    <div class="mb-3">
                                        <img src="{{ asset($bumdes->logo_path) }}" alt="Logo BUMDes" class="h-20 w-auto">
                                    </div>
                                    @endif
                                    <input type="file" name="logo" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300">
                                    <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG. Ukuran maksimal: 2MB.</p>
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Visi</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <textarea name="vision" rows="3" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $bumdes->vision ?? 'Menjadi BUMDes terdepan yang mandiri dan berkelanjutan untuk kesejahteraan masyarakat Desa Juron.' }}</textarea>
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Misi</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <textarea name="mission" rows="5" class="shadow-sm focus:ring-village-green-500 focus:border-village-green-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $bumdes->mission ?? '1. Mengembangkan potensi ekonomi desa melalui unit usaha yang berkelanjutan.
2. Meningkatkan pendapatan asli desa melalui pengelolaan aset desa yang profesional.
3. Menciptakan lapangan kerja bagi masyarakat desa.
4. Memberikan pelayanan yang berkualitas kepada masyarakat desa.' }}</textarea>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-village-green-600 hover:bg-village-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection