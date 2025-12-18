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

        if(!session()->has('user_id') || session('user_role') !== 'mahasiswa') {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/jadwalMhs');
    }  
    public function sendJadwalMhs(){
        if(!session()->has('user_id') || session('user_role') !== 'mahasiswa') {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/jadwalMhs');
    }  
    public function uploadDocs(){
        if(!session()->has('user_id') || session('user_role') !== 'mahasiswa') {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/uploadDocs');
    }  
    public function cekStatus(){
        if(!session()->has('user_id') || session('user_role') !== 'mahasiswa') {
            return redirect('/')->with('error', 'Anda harus login sebagai mahasiswa untuk mengakses halaman ini.');
        }
        return view('Mahasiswa/statusSeleksi');
    }  
    public function kirimStatus(){
        if(!session()->has('user_id') || session('user_role') !== 'mahasiswa') {
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
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/daftarAsdos');
    }  
    public function DosenDetailAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/detailAsdos');
    }  
    // public function daftarAsdos(){
    //     return view('Dosen/daftarAsdos');
    // }  
    public function semuaAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/semuaAsdos');
    }  
    public function daftarCalonAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/cekCalonAsdos');
    }  
    public function detailCalonAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/detail');
    }  
    public function semuaCalonAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/semuaCalonAsdos');
    }  
    public function komentarDosen(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/komentar');
    }  
    public function kirimKomentarDosen(){
        if(!session()->has('user_id') || session('user_role') !== 'dosen') {
            return redirect('/')->with('error', 'Anda harus login sebagai dosen untuk mengakses halaman ini.');
        }
        return view('Dosen/cekCalonAsdos');
    }  

    //Admin
    public function indexAdmin(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/dataPengguna');
    }
    public function dataAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/dataAsdos');
    }
    public function tambahAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
            return view('Admin/crudDataPengguna/tambahAsdos');
    }
    public function editAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editAsdos');
    }
    public function dataCalonAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/dataCalonAsdos');
    }
    public function tambahCalonAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahCalonAsdos');
    }
    public function editCalonAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editCalonAsdos');
    }
    public function laporan(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/laporan');
    }
    public function detailAsdos(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/detail');
    }
    public function kelolaJadwal(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/jadwal');
    }
    public function tambahData(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambah');
    }
    public function detailData(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/detail');
    }
    public function hapusData(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/hapus');
    }
    public function editData(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/edit');
    }
    public function lihatJadwal(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/lihatJadwal');
    }
    public function hapusJadwal(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/hapusJadwal');
    }
    public function editJadwal(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editJadwal');
    }
    public function tambahJadwal(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahJadwal');
    }
    public function tambahLaporan(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/tambahLaporan');
    }
    public function editLaporan(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/editLaporan');
    }
    public function hapusLaporan(){
        if(!session()->has('user_id') || session('user_role') !== 'admin') {
            return redirect('/')->with('error', 'Anda harus login sebagai admin untuk mengakses halaman ini.');
        }
        return view('Admin/crudDataPengguna/hapusLaporan');
    }
}
