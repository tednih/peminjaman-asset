@vite('resources/css/app.css')

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

@section('editBarang')
<div class="flex items-center justify-center min-h-screen backdrop-blur-sm bg-black/30 py-4">
    <div class="w-full max-w-md bg-white p-6 rounded-lg  border border-white">
        <form id="editForm" action="{{ route('barang.update') }}" method="POST" class="items-center justify-center max-w-md mx-auto overflow-hidden shadow-sm rounded-lg p-6 border border-gray-200">
            @csrf
            <label id="btnEditBarangClose" class="float-right bg-blue-50 px-2 rounded-full">X</label>
            <a class="flex text-center uppercase text-xl font-semibold mb-5">Edit Barang</a>
            <div class="mb-4">
                <input type="hidden" name="id" id="id">
                <label for="id_barang" class="block">ID Barang:</label>
                <input type="text" id="id_barang" name="id_barang" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block">Deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="kategori" class="block">Kategori:</label>
                <input type="text" id="kategori" name="kategori" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded px-3 py-2 w-full">
            </div>

            <div class="text-center">

                <button type="submit" class="bg-blue-500 text-white mx-auto px-4 py-2 rounded hover:bg-blue-600">Edit</button>

            </div>
        </form>
    </div>
</div>
</body>
@endsection