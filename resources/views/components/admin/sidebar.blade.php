<!-- start: Sidebar -->
<div class="fixed left-0 top-0 w-64 h-full bg-gradient-to-b from-emerald-700 to-emerald-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="{{ route('admin.dashboard') }}" class="flex items-center pb-4 border-b border-b-gray-300">
        <img src={{ asset('img/logo-daun.png') }} alt="" class="w-8 h-8 rounded object-cover">
        <span class="text-lg font-bold text-white ml-3">CabaiNet</span>
    </a>
    <ul class="mt-4">
        <li class="mb-1 group {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}"" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100">
                <i class="ri-layout-grid-line mr-3 text-lg"></i>    
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group {{ Route::is('admin.user') ? 'active' : '' }}">
            <a href="{{ route('admin.user') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100">
                <i class="ri-user-line mr-3 text-lg"></i>    
                <span class="text-sm">User</span>
            </a>
        </li>
        <li class="mb-1 group {{ Route::is('admin.upload') ? 'active' : '' }}">
            <a href="{{ route('admin.upload') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100">
                <i class="ri-leaf-line mr-3 text-lg"></i> 
                <span class="text-sm">Data Daun</span>
            </a>
        </li>
        <li class="mb-1 group {{ Route::is('admin.discussion') ? 'active' : '' }}">
            <a href="{{ route('admin.discussion') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100">
                <i class="ri-article-line mr-3 text-lg"></i> 
                <span class="text-sm">Topik Diskusi</span>
            </a>
        </li>
        <li class="mb-1 group {{ Route::is('admin.comment') ? 'active' : '' }}">
            <a href="{{ route('admin.comment') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100">
                <i class="ri-message-3-line mr-3 text-lg"></i> 
                <span class="text-sm">Komentar Diskusi</span>
            </a>
        </li>
        <li class="mb-1 group {{ Route::is('admin.contact') ? 'active' : '' }}">
            <a href="{{ route('admin.contact') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100">
                <i class="ri-mail-line mr-3 text-lg"></i> 
                <span class="text-sm">Pesan</span>
            </a>
        </li>
        {{-- <li class="mb-1 group">
            <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-emerald-600 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-900 group-[.active]:text-white group-[.selected]:bg-gray-800 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-instance-line mr-3 text-lg"></i>
                <span class="text-sm">Orders</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active order</a>
                </li> 
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed order</a>
                </li> 
                <li class="mb-4">
                    <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Canceled order</a>
                </li> 
            </ul>
        </li> --}}
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end: Sidebar -->