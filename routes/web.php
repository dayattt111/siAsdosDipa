<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

// Public Routes
Route::middleware(['guest.custom'])->group(function () {
    Route::get('/', function () {
        return redirect('/login');
    });
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout Route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth.custom', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Asdos Management
    Route::get('/asdos', [AdminController::class, 'dataAsdos'])->name('admin.asdos');
    Route::get('/asdos/create', [AdminController::class, 'createAsdos'])->name('admin.asdos.create');
    Route::post('/asdos', [AdminController::class, 'storeAsdos'])->name('admin.asdos.store');
    Route::get('/asdos/{id}/edit', [AdminController::class, 'editAsdos'])->name('admin.asdos.edit');
    Route::post('/asdos/{id}', [AdminController::class, 'updateAsdos'])->name('admin.asdos.update');
    Route::post('/asdos/{id}/delete', [AdminController::class, 'deleteAsdos'])->name('admin.asdos.delete');
    
    // Pendaftar Management
    Route::get('/pendaftar', [AdminController::class, 'dataPendaftar'])->name('admin.pendaftar');
    Route::get('/pendaftar/{id}', [AdminController::class, 'detailPendaftar'])->name('admin.pendaftar.detail');
    Route::post('/pendaftar/{id}/approve', [AdminController::class, 'approvePendaftar'])->name('admin.pendaftar.approve');
    Route::post('/pendaftar/{id}/reject', [AdminController::class, 'rejectPendaftar'])->name('admin.pendaftar.reject');
    
    // User Management
    Route::get('/users', [AdminController::class, 'dataUser'])->name('admin.users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::post('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::post('/users/{id}/delete', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
});

// Dosen Routes
Route::middleware(['auth.custom', 'role:dosen'])->prefix('dosen')->group(function () {
    Route::get('/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');
    
    // My Asdos
    Route::get('/my-asdos', [DosenController::class, 'myAsdos'])->name('dosen.my-asdos');
    Route::get('/my-asdos/{id}', [DosenController::class, 'detailAsdos'])->name('dosen.asdos.detail');
    
    // Pendaftar
    Route::get('/pendaftar', [DosenController::class, 'dataPendaftar'])->name('dosen.pendaftar');
    Route::get('/pendaftar/{id}', [DosenController::class, 'detailPendaftar'])->name('dosen.pendaftar.detail');
    Route::post('/pendaftar/{id}/komentar', [DosenController::class, 'komentarPendaftar'])->name('dosen.pendaftar.komentar');
});

// Mahasiswa Routes
Route::middleware(['auth.custom', 'role:mahasiswa'])->prefix('mahasiswa')->group(function () {
    Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');
    
    // Pendaftaran Asdos
    Route::get('/daftar', [MahasiswaController::class, 'formPendaftaran'])->name('mahasiswa.daftar');
    Route::post('/daftar', [MahasiswaController::class, 'storePendaftaran'])->name('mahasiswa.daftar.store');
    
    // Riwayat
    Route::get('/riwayat', [MahasiswaController::class, 'riwayatPendaftaran'])->name('mahasiswa.riwayat');
    Route::get('/riwayat/{id}', [MahasiswaController::class, 'detailPendaftaran'])->name('mahasiswa.riwayat.detail');
    
    // Status Asdos
    Route::get('/status-asdos', [MahasiswaController::class, 'statusAsdos'])->name('mahasiswa.status');
    
    // Profile
    Route::get('/profile', [MahasiswaController::class, 'profile'])->name('mahasiswa.profile');
    Route::post('/profile', [MahasiswaController::class, 'updateProfile'])->name('mahasiswa.profile.update');
});

Route::post('/Admin/tambahcalonAsdos', [menuController::class, 'tambahCalonAsdos']);
Route::get('/Admin/editcalonAsdos', [menuController::class, 'editCalonAsdos']);
Route::post('/Admin/editcalonAsdos', [menuController::class, 'editCalonAsdos']);
Route::get('/Admin/kelolaJadwal', [menuController::class, 'kelolaJadwal']);
Route::post('/Admin/kelolaJadwal', [menuController::class, 'kelolaJadwal']);
Route::get('/Admin/detail', [menuController::class, 'detailAsdos']);
Route::get('/Admin/laporan', [menuController::class, 'laporan']);
Route::post('/Admin/laporan', [menuController::class, 'laporan']);

Route::get('/Admin/tambah', [menuController::class, 'tambahData']);
Route::get('/Admin/Hapus', [menuController::class, 'hapusData']);
Route::get('/Admin/edit', [menuController::class, 'editData']);
Route::get('/Admin/detail', [menuController::class, 'detailData']);

Route::get('/Admin/lihatJadwal', [menuController::class, 'lihatJadwal']);
Route::get('/Admin/hapusJadwal', [menuController::class, 'hapusJadwal']);
Route::get('/Admin/editJadwal', [menuController::class, 'editJadwal']);
Route::get('/Admin/tambahJadwal', [menuController::class, 'tambahJadwal']);

Route::get('/Admin/tambahLaporan', [menuController::class, 'tambahLaporan']);
Route::get('/Admin/editLaporan', [menuController::class, 'editLaporan']);
Route::get('/Admin/hapusLaporan', [menuController::class, 'hapusLaporan']);
// Route::get('/Admin/Laporan', [menuController::class, 'Laporan']);

// Route::get('/jadwalMhs', [menuController::class, 'jadwalMhs']);
// Route::get('/jadwalMhs/uploadDocs', [menuController::class, 'uploadDocs']);
// Route::get('/jadwalMhs/status', [menuController::class, 'cekStatus']);
// Route::post('/jadwalMhs/status', [menuController::class, 'kirimStatus']);

// Route::get('/jadwalMhs', function () {
//     return view('Mahasiswa/jadwalMhs');
// });
// Route::post('/jadwalMhs', function () {
//     return view('Mahasiswa/jadwalMhs');
// });
// Route::get('/jadwalMhs/uploadDocs', function () {
//     return view('Mahasiswa/uploadDocs');
// });

// Route::get('/jadwalMhs/status', function () {
//     return view('Mahasiswa/statusSeleksi');
// });

// Route::post('/jadwalMhs/status', function () {
//     return view('Mahasiswa/statusSeleksi');
// });






