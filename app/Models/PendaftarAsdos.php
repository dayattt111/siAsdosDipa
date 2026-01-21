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
        'matakuliah_id',
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

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id');
    }
}
