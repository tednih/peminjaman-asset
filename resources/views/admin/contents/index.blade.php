<div class=" {{ request()->routeIs('admin.karyawan','admin.barang', 'admin.admin', 'admin.license') ? 'hidden' : 'p-2 sm:' }} ">
        <div class="{{ request()->routeIs('admin.karyawan','admin.barang') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('content')

        </div>
    </div>

    <div class=" {{ request()->routeIs('admin.karyawan','admin.barang', 'admin.admin', 'admin.license') ? 'hidden' : 'p-2 sm:' }} ">
        <div class="{{ request()->routeIs('admin.karyawan','admin.barang') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('history')

        </div>
    </div>

    <div class=" {{ !request()->routeIs('admin.karyawan') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.karyawan') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('karyawan')

        </div>
    </div>
    <div class=" {{ !request()->routeIs('admin.karyawan') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.karyawan') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('tb_karyawan')

        </div>
    </div>

    <div class=" {{ !request()->routeIs('admin.barang') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.barang') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('barang')

        </div>
    </div>
    <div class=" {{ !request()->routeIs('admin.barang') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.barang') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('tb_barang')

        </div>
    </div>

    <div class=" {{ !request()->routeIs('admin.license') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.license') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('license')

        </div>
    </div>
    <div class=" {{ !request()->routeIs('admin.license') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.license') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('tb_license')

        </div>
    </div>

    <div class=" {{ !request()->routeIs('admin.admin') ? 'hidden' : 'p-2 sm:' }}">
        <div class="{{ !request()->routeIs('admin.admin') ? 'hidden' : 'p-4 py-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700' }}">

            @yield('admin')

        </div>
    </div>