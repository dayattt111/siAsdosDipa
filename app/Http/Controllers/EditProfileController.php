<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    public function form()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $user = User::find(session('user_id'));
        return view('edit_profile', ['user' => $user]);
    }

    public function proses()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $request = request();
        $user = User::find(session('user_id'));

        $validated = $request->validate([
            'nama_user' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'no_hp' => 'required|string|max:15',
            'password' => 'nullable|min:6|confirmed'
        ]);

        $user->update([
            'nama_user' => $validated['nama_user'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp']
        ]);

        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($validated['password'])]);
        }

        session(['user_nama' => $user->nama_user]);

        return redirect('/profile')->with('success', 'Profil berhasil diperbarui!');
    }
}
