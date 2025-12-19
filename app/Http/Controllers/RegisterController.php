<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function form()
    {
        if (session()->has('user_id')) {
            return redirect('/register');
        }
        return view('register');
    }

    public function proses()
    {
        $req = request();
        
        $validated = $req->validate([
            'nama_user' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'nim' => 'required|string|unique:users',
            'password' => 'required|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambar = 'default.jpg';
        if ($req->hasFile('gambar')) {
            $file = $req->file('gambar');
            $gambar = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('profil', $filename, 'public');
        }

        User::create([
            'nama_user' => $validated['nama_user'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'nim' => $validated['nim'],
            'password' => Hash::make($validated['password']),
            'no_hp' => $validated['no_hp'],
            'role' => 'mahasiswa',
            'gambar' => $gambar
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silahkan login.');
    }
}
