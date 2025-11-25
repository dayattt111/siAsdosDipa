<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'data_user';
    
    const ROLE_DOSEN = 'dosen';
    const ROLE_MAHASISWA = 'mahasiswa';
    const ROLE_ADMIN = 'admin';

    protected $fillable = [
        'nama_user',
        'username',
        'password',
        'role'
    ];
}
