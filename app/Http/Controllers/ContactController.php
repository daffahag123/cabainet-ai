<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact', ['title' => 'Contact Page']);
    }

    // Halaman Admin
    public function indexAdmin()
    {
        // Mengambil semua data kontak
        $contacts = ContactModel::all();

        return view('admin.contact', [
            'title' => 'Pesan Page',
            'contacts' => $contacts,  // Pastikan mengirimkan data kontak
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createContact', ['title' => 'Tambah Pesan Page']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'message' => 'required'
        ]);

        // Simpan data ke database
        ContactModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // Redirect dengan pesan sukses
        return back()->with('success', 'Pesan berhasil dikirim! Terima kasih!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data kontak berdasarkan ID
        $contact = ContactModel::findOrFail($id);
        
        // Mengirim data ke view
        return view('admin.editContact', [
            'contact' => $contact,
            'title' => 'Edit Pesan Page'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Temukan kontak berdasarkan ID
        $contact = ContactModel::findOrFail($id);

        // Update data
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        // Simpan perubahan
        $contact->save();

        // Redirect ke halaman daftar kontak dengan pesan sukses
        return back()->with('success', 'Pesan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactModel::findOrFail($id); // Temukan kontak berdasarkan ID
        $contact->delete(); // Hapus kontak
        
        return back()->with('success', 'Pesan berhasil dihapus!');
    }
    
}
