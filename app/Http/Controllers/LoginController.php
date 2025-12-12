<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\LoginModel;

class LoginController extends Controller
{
public function proses_login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ], [
        'email.required' => 'Email wajib diisi!',
        'email.email' => 'Format email tidak valid!',
        'password.required' => 'Password wajib diisi!'
    ]);

    $user = LoginModel::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'Email tidak terdaftar!')->withInput();
    }

    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Password salah!')->withInput();
    }

    if ($user->role === 'admin') {
        return redirect('/adminAsdos');
    } 
    elseif ($user->role === 'dosen') {
        return redirect('/Dosen');
    }
    elseif ($user->role === 'mahasiswa') {
        return redirect('/jadwalMhs');
    }

    return back()->with('error', 'Role user tidak dikenali!');
}

}