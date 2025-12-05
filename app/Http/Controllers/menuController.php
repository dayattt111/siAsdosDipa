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
    public function DosenDetailAsdos(){
        return view('Dosen/detailAsdos');
    }  
    // public function daftarAsdos(){
    //     return view('Dosen/daftarAsdos');
    // }  
    public function semuaAsdos(){
        return view('Dosen/semuaAsdos');
    }  
    public function daftarCalonAsdos(){
        return view('Dosen/cekCalonAsdos');
    }  
    public function detailCalonAsdos(){
        return view('Dosen/detail');
    }  
    public function semuaCalonAsdos(){
        return view('Dosen/semuaCalonAsdos');
    }  
    public function komentarDosen(){
        return view('Dosen/komentar');
    }  
    public function kirimKomentarDosen(){
        return view('Dosen/cekCalonAsdos');
    }  

    //Admin
    public function indexAdmin(){
        return view('Admin/dataPengguna');
    }
    public function dataAsdos(){
        return view('Admin/dataAsdos');
    }
    public function tambahAsdos(){
            return view('Admin/crudDataPengguna/tambahAsdos');
    }
    public function editAsdos(){
        return view('Admin/crudDataPengguna/editAsdos');
    }
    public function dataCalonAsdos(){
        return view('Admin/dataCalonAsdos');
    }
    public function tambahCalonAsdos(){
        return view('Admin/crudDataPengguna/tambahCalonAsdos');
    }
    public function editCalonAsdos(){
        return view('Admin/crudDataPengguna/editCalonAsdos');
    }
    public function laporan(){
        return view('Admin/laporan');
    }
    public function detailAsdos(){
        return view('Admin/detail');
    }
    public function kelolaJadwal(){
        return view('Admin/jadwal');
    }
    public function tambahData(){
        return view('Admin/crudDataPengguna/tambah');
    }
    public function detailData(){
        return view('Admin/crudDataPengguna/detail');
    }
    public function hapusData(){
        return view('Admin/crudDataPengguna/hapus');
    }
    public function editData(){
        return view('Admin/crudDataPengguna/edit');
    }
    public function lihatJadwal(){
        return view('Admin/crudDataPengguna/lihatJadwal');
    }
    public function hapusJadwal(){
        return view('Admin/crudDataPengguna/hapusJadwal');
    }
    public function editJadwal(){
        return view('Admin/crudDataPengguna/editJadwal');
    }
    public function tambahJadwal(){
        return view('Admin/crudDataPengguna/tambahJadwal');
    }
    public function tambahLaporan(){
        return view('Admin/crudDataPengguna/tambahLaporan');
    }
    public function editLaporan(){
        return view('Admin/crudDataPengguna/editLaporan');
    }
    public function hapusLaporan(){
        return view('Admin/crudDataPengguna/hapusLaporan');
    }
}
