<?php

namespace App\Http\Controllers;

use App\Models\Asdos;
use App\Models\PendaftarAsdos;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Dashboard Dosen
    public function dashboard()
    {
        $user = session('user');
        $totalAsdos = Asdos::where('dosen_id', $user->id)->count();
        $pendaftarBaru = PendaftarAsdos::where('status', 'pending')->count();

        return view('Dosen.dashboard', compact('totalAsdos', 'pendaftarBaru'));
    }

    // Data Asdos milik Dosen
    public function myAsdos()
    {
        $user = session('user');
        $asdos = Asdos::where('dosen_id', $user->id)->with('mahasiswa')->get();
        
        return view('Dosen.my_asdos', compact('asdos'));
    }

    // Detail Asdos
    public function detailAsdos($id)
    {
        $user = session('user');
        $asdos = Asdos::where('dosen_id', $user->id)
                      ->where('id', $id)
                      ->with('mahasiswa')
                      ->firstOrFail();
        
        return view('Dosen.detail_asdos', compact('asdos'));
    }

    // Data Pendaftar Asdos
    public function dataPendaftar()
    {
        $pendaftar = PendaftarAsdos::with('mahasiswa')->get();
        return view('Dosen.pendaftar', compact('pendaftar'));
    }

    // Detail Pendaftar
    public function detailPendaftar($id)
    {
        $pendaftar = PendaftarAsdos::with('mahasiswa')->findOrFail($id);
        return view('Dosen.detail_pendaftar', compact('pendaftar'));
    }

    // Berikan Komentar pada Pendaftar
    public function komentarPendaftar(Request $request, $id)
    {
        $request->validate([
            'komentar' => 'required|string'
        ]);

        $pendaftar = PendaftarAsdos::findOrFail($id);
        $pendaftar->update([
            'komentar' => $request->komentar
        ]);

        return redirect('/dosen/pendaftar/' . $id)->with('success', 'Komentar berhasil ditambahkan!');
    }

    // Approve Pendaftar (Dosen)
    public function approvePendaftar($id)
    {
        $pendaftar = PendaftarAsdos::with('matakuliah')->findOrFail($id);
        $pendaftar->update(['status' => 'disetujui']);

        // Automatically add to asdos with dosen_id
        if ($pendaftar->matakuliah) {
            $user = session('user');
            Asdos::create([
                'user_id' => $pendaftar->user_id,
                'dosen_id' => $user->id,
                'matakuliah_id' => $pendaftar->matakuliah_id,
                'mata_kuliah' => $pendaftar->matakuliah->nama_mk,
                'kode_mk' => $pendaftar->matakuliah->kode_mk,
                'semester' => $pendaftar->matakuliah->semester,
                'deskripsi' => 'Dari pendaftar: ' . ($pendaftar->motivasi ?? 'Tidak ada')
            ]);
        }

        return redirect('/dosen/pendaftar')->with('success', 'Pendaftar disetujui dan masuk ke daftar ASDOS!');
    }

    // Reject Pendaftar (Dosen)
    public function rejectPendaftar(Request $request, $id)
    {
        $request->validate([
            'komentar' => 'required|string'
        ]);

        $pendaftar = PendaftarAsdos::findOrFail($id);
        $pendaftar->update([
            'status' => 'ditolak',
            'komentar' => $request->komentar
        ]);

        return redirect('/dosen/pendaftar')->with('success', 'Pendaftar ditolak!');
    }
}
