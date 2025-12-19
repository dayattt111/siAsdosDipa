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
        'nim' => 'required',
        'password' => 'required'
    ], [
        'nim.required' => 'NIM wajib diisi!',
        'password.required' => 'Password wajib diisi!'
    ]);

    $user = LoginModel::where('nim', $request->nim)->first();

    if (!$user) {
        return back()->with('error', 'NIM tidak terdaftar!')->withInput();
    }

    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Password salah!')->withInput();
    }

    if ($user->role === 'admin') {
    session([
        'user_id' => $user->id,
        'user_nim' => $user->nim,
        'user_role' => $user->role
    ]);
        return redirect('/adminAsdos');
    } 
    elseif ($user->role === 'dosen') {
        session([
            'user_id' => $user->id,
            'user_nim' => $user->nim,
            'user_role' => $user->role
        ]);
        return redirect('/Dosen');
    }
    elseif ($user->role === 'mahasiswa') {
        session([
            'user_id' => $user->id,
            'user_nim' => $user->nim,
            'user_role' => $user->role
        ]);
        return redirect('/jadwalMhs');
    }

    return back()->with('error', 'Role user tidak dikenali!');
    }
    public function logout(Request $request)
    {
        session()->flush();
        return redirect('/login')->with('success', 'Berhasil logout!');
    }

}