@vite('resources/css/app.css')

@section('notif')
@if (session('success'))
<div id="notif" class="p-2 sm:ml-64 hidden">
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

@section('deleteLicense')
<div class="flex items-center justify-center min-h-screen backdrop-blur-sm bg-black/30 py-4">
    <div class="w-full max-w-md bg-white p-6 rounded-lg  border border-white">
        <label id="btnDeleteLicenseClose" class="float-right bg-blue-50 px-2 rounded-full">X</label>

        <p>Apakah anda yakin ingin menghapus
            "<label id="namaLicense" class="uppercase font-bold"></label><label id="id-license" class="uppercase font-bold"></label>"?
        </p>
        <form action="{{ route('license.deleteLicense') }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="mb-4">
                <input type="text" class="hidden" name="id_licenseDelete" id="id_licenseDelete" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded px-3 py-2 w-full">
            </div>
            <div class="text-center mt-5">

                <button type="submit" class="bg-red-500 text-white mx-auto px-4 py-2 rounded hover:bg-red-600">Hapus</button>
            </div>

        </form>
    </div>
</div>
</body>
@endsection