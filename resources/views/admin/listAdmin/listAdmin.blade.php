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
@endsection

@section('admin')
<div class="bg-white overflow-hidden shadow-sm rounded-lg my-2">
    <div class="p-6 bg-white border-b border-gray-200">
        <form action="{{ route('list.admin') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Input Admin</button>
        </form>
    </div>
</div>
@endsection