<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;

// login and regist
Route::get('/', [menuController::class, 'index']);
Route::get('/register', [menuController::class, 'register']);
Route::post('/logout', [menuController::class, 'logout']);
Route::post('/login', [userController::class, 'auth']);

// mahasswa
Route::post('/jadwalMhs', [menuController::class, 'sendJadwalMhs']);
Route::get('/jadwalMhs', [menuController::class, 'jadwalMhs']);
Route::get('/jadwalMhs/uploadDocs', [menuController::class, 'uploadDocs']);
Route::get('/jadwalMhs/status', [menuController::class, 'cekStatus']);
Route::post('/jadwalMhs/status', [menuController::class, 'kirimStatus']);

// Dosen
Route::post('/Dosen', [menuController::class, 'indexDosen']);
Route::get('/Dosen', [menuController::class, 'indexDosen']);
Route::get('/Dosen/cekAsdos', [menuController::class, 'daftarAsdos']);
Route::get('/Dosen/detailAsdos', [menuController::class, 'DosenDetailAsdos']);
Route::post('/Dosen/detailAsdos', [menuController::class, 'DosenDetailAsdos']);
Route::get('/Dosen/semuaAsdos', [menuController::class, 'semuaAsdos']);
Route::get('/Dosen/cekCalonAsdos', [menuController::class, 'daftarCalonAsdos']);
Route::post('/Dosen/cekCalonAsdos', [menuController::class, 'daftarCalonAsdos']);
Route::get('/Dosen/detail', [menuController::class, 'detailCalonAsdos']);
Route::post('/Dosen/detail', [menuController::class, 'detailCalonAsdos']);
Route::get('/Dosen/semuaCalonAsdos', [menuController::class, 'semuaCalonAsdos']);
Route::get('/Dosen/komentar', [menuController::class, 'komentarDosen']);
Route::post('/Dosen/kirimKomentar', [menuController::class, 'kirimKomentarDosen']);

// Admin
Route::post('/adminAsdos', [menuController::class,'indexAdmin']);
Route::get('/adminAsdos', [menuController::class,'indexAdmin']);
Route::get('Admin/Asdos', [menuController::class,'dataAsdos']);
Route::post('/Admin/Asdos', [menuController::class,'dataAsdos']);
Route::post('/Admin/TambahAsdos', [menuController::class, 'tambahAsdos']);
Route::get('/Admin/TambahAsdos', [menuController::class, 'tambahAsdos']);
Route::post('/Admin/editAsdos', [menuController::class, 'editAsdos']);
Route::get('/Admin/editAsdos', [menuController::class, 'editAsdos']);
Route::get('/Admin/calonAsdos', [menuController::class, 'dataCalonAsdos']);
Route::post('/Admin/calonAsdos', [menuController::class, 'dataCalonAsdos']);
Route::get('/Admin/tambahcalonAsdos', [menuController::class, 'tambahCalonAsdos']);
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






