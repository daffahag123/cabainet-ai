<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserModel::all();
 
        return view('admin.user', [
            'title' => 'User Page',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createUser', ['title' => 'Tambah User Page']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); // Cek apakah data terkirim dengan benar
        
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:user,admin',
            'status' => 'required|in:active,inactive',
        ]);

        // Konversi status menjadi 1 atau 0
        $status = $request->status === 'active' ? 1 : 0;

        // Simpan ke database
        UserModel::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $status,
        ]);

        return back()->with('success', 'Pengguna berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil data user berdasarkan ID
        $user = UserModel::findOrFail($id);
        
        // Mengirim data ke view
        return view('admin.editUser', [
            'user' => $user,
            'title' => 'Edit User Page'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data input
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'role' => 'required|in:admin,user',
            'status' => 'required|boolean',
        ]);

        // Temukan pengguna berdasarkan ID
        $user = UserModel::findOrFail($id);

        // Update data pengguna
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;

        // Simpan perubahan
        $user->save();

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Pengguna berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = UserModel::findOrFail($id); // Temukan kontak berdasarkan ID
        $user->delete(); // Hapus kontak
        
        return back()->with('success', 'Pengguna berhasil dihapus!');
    }
}
