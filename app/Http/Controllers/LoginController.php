<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\LoginModel;

class LoginController extends Controller
{
public function proses_login(Request $request)
{
    // Validasi biasa
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Cari user berdasarkan email
    $user = LoginModel::where('email', $request->email)->first();

    // cek user & password
    if (!$user || !Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Email atau Password salah!');
    }

    // Redirect langsung sesuai role (TANPA SESSION)
    if ($user->role === 'admin') {
        return redirect('/adminAsdos');
    } 
    else if ($user->role === 'dosen') {
        return redirect('/Dosen');
    }
    else if( $user->role === 'dosen'){
        return redirect('/jadwalMhs');
    }
    else{
        return back()->with('error', 'Role user tidak dikenali!');
    }
    }
}