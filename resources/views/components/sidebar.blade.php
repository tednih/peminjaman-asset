<button id="burger-button" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
    aria-controls="logo-sidebar" type="button"
    class="flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 bg-gray-700 rounded-full sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <svg class="w-6 h-6" pointer-events="bounding-box" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg" style="pointer-events: none;">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed sm:static sm:flex top-0 z-20 left-0 w-64 h-full bg-gray-800 text-white p-4 transform transition-transform duration-300 ease-in-out sm:-translate-x-0 -translate-x-full "
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="/admin" class="flex items-center pl-2.5 mb-5">
            <img src="{{ asset('images/logobp.png') }}" class="h-6 w-6 mr-3 sm:h-7" alt="BinaPertiwi Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">BinaPertiwi</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/admin"
                    class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin') ? 'text-gray-100 bg-blue-600' : ' text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700  ' }}">
                    <svg aria-hidden="true"
                        class="w-6 h-6  {{ request()->routeIs('admin') ? 'text-gray-100' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/karyawan"
                    class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.karyawan') ? 'text-gray-100 bg-blue-600' : ' text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700  ' }}">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6  {{ request()->routeIs('admin.karyawan') ? 'text-gray-100' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white ' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Karyawan</span>
                </a>
            </li>
            <li>
                <a href="/admin/barang"
                    class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.barang') ? 'text-gray-100 bg-blue-600' : ' text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700  ' }}">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6  {{ request()->routeIs('admin.barang') ? 'text-gray-100' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white ' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Barang</span>
                    <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
                </a>
            </li>
            <li>
                <a href="/admin/license"
                    class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.license') ? 'text-gray-100 bg-blue-600' : ' text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700  ' }}">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6  {{ request()->routeIs('admin.license') ? 'text-gray-100' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white ' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">License</span>
                </a>
            </li>
            <li>
                <a href="/admin/listAdmin"
                    class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.admin') ? 'text-gray-100 bg-blue-600' : ' text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700  ' }}">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 {{ request()->routeIs('admin.admin') ? 'text-gray-100' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white'}}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Admin</span>
                </a>
            </li>


            <!--<li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li> -->
            <li>
                <form action="{{ route('admin.logout') }}" method="POST" class="">
                    @csrf
                    <button
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                        type="submit">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
    <div class="pb-20">
        BP
    </div>
</aside>