@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Dashboard Admin - Sederhana</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-600">Total Unit</h3>
            <p class="text-3xl font-bold text-blue-600">{{ $unitsCount ?? 0 }}</p>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-600">Total Pengurus</h3>
            <p class="text-3xl font-bold text-green-600">{{ $positionsCount ?? 0 }}</p>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-600">Total Dokumen</h3>
            <p class="text-3xl font-bold text-yellow-600">{{ $documentsCount ?? 0 }}</p>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-600">Total Foto</h3>
            <p class="text-3xl font-bold text-purple-600">{{ $galeriCount ?? 0 }}</p>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('admin.units.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-center">
                Tambah Unit
            </a>
            <a href="{{ route('admin.documents') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-center">
                Kelola Dokumen
            </a>
            <a href="{{ route('admin.organization') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 text-center">
                Kelola Pengurus
            </a>
        </div>
    </div>
</div>
@endsection