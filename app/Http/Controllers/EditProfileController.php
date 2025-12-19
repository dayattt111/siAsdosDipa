<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
{
    public function form()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $user = User::find(session('user_id'));
        return view('Mahasiswa.profile', ['user' => $user]);
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
            'password' => 'nullable|min:6|confirmed',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $updateData = [
            'nama_user' => $validated['nama_user'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp']
        ];

        if ($request->hasFile('gambar')) {

            // hapus foto lama
            if ($user->gambar && $user->gambar !== 'default.jpg'
                && Storage::disk('public')->exists('profil/'.$user->gambar)) {

                Storage::disk('public')->delete('profil/'.$user->gambar);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // SIMPAN KE storage/app/public/profil
            $file->storeAs('profil', $filename, 'public');

            $updateData['gambar'] = $filename;
        }


        $user->update($updateData);

        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($validated['password'])]);
        }

        session(['user_nama' => $user->nama_user]);

        return redirect('/profile')->with('success', 'Profil berhasil diperbarui!');
    }
}

