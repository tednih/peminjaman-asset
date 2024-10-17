<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<title>Peminjaman - Asset BP</title>

<body class="background-image">

    @if (session('success'))
    <div id="notif" class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md hidden" role="alert">
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
    @endif

    @if (session('error'))
    <div id="notif" class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md hidden" role="alert">
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
    @endif

    <div class="flex items-center justify-center min-h-screen py-4">
        <div class="w-full max-w-md bg-white/30 p-6 rounded-lg backdrop-blur-sm border border-white">
            <h2 class="text-2xl font-bold mb-6">Formulir Peminjaman Asset IT</h2>
            <form action="{{ route('form.peminjaman') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" id="name" name="name" class="border border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                    <div id="nama-container" class="border border-gray-300 bg-slate-50 px-3 py-2 rounded-md w-full hidden"></div>
                </div>
                <input type="text" id="id_karyawan" name="id_karyawan" class="hidden">


                <div class="mb-4">
                    <label for="nrp" class="block text-gray-700 text-sm font-bold mb-2">NRP:</label>
                    <input readonly type="text" id="nrp" name="nrp" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="divisi" class="block text-gray-700 text-sm font-bold mb-2">Divisi:</label>
                    <input readonly type="text" id="divisi" name="divisi" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input readonly type="email" id="email" name="email" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="barang" class="block text-gray-700 text-sm font-bold mb-2">Jenis Barang:</label>
                    <select id="barang" name="barang" class="border border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                        <option value="" disabled selected>Pilih Barang</option>
                        @foreach($barang as $item)
						@if ($item->tersedia == 1 && !$peminjaman->where('id_barang', $item->id_barang)->where('status', 2)->count())
                        <option value="{{ $item->deskripsi }}" data-id-barang="{{ $item->id_barang }}">{{ $item->deskripsi }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="id_barang" class="block text-gray-700 text-sm font-bold mb-2">ID Barang:</label>
                    <input readonly type="id_barang" id="id_barang" name="id_barang" class="border bg-white/50 border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="wkt_pinjam" class="block text-gray-700 text-sm font-bold mb-2">Tanggal & Jam Peminjaman:</label>
                    <input type="datetime-local" id="wkt_pinjam" name="wkt_pinjam" class="border border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="wkt_kembali" class="block text-gray-700 text-sm font-bold mb-2">Tanggal & Jam Pengembalian:</label>
                    <input type="datetime-local" id="wkt_kembali" name="wkt_kembali" class="border border-gray-300 px-3 py-2 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>