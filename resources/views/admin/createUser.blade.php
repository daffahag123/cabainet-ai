<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="m-8 p-12 rounded border border-gray-200">
        <h1 class="font-semibold text-3xl text-gray-800">Tambah User</h1>

        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <div class="mt-8 grid lg:grid-cols-2 gap-6">
                <!-- Username -->
                <div>
                    <label for="username" class="text-sm text-gray-700 block mb-1 font-medium">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Masukkan username Anda" required/>
                    @error('username')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="yourmail@provider.com" required/>
                    @error('email')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="text-sm text-gray-700 block mb-1 font-medium">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required/>
                    @error('password')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label for="password_confirmation" class="text-sm text-gray-700 block mb-1 font-medium">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required/>
                    @error('password_confirmation')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Role -->
                <div>
                    <label for="role" class="text-sm text-gray-700 block mb-1 font-medium">Role</label>
                    <select name="role" id="role" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required>
                        <option value="" disabled selected>Pilih Role</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('role')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="text-sm text-gray-700 block mb-1 font-medium">Status</label>
                    <select name="status" id="status" class="bg-gray-100 border border-gray-200 rounded py-2 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required>
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-4 mt-6">
                <button type="submit" class="!bg-blue-600 hover:!bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 3v18h18V7.828l-3.586-3.586A2 2 0 0 0 16.172 3H3Zm10 2h2v2h-2V5ZM5 5h6v4h6V5h.172L19 7.828V19H5V5Zm2 8v4h10v-4H7Zm2 2h6v-2H9v2Z"/>
                    </svg>
                    Simpan
                </button>                

                <a href="{{ route('admin.user') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded shadow-md flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M17 10a1 1 0 01-1 1H5.414l3.293 3.293a1 1 0 11-1.414 1.414l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L5.414 9H16a1 1 0 011 1z" clip-rule="evenodd" />
                    </svg>
                    Kembali
                </a>
            </div>
        </form>
    </div>

    <!-- Notifikasi Sukses -->
    @if (Session::has('success'))
    <script>
        swal({
            title: "Berhasil!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            button: "OK"
        }).then(() => {
            window.location.href = "{{ route('admin.user') }}";
        });
    </script>
    @endif
</x-admin.layout>
