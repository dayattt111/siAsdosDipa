<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        $user = session('user');
        
        // Data statistik (dummy)
        $stats = [
            'pendaftaran' => 3,
            'terpilih' => 1,
            'belum_diproses' => 2
        ];

        return view('Mahasiswa.dashboard', [
            'user' => $user,
            'stats' => $stats
        ]);
    }
}
