<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';
    
    protected $fillable = ['kode_mk', 'nama_mk', 'semester', 'sks'];

    public function asdos()
    {
        return $this->hasMany(Asdos::class, 'matakuliah_id');
    }
}
