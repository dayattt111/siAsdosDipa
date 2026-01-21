@extends('Dosen.layout')

@section('content')
        <div class="stats">
            <div class="stat-card">
                <h3>Total Asdos Saya</h3>
                <div class="number">{{ $totalAsdos }}</div>
            </div>
            <div class="stat-card">
                <h3>Pendaftar Baru</h3>
                <div class="number">{{ $pendaftarBaru }}</div>
            </div>
        </div>

        <h2 style="margin-bottom: 20px;">Menu Dosen</h2>
        <div class="menu-grid">
            <a href="/dosen/my-asdos" class="menu-card">
                <h3>📋 Asdos Saya</h3>
                <p>Lihat daftar asdos yang saya bimbing</p>
            </a>
            <a href="/dosen/pendaftar" class="menu-card">
                <h3>👥 Pendaftar Asdos</h3>
                <p>Lihat dan beri komentar pada pendaftar</p>
            </a>
        </div>
@endsection
