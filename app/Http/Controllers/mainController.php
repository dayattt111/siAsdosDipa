<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    // login & register
    public function index(){
        return view('welcome');
    }
    public function register(){
        return view('Mahasiswa/register');
    }
    public function logout(){
        return view('/');
    }

    // LoginMhs

    // mahasiswa
    public function jadwalMhs(){
        return view('Mahasiswa/jadwalMhs');
    }  
    public function sendJadwalMhs(){
        return view('Mahasiswa/jadwalMhs');
    }  
    public function uploadDocs(){
        return view('Mahasiswa/uploadDocs');
    }  
    public function cekStatus(){
        return view('Mahasiswa/statusSeleksi');
    }  
    public function kirimStatus(){
        return view('Mahasiswa/statusSeleksi');
    }  


    // Dosen
    public function indexDosen(){
        return view('Dosen/daftarAsdos');
    }
    public function daftarAsdos(){
        return view('Dosen/daftarAsdos');
    }  
    public function daftarCalonAsdos(){
        return view('Dosen/cekCalonAsdos');
    }  
    public function komentarDosen(){
        return view('Dosen/komentar');
    }  
    public function kirimKomentarDosen(){
        return view('Dosen/cekCalonAsdos');
    }  
}
