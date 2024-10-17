@section('history')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-bold mb-4">List Peminjaman</h2>
        <div class="overflow-x-auto">

            <!-- Add this code above the table -->
            <div class="mt-4 mb-8">
                <label for="month-filter" class="text-gray-600">Filter berdasarkan bulan peminjaman:</label>
                <form action="{{ route('filter-by-month') }}" method="GET" class="inline-flex">
                    <select name="month" id="month-filter" class="ml-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="" selected>Semua</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                    <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Filter</button>
                </form>
                <a href="{{ route('export-peminjaman', ['month' => request()->input('month')]) }}" class="ml-2 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Export to Excel</a>
            </div>


            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Barang</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Barang</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu Peminjaman</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu Pengembalian</th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap">Status
                            <form action="{{ route('status') }}" method="GET">
                                <select name="status" id="status-filter">
                                    <option value="">Semua</option>
                                    <option value="3">Selesai</option>
                                    <option value="2">Menunggu</option>
                                    <option value="1">Dipinjam</option>
                                    <option value="0">Ditolak</option>
                                </select>
                                <button type="submit">Filter</button>
                            </form>
                        </th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Di Update pada</th>
                        <th class="px-6 py-3 bg-gray-50"></th>
                    </tr>
                </thead>
                <tbody id="data-body" class="bg-white divide-y divide-gray-200">
                    @foreach ($peminjaman->sortByDesc('updated_at')->take(5) as $pinjam)
                    @if ($pinjam->status != 2) <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->jenis_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->id_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->waktu_peminjaman }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->waktu_pengembalian }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            @if ($pinjam->status == 1)
                            <label class="bg-blue-500 text-white px-2 rounded-lg"> Booked</label>
                            @elseif ($pinjam->status == 0)
                            <label class="bg-red-500 text-white px-2 rounded-lg"> Decline</label>
                            @elseif ($pinjam->status == 3)
                            <label class="bg-green-500 text-white px-2 rounded-lg"> Done</label>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pinjam->updated_at }}</td>
                        @if ($pinjam->status == 1)
                        <td class="px-6 py-4 whitespace-nowrap flex items-center gap-2">
                            <form action="{{ route('peminjaman-done', $pinjam->id_peminjaman) }}" method="POST">
                                @csrf
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Return</button>
                            </form>
                            <form action="{{ route('peminjaman-deadline', $pinjam->id_peminjaman) }}" method="POST">
                                @csrf
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Alert Deadline</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection