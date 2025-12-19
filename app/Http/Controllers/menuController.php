<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    // login & register
    public function index(){
        return view('login');
    }
    public function register(){
        return view('Mahasiswa/register');
    }
    public function logout(){
        session()->flush();
        return redirect('/login')->with('success', 'Berhasil logout!');
    }

    // LoginMhs

    // mahasiswa
    public function jadwalMhs(){
        if (!$this->checkRole('mahasiswa')) {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/jadwalMhs');
    }  
    public function sendJadwalMhs(){
        if (!$this->checkRole('mahasiswa')) {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/jadwalMhs');
    }  
    public function uploadDocs(){
        if (!$this->checkRole('mahasiswa')) {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/uploadDocs');
    }  
    public function cekStatus(){
        if (!$this->checkRole('mahasiswa')) {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/statusSeleksi');
    }  
    public function kirimStatus(){
        if (!$this->checkRole('mahasiswa')) {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/statusSeleksi');
    }  


    // Dosen
    public function indexDosen(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/daftarAsdos');
    }
    public function daftarAsdos(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/daftarAsdos');
    }  
    public function DosenDetailAsdos(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/detailAsdos');
    }  
    // public function daftarAsdos(){
    //     return view('Dosen/daftarAsdos');
    // }  
    public function semuaAsdos(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/semuaAsdos');
    }  
    public function daftarCalonAsdos(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/cekCalonAsdos');
    }  
    public function detailCalonAsdos(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/detail');
    }  
    public function semuaCalonAsdos(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/semuaCalonAsdos');
    }  
    public function komentarDosen(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/komentar');
    }  
    public function kirimKomentarDosen(){
        if (!$this->checkRole('dosen')) {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/cekCalonAsdos');
    }  

    //Admin
    public function indexAdmin(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/dataPengguna');
    }
    public function dataAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/dataAsdos');
    }
    public function tambahAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahAsdos');
    }
    public function editAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editAsdos');
    }
    public function dataCalonAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/dataCalonAsdos');
    }
    public function tambahCalonAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahCalonAsdos');
    }
    public function editCalonAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editCalonAsdos');
    }
    public function laporan(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/laporan');
    }
    public function detailAsdos(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/detail');
    }
    public function kelolaJadwal(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/jadwal');
    }
    public function tambahData(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambah');
    }
    public function detailData(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/detail');
    }
    public function hapusData(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/hapus');
    }
    public function editData(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/edit');
    }
    public function lihatJadwal(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/lihatJadwal');
    }
    public function hapusJadwal(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/hapusJadwal');
    }
    public function editJadwal(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editJadwal');
    }
    public function tambahJadwal(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahJadwal');
    }
    public function tambahLaporan(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahLaporan');
    }
    public function editLaporan(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editLaporan');
    }
    public function hapusLaporan(){
        if (!$this->checkRole('admin')) {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/hapusLaporan');
    }
}
