<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    // Matikan updated_at
    const UPDATED_AT = null; 
    
    // Nama tabel di database
    protected $table = 'contacts'; 
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi
    protected $fillable = [
        'name', 
        'email', 
        'message'
    ];
}
