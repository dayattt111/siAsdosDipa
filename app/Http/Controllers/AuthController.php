<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)
                    ->orWhere('email', $request->username)
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);
            
            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard')->with('success', 'Login berhasil!');
            } elseif ($user->role === 'dosen') {
                return redirect('/dosen/dashboard')->with('success', 'Login berhasil!');
            } else {
                return redirect('/mahasiswa/dashboard')->with('success', 'Login berhasil!');
            }
        }

        return back()->with('error', 'Username atau password salah')->withInput();
    }

    // Tampilkan form register
    public function showRegister()
    {
        return view('register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'nim' => 'required|string|max:20|unique:users',
            'no_hp' => 'nullable|string|max:15',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'email' => $request->email,
            'nim' => $request->nim,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa' // Default role mahasiswa
        ]);

        session(['user' => $user]);
        
        return redirect('/mahasiswa/dashboard')->with('success', 'Registrasi berhasil!');
    }

    // Logout
    public function logout()
    {
        session()->forget('user');
        session()->flush();
        
        // Clear all cookies
        foreach (\Illuminate\Support\Facades\Cookie::getQueuedCookies() as $cookie) {
            setcookie($cookie->getName(), '', [
                'expires' => time() - 3600,
                'path' => '/',
            ]);
        }
        
        return redirect('/login')
            ->with('success', 'Logout berhasil!')
            ->cookie('XSRF-TOKEN', '', -1)
            ->cookie('laravel_session', '', -1);
    }
}
