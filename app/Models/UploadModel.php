<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadModel extends Model
{
    use HasFactory;

    // Matikan updated_at
    const UPDATED_AT = null; 

    // Nama tabel di database
    protected $table = 'uploads'; 
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'user_id',       // relasi ke users
        'name',          // nama varietas hasil klasifikasi
        'accuracy',      // tingkat akurasi
        'file_path',     // lokasi file gambar
        'created_at'     // waktu unggahan
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(UserModel::class);
    }
}
