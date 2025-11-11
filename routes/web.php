<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('Mahasiswa/register');
});

Route::get('/jadwalMhs', function () {
    return view('Mahasiswa/jadwalMhs');
});
Route::post('/jadwalMhs', function () {
    return view('Mahasiswa/jadwalMhs');
});
Route::get('/jadwalMhs/uploadDocs', function () {
    return view('Mahasiswa/uploadDocs');
});

Route::get('/jadwalMhs/status', function () {
    return view('Mahasiswa/statusSeleksi');
});

Route::post('/jadwalMhs/status', function () {
    return view('Mahasiswa/statusSeleksi');
});



