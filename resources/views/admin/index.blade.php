<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
    @vite('resources/js/admin.js')
    <!-- <script src="{{ asset('resources/js/admin.js') }}"></script>-->
</head>

<body class="bg-gray-100 ">
    <!-- edit karyawan -->
    @include('admin.karyawan.edit_tb_karyawan')
    <div id="editKaryawan" class="fixed inset-0  h-full w-full hidden z-40">
        @yield('editKaryawan')
    </div>
    @include('admin.karyawan.alert_delete_karyawan')
    <div id="deleteKaryawan" class="fixed inset-0  h-full w-full hidden z-40">
        @yield('deleteKaryawan')
    </div>
    <!-- edit karyawan -->

    <!-- edit barang -->
    @include('admin.barang.edit_tb_barang')
    <div id="editBarang" class="fixed inset-0  h-full w-full hidden z-40">
        @yield('editBarang')
    </div>
    @include('admin.barang.alert_delete_barang')
    <div id="deleteBarang" class="fixed inset-0  h-full w-full hidden z-40">
        @yield('deleteBarang')
    </div>
    <!-- edit barang -->

    <!-- edit license -->
    @include('admin.license.edit_tb_license')
    <div id="editLicense" class="fixed inset-0  h-full w-full hidden z-40">
        @yield('editLicense')
    </div>
    @include('admin.license.alert_delete_license')
    <div id="deleteLicense" class="fixed inset-0  h-full w-full hidden z-40">
        @yield('deleteLicense')
    </div>
    <!-- edit license -->
    @yield('notif')

    <!-- Main Content -->
    <div class="sm:flex sm:grid-rows-2">
        <div class="">
            @include('components.sidebar')
        </div>
        <!-- <div class="flex-1 flex-col"> -->
        <!-- <div class="flex-1"> -->
        <div class="w-full">
            @include('admin.contents.index')
            <!-- </div> -->
            <!-- <div class="flex-1"> -->
            @include('components.footer')
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>

    <!-- Main Content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- @vite('resources/js/admin.js') -->

</body>

</html>