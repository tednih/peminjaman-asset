@extends('admin.index')

@section('notif')

@if (session('deadline'))
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
                    <p class="text-sm">{{ session('deadline') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (session('berhasil_hps'))
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
                    <p class="text-sm">{{ session('berhasil_hps') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (session('berhasil_approve'))
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
                    <p class="text-sm">{{ session('berhasil_approve') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('content')


<div class="bg-white overflow-hidden shadow-sm rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-bold mb-4">Daftar Peminjaman</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Barang</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID Barang</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Waktu Peminjaman</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Waktu Pengembalian</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 bg-gray-50"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($peminjaman as $pinjam)
                    @if ($pinjam->status == 2)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->jenis_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->id_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->waktu_peminjaman }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->waktu_pengembalian }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($pinjam->status == 2)
                            <label class="bg-yellow-500 text-white px-2 rounded-lg">Waiting</label>
                            @elseif ($pinjam->status == 1)
                            Accept
                            @elseif ($pinjam->status == 0)
                            Reject
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                            <form action="{{ route('approve-peminjaman', $pinjam->id_peminjaman) }}" method="POST">
                                @csrf
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Approve</button>
                            </form>
                            <form action="{{ route('decline-peminjaman', $pinjam->id_peminjaman) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Decline</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@include('admin.dashboard.history')
@endsection