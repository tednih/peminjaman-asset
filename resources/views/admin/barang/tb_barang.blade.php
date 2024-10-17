@section('tb_barang')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-bold mb-4">List Barang</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border tracking-wider bg-blue-50 sticky left-0">ID Barang</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border tracking-wider">Deskripsi</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border tracking-wider">Kategori</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border tracking-wider whitespace-normal">Action</th>

                    </tr>
                </thead>
                <tbody id="data-body" class="bg-white divide-y divide-gray-200">
                    @foreach ($barang->take(10) as $brng)
                    <tr class="odd:bg-white even:bg-gray-50 text-center">
                        <td class="px-6 py-4 whitespace-nowrap border bg-blue-50 sticky left-0 shadow-sm">{{ $brng->id_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $brng->deskripsi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $brng->kategori }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">
                            @if ($brng->tersedia == 1)
                            Available
                            @elseif ($brng->tersedia == 0)
                            Booked
                            @endif
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap border">
                            <button id="btnEditBarang" data-id="{{ $brng->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button id="btnDeleteBarang" data-id="{{ $brng->id }}" data-name="{{ $brng->deskripsi }}" data-idBarang="{{ $brng->id_barang }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="load-more-btn-barang" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 sticky my-4 left-0 rounded">Show More</button>
        </div>
    </div>
</div>
@include('admin.barang.edit_tb_barang')
@endsection