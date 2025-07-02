<?php

namespace App\Http\Controllers;

use App\Models\UploadModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.upload', ['title' => 'Data Daun Page']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'accuracy' => 'required|numeric',
            'file_path' => 'required|image|mimes:jpg,jpeg,png,heic',
        ]);

        
        // Ambil label dan extension file
        $label = $request->name; // dari form input hidden yang dikirim JS
        $timestamp = now()->format('YmdHis'); // waktu unik biar nama file beda
        $extension = $request->file('file_path')->getClientOriginalExtension();

        // Bikin nama file berdasarkan label + timestamp
        $fileName = $label . '_' . $timestamp . '.' . $extension;

        // Simpan file ke storage/app/public/uploads
        $imagePath = $request->file('file_path')->storeAs('uploads', $fileName, 'public');

        // Simpan ke database
        UploadModel::create([
            'user_id' => Auth::check() ? Auth::id() : null, // jika tidak login, otomatis null
            'name' => $label,
            'accuracy' => $request->accuracy,
            'file_path' => $imagePath,
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupload!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
