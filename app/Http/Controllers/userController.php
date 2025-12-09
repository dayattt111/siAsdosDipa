<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class userController extends Controller
{
    public function form()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $user = LoginModel::where('username', $request->username)->where('password', $request->password)->first();

        if (!$user) {
            return "Login gagal!";
        }

        if ($user->role === LoginModel::ROLE_ADMIN) {
            return view('Admin/dataAsdos');
        }

        if ($user->role === LoginModel::ROLE_DOSEN) {
            return view('Dosen/daftarAsdos');
        }

        if ($user->role === LoginModel::ROLE_MAHASISWA) {
            return view('Mahasiswa/jadwalMhs');
        }

        return "Login berhasil!";
    }
}
