@section('tb_karyawan')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-bold mb-4">List Karyawan</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider  left-0 bg-blue-50">Nama</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider">NRP</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider">Divisi</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider">Departement</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap">Email</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap">Action</th>
                    </tr>
                </thead>
                <tbody id="data-body" class="bg-white divide-y divide-gray-200">
                    @foreach ($karyawan->take(10) as $krywn)
                    <tr class="odd:bg-white even:bg-gray-50 text-center">
                        <td class="px-6 py-4 whitespace-nowrap border  bg-blue-50 left-0 shadow-sm">{{ $krywn->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $krywn->nrp }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $krywn->divisi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $krywn->dept }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $krywn->email }}</td>

                        <td class="px-6 py-4 whitespace-nowrap border">
                            <button data-id="{{ $krywn->id_karyawan }}" id="btnEditKaryawan" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button data-id="{{ $krywn->id_karyawan }}" data-name="{{ $krywn->nama }}" id="btnDeleteKaryawan" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="load-more-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4  my-4 left-0 rounded">Show More</button>
        </div>
    </div>
</div>
@include('admin.karyawan.edit_tb_karyawan')
@endsection