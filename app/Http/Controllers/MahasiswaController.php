<?php

namespace App\Http\Controllers;

use App\Models\PendaftarAsdos;
use App\Models\Asdos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    // Dashboard Mahasiswa
    public function dashboard()
    {
        $user = session('user');
        $myPendaftaran = PendaftarAsdos::where('user_id', $user->id)->count();
        $disetujui = PendaftarAsdos::where('user_id', $user->id)
                                   ->where('status', 'disetujui')
                                   ->count();
        $pending = PendaftarAsdos::where('user_id', $user->id)
                                 ->where('status', 'pending')
                                 ->count();

        return view('Mahasiswa.dashboard', compact('myPendaftaran', 'disetujui', 'pending'));
    }

    // Daftar sebagai Asdos
    public function formPendaftaran()
    {
        return view('Mahasiswa.daftar_asdos');
    }

    // Simpan Pendaftaran
    public function storePendaftaran(Request $request)
    {
        $user = session('user');

        $request->validate([
            'mata_kuliah' => 'required|string|max:255',
            'kode_mk' => 'required|string|max:20',
            'ipk' => 'required|numeric|min:0|max:4',
            'semester' => 'required|string|max:10',
            'motivasi' => 'nullable|string',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        $data = [
            'user_id' => $user->id,
            'mata_kuliah' => $request->mata_kuliah,
            'kode_mk' => $request->kode_mk,
            'ipk' => $request->ipk,
            'semester' => $request->semester,
            'motivasi' => $request->motivasi,
            'status' => 'pending'
        ];

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('dokumen_asdos', $filename, 'public');
            $data['dokumen'] = $path;
        }

        PendaftarAsdos::create($data);

        return redirect('/mahasiswa/riwayat')->with('success', 'Pendaftaran berhasil dikirim!');
    }

    // Riwayat Pendaftaran
    public function riwayatPendaftaran()
    {
        $user = session('user');
        $riwayat = PendaftarAsdos::where('user_id', $user->id)->get();

        return view('Mahasiswa.riwayat', compact('riwayat'));
    }

    // Detail Pendaftaran
    public function detailPendaftaran($id)
    {
        $user = session('user');
        $pendaftar = PendaftarAsdos::where('user_id', $user->id)
                                   ->where('id', $id)
                                   ->firstOrFail();

        return view('Mahasiswa.detail_pendaftaran', compact('pendaftar'));
    }

    // Status Asdos (jika sudah disetujui)
    public function statusAsdos()
    {
        $user = session('user');
        $asdos = Asdos::where('user_id', $user->id)->with('dosen')->get();

        return view('Mahasiswa.status_asdos', compact('asdos'));
    }

    // Profile
    public function profile()
    {
        $user = session('user');
        return view('Mahasiswa.profile', compact('user'));
    }

    // Update Profile
    public function updateProfile(Request $request)
    {
        $user = session('user');
        $userModel = \App\Models\User::find($user->id);

        $request->validate([
            'nama_user' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'no_hp' => 'nullable|string|max:15',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = [
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($user->gambar) {
                Storage::disk('public')->delete($user->gambar);
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('profile_images', $filename, 'public');
            $data['gambar'] = $path;
        }

        $userModel->update($data);

        // Update session
        session(['user' => $userModel]);

        return redirect('/mahasiswa/profile')->with('success', 'Profile berhasil diupdate!');
    }
}
