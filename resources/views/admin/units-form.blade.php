@extends('layouts.admin')

@section('title', isset($unit) ? 'Edit Unit Usaha' : 'Tambah Unit Usaha')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">{{ isset($unit) ? 'Edit Unit Usaha' : 'Tambah Unit Usaha' }}</h1>
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
                <form action="{{ isset($unit) ? route('admin.units.update', $unit->id) : route('admin.units.store') }}" method="POST">
                    @csrf
                    @if(isset($unit))
                        @method('PUT')
                    @endif
                    
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Unit Usaha</label>
                                <input type="text" name="name" id="name" value="{{ $unit->name ?? old('name') }}" class="mt-1 focus:ring-village-green-500 focus:border-village-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>

                            <div class="col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="description" id="description" rows="4" class="mt-1 focus:ring-village-green-500 focus:border-village-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>{{ $unit->description ?? old('description') }}</textarea>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="manager_name" class="block text-sm font-medium text-gray-700">Nama Pengelola</label>
                                <input type="text" name="manager_name" id="manager_name" value="{{ $unit->manager_name ?? old('manager_name') }}" class="mt-1 focus:ring-village-green-500 focus:border-village-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="manager_phone" class="block text-sm font-medium text-gray-700">Telepon Pengelola</label>
                                <input type="text" name="manager_phone" id="manager_phone" value="{{ $unit->manager_phone ?? old('manager_phone') }}" class="mt-1 focus:ring-village-green-500 focus:border-village-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <a href="{{ route('admin.units') }}" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500 mr-2">
                            Batal
                        </a>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-village-green-600 hover:bg-village-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-village-green-500">
                            {{ isset($unit) ? 'Update' : 'Simpan' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection