<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-12 py-8">
        <div class="flex justify-end">
            <a href="{{ route('admin.user.create') }}" 
                class="flex items-center gap-2 text-white bg-blue-600 hover:bg-blue-700 shadow-md focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-base px-2 py-2.5 me-2 mb-2">
                <!-- Icon Plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <span>Tambah Data</span>
            </a>
        </div>              
        
        <div class="overflow-x-auto">
            <table id="example" class="w-full border border-gray-300 display" style="width:100%">
                <thead>
                    <tr class="bg-emerald-600">
                        <th class="text-white">No</th>
                        <th class="text-white">Username</th>
                        <th class="text-white">Email</th>
                        <th class="text-white">Role</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                {{ $user->status ? 'Active' : 'Inactive' }}
                            </td>
                            <td>
                                <div class="flex items-center space-x-1">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                        </svg>
                                        <span class="absolute left-8 top-1/2 transform -translate-y-1/2 text-blue-600 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Edit</span>
                                    </a>
                                
                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" class="delete-form" style="display: inline;">
                                        @csrf
                                        @method('DELETE') <!-- Ini untuk mengirim request DELETE -->
                                        <button type="button" class="text-red-600 hover:text-red-800 delete-btn">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                        </button>
                                    </form>                               
                                </div>                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Notifikasi Sukses -->
    @if (Session::has('success'))
    <script>
        swal({
            title: "Berhasil!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            button: "OK"
        });
    </script>
    @endif

    <script>
        // Cari semua tombol hapus
        const deleteBtns = document.querySelectorAll('.delete-btn');
    
        // Loop setiap tombol hapus
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                // Mencegah form dikirim langsung
                e.preventDefault();
    
                // Ambil form terkait tombol hapus
                const form = this.closest('form');
    
                // Tampilkan konfirmasi SweetAlert
                swal({
                    title: "Apakah Anda yakin?",
                    text: "Data ini akan dihapus dan tidak dapat dipulihkan!",
                    icon: "warning",
                    buttons: ["Batal", "Hapus"],
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        // Jika pilih Hapus, kirim form untuk menghapus
                        form.submit();
                    }
                });
            });
        });
    </script>
</x-admin.layout>
