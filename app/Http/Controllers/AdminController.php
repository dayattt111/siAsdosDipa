<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asdos;
use App\Models\PendaftarAsdos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Dashboard Admin
    public function dashboard()
    {
        $totalMahasiswa = User::where('role', 'mahasiswa')->count();
        $totalDosen = User::where('role', 'dosen')->count();
        $totalAsdos = Asdos::count();
        $totalPendaftar = PendaftarAsdos::where('status', 'pending')->count();

        return view('Admin.dashboard', compact('totalMahasiswa', 'totalDosen', 'totalAsdos', 'totalPendaftar'));
    }

    // Data Asdos
    public function dataAsdos()
    {
        $asdos = Asdos::with(['mahasiswa', 'dosen'])->get();
        return view('Admin.asdos', compact('asdos'));
    }

    // Form Tambah Asdos
    public function createAsdos()
    {
        $mahasiswa = User::where('role', 'mahasiswa')->get();
        $dosen = User::where('role', 'dosen')->get();
        return view('Admin.tambah_asdos', compact('mahasiswa', 'dosen'));
    }

    // Simpan Asdos
    public function storeAsdos(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'dosen_id' => 'required|exists:users,id',
            'mata_kuliah' => 'required|string|max:255',
            'kode_mk' => 'required|string|max:20',
            'semester' => 'required|string|max:10',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,tidak_aktif'
        ]);

        Asdos::create($request->all());

        return redirect('/admin/asdos')->with('success', 'Asdos berhasil ditambahkan!');
    }

    // Form Edit Asdos
    public function editAsdos($id)
    {
        $asdos = Asdos::findOrFail($id);
        $mahasiswa = User::where('role', 'mahasiswa')->get();
        $dosen = User::where('role', 'dosen')->get();
        return view('Admin.edit_asdos', compact('asdos', 'mahasiswa', 'dosen'));
    }

    // Update Asdos
    public function updateAsdos(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'dosen_id' => 'required|exists:users,id',
            'mata_kuliah' => 'required|string|max:255',
            'kode_mk' => 'required|string|max:20',
            'semester' => 'required|string|max:10',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,tidak_aktif'
        ]);

        $asdos = Asdos::findOrFail($id);
        $asdos->update($request->all());

        return redirect('/admin/asdos')->with('success', 'Asdos berhasil diupdate!');
    }

    // Hapus Asdos
    public function deleteAsdos($id)
    {
        $asdos = Asdos::findOrFail($id);
        $asdos->delete();

        return redirect('/admin/asdos')->with('success', 'Asdos berhasil dihapus!');
    }

    // Data Pendaftar Asdos
    public function dataPendaftar()
    {
        $pendaftar = PendaftarAsdos::with('mahasiswa')->get();
        return view('Admin.pendaftar', compact('pendaftar'));
    }

    // Detail Pendaftar
    public function detailPendaftar($id)
    {
        $pendaftar = PendaftarAsdos::with('mahasiswa')->findOrFail($id);
        return view('Admin.detail_pendaftar', compact('pendaftar'));
    }

    // Approve Pendaftar
    public function approvePendaftar($id)
    {
        $pendaftar = PendaftarAsdos::findOrFail($id);
        $pendaftar->update(['status' => 'disetujui']);

        return redirect('/admin/pendaftar')->with('success', 'Pendaftar berhasil disetujui!');
    }

    // Reject Pendaftar
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

        return redirect('/admin/pendaftar')->with('success', 'Pendaftar berhasil ditolak!');
    }

    // Data User
    public function dataUser()
    {
        $users = User::all();
        return view('Admin.users', compact('users'));
    }

    // Form Tambah User
    public function createUser()
    {
        return view('Admin.tambah_user');
    }

    // Simpan User
    public function storeUser(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'nim' => 'required|string|max:20|unique:users',
            'no_hp' => 'nullable|string|max:15',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,dosen,mahasiswa'
        ]);

        User::create([
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'email' => $request->email,
            'nim' => $request->nim,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect('/admin/users')->with('success', 'User berhasil ditambahkan!');
    }

    // Form Edit User
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('Admin.edit_user', compact('user'));
    }

    // Update User
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama_user' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'nim' => 'required|string|max:20|unique:users,nim,' . $id,
            'no_hp' => 'nullable|string|max:15',
            'role' => 'required|in:admin,dosen,mahasiswa'
        ]);

        $data = $request->only(['nama_user', 'username', 'email', 'nim', 'no_hp', 'role']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect('/admin/users')->with('success', 'User berhasil diupdate!');
    }

    // Hapus User
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/admin/users')->with('success', 'User berhasil dihapus!');
    }
}
