<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarAsdos extends Model
{
    use HasFactory;

    protected $table = 'pendaftar_asdos';
    
    protected $fillable = [
        'user_id',
        'mata_kuliah',
        'kode_mk',
        'ipk',
        'semester',
        'motivasi',
        'dokumen',
        'status',
        'komentar'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
