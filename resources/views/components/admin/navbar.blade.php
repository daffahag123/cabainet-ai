<div class="py-4 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4">
        <li class="text-gray-600 mr-2 font-medium">Admin</li>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        <li class="text-black mr-2 font-medium">
            @php
                $routeName = Route::currentRouteName();
            @endphp

            {{-- Logika Crumbler Navigation --}}

            {{-- Halaman User --}}
            @if ($routeName === 'admin.user' || $routeName === 'admin.user.create' || $routeName === 'admin.user.edit')
                <!-- Jika berada di halaman User (termasuk create dan edit) -->
                <li class="text-black font-medium">
                    @if ($routeName === 'admin.user.create' || $routeName === 'admin.user.edit')
                        <!-- Jika berada di halaman create atau edit, link ke halaman "User" -->
                        <a href="{{ route('admin.user') }}" class="text-gray-600 hover:text-black">User</a>
                    @else
                        <!-- Jika tidak berada di create atau edit, hanya tampilkan teks -->
                        User
                    @endif
                </li>
                @if ($routeName === 'admin.user.create')
                    <li class="text-gray-600 mx-2 font-medium">/</li>
                    <li class="text-black font-medium">Tambah User</li>
                @elseif ($routeName === 'admin.user.edit')
                    <li class="text-gray-600 mx-2 font-medium">/</li>
                    <li class="text-black font-medium">Edit User</li>
                @endif

            {{-- Halaman Contact --}}    
            @elseif ($routeName === 'admin.contact' || $routeName === 'admin.contact.create' || $routeName === 'admin.contact.edit')
                <!-- Jika berada di halaman Contact (termasuk create dan edit) -->
                <li class="text-black font-medium">
                    @if ($routeName === 'admin.contact.create' || $routeName === 'admin.contact.edit')
                        <!-- Jika berada di halaman create atau edit, link ke halaman "Pesan" -->
                        <a href="{{ route('admin.contact') }}" class="text-gray-600 hover:text-black">Pesan</a>
                    @else
                        <!-- Jika tidak berada di create atau edit, hanya tampilkan teks -->
                        Pesan
                    @endif
                </li>
                @if ($routeName === 'admin.contact.create')
                    <li class="text-gray-600 mx-2 font-medium">/</li>
                    <li class="text-black font-medium">Tambah Pesan</li>
                @elseif ($routeName === 'admin.contact.edit')
                    <li class="text-gray-600 mx-2 font-medium">/</li>
                    <li class="text-black font-medium">Edit Pesan</li>
                @endif

            {{-- Halaman --}}
            @else
                <!-- Jika bukan  -->
                <li class="text-black font-medium">
                    @php
                        $pageTitle = match ($routeName) {
                            'admin.dashboard' => 'Dashboard',
                            'admin.user.index' => 'User',
                            'admin.upload' => 'Data Daun',
                            'admin.discussion' => 'Topik Diskusi',
                            'admin.comment' => 'Komentar Diskusi',
                            'admin.contact.index' => 'Pesan',
                            default => 'Halaman Tidak Ditemukan',
                        };
                    @endphp
                    {{ $pageTitle }}
                </li>
            @endif

        </li>
    </ul>

    <ul class="ml-auto flex items-center">
        <li class="mr-1 dropdown">
            <button type="button" class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                <i class="ri-search-line"></i>
            </button>
            <div class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                <form action="" class="p-4 border-b border-b-gray-100">
                    <div class="relative w-full">
                        <input type="text" class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500" placeholder="Search...">
                        <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </form>
                <div class="mt-3 mb-2">
                    <div class="text-[13px] font-medium text-gray-400 ml-4 mb-2">Recently</div>
                    <ul class="max-h-64 overflow-y-auto">
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">Create landing page</div>
                                    <div class="text-[11px] text-gray-400">$345</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <button type="button" class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                <i class="ri-notification-3-line"></i>
            </button>
            <div class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                    <button type="button" data-tab="notification" data-tab-page="notifications" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active">Notifications</button>
                    <button type="button" data-tab="notification" data-tab-page="messages" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1">Messages</button>
                </div>
                <div class="my-2">
                    <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                    <div class="text-[11px] text-gray-400">from a user</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                    <div class="text-[11px] text-gray-400">from a user</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                    <div class="text-[11px] text-gray-400">from a user</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                    <div class="text-[11px] text-gray-400">from a user</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                    <div class="text-[11px] text-gray-400">from a user</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="max-h-64 overflow-y-auto hidden" data-tab-for="notification" data-page="messages">
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                    <div class="text-[11px] text-gray-400">Hello there!</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                    <div class="text-[11px] text-gray-400">Hello there!</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                    <div class="text-[11px] text-gray-400">Hello there!</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                    <div class="text-[11px] text-gray-400">Hello there!</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
                                <div class="ml-2">
                                    <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                    <div class="text-[11px] text-gray-400">Hello there!</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="dropdown ml-3">
            <button type="button" class="dropdown-toggle flex items-center">
                <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
            </button>
            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                <li>
                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</div>