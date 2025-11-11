<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

// login and regist
Route::get('/', [mainController::class, 'index']);
Route::get('/register', [mainController::class, 'register']);
Route::post('/logout', [mainController::class, 'logout']);

// mahasswa
Route::post('/jadwalMhs', [mainController::class, 'sendJadwalMhs']);
Route::get('/jadwalMhs', [mainController::class, 'jadwalMhs']);
Route::get('/jadwalMhs/uploadDocs', [mainController::class, 'uploadDocs']);
Route::get('/jadwalMhs/status', [mainController::class, 'cekStatus']);
Route::post('/jadwalMhs/status', [mainController::class, 'kirimStatus']);

// Dosen
Route::post('/daftarAsdos', [mainController::class, 'indexDosen']);
Route::get('/Dosen/cekAsdos', [mainController::class, 'daftarAsdos']);
Route::get('/Dosen/cekCalonAsdos', [mainController::class, 'daftarCalonAsdos']);
Route::get('/Dosen/komentar', [mainController::class, 'komentarDosen']);
Route::post('/Dosen/kirimKomentar', [mainController::class, 'kirimKomentarDosen']);

// Admin
Route::post('/adminAsdos', [mainController::class, 'indexAdmin']);



// Route::get('/jadwalMhs', [mainController::class, 'jadwalMhs']);
// Route::get('/jadwalMhs/uploadDocs', [mainController::class, 'uploadDocs']);
// Route::get('/jadwalMhs/status', [mainController::class, 'cekStatus']);
// Route::post('/jadwalMhs/status', [mainController::class, 'kirimStatus']);

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






