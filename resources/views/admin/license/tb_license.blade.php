@section('tb_license')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <h2 class="text-2xl font-bold mb-4">List License</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider sticky left-0 bg-blue-50">Nama License</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Expired</th>
                        <th scope="col" class="px-6 py-3 text-center border text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-no-wrap">Action</th>

                    </tr>
                </thead>
                <tbody id="data-body" class="bg-white divide-y divide-gray-200">
                    @foreach ($license->take(10) as $lcnse)
                    <tr class="odd:bg-white even:bg-gray-50 text-center">
                        <td class="px-6 py-4 whitespace-nowrap border sticky bg-blue-50 left-0 shadow-sm">{{ $lcnse->nama_license }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">{{ $lcnse->tgl_expired }}</td>
                        <td class="px-6 py-4 whitespace-nowrap border">
                            <button id="btnEditLicense" data-id="{{ $lcnse->id_license }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button id="btnDeleteLicense" data-id="{{ $lcnse->id_license }}" data-name="{{ $lcnse->nama_license }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="load-more-btn-license" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 sticky my-4 left-0 rounded">Show More</button>
        </div>
    </div>
</div>
@include('admin.license.edit_tb_license')
@endsection