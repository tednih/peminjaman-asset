@extends('admin.index')

@section('notif')
@if (session('success'))
<div id="notif" class="p-2 sm: hidden">
    <div class="p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md " role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9 16a7 7 0 100-14 7 7 0 000 14zm1-6h4l-6 7v-4H6l6-7v4z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Notifikasi</p>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (session('error'))
<div id="notif" class="p-2 sm: hidden">
    <div class="p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md " role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9 16a7 7 0 100-14 7 7 0 000 14zm1-6h4l-6 7v-4H6l6-7v4z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Notifikasi</p>
                    <p class="text-sm">{{ session('error') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('barang')
<div class="bg-white overflow-hidden shadow-sm rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <form action="{{ route('import.barang') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".xlsx, .xls">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Import Data Barang</button>
        </form>
    </div>
</div>


<div class="bg-white overflow-hidden shadow-sm rounded-lg my-2">
    <div class="p-6 bg-white border-b border-gray-200">
        <form action="{{ route('input.barang') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_barang" class="block text-gray-700 text-sm font-bold mb-2">ID Barang</label>
                <input type="text" id="id_barang" name="id_barang" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 text-sm font-bold mb-2">kategori</label>
                <input type="text" id="kategori" name="kategori" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Input Data Barang</button>
        </form>
    </div>
</div>
@include('admin.barang.tb_barang')
@endsection