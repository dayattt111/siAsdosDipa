<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asdos extends Model
{
    use HasFactory;

    protected $table = 'asdos';
    
    protected $fillable = [
        'user_id',
        'dosen_id',
        'matakuliah_id',
        'mata_kuliah',
        'kode_mk',
        'semester',
        'deskripsi',
        'status'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id');
    }
}
