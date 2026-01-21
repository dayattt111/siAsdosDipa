@extends('Mahasiswa.layout')

@section('title', 'Dashboard Mahasiswa')
@section('page_title', 'Dashboard')

@section('content')
{{-- <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px;">
  <!-- Card Pendaftaran -->
  <div class="card" style="border-left: 4px solid #3b82f6; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
      <div>
        <p style="color: #777; font-size: 13px; margin-bottom: 8px; font-weight: 500;">PENDAFTARAN ASDOS</p>
        <h3 style="font-size: 28px; color: #222; margin: 0;">{{ $stats['pendaftaran'] ?? 0 }}</h3>
        <p style="color: #999; font-size: 12px; margin-top: 4px;">Total pendaftaran</p>
      </div>
      <span style="font-size: 32px;">📝</span>
    </div>
  </div>

  <!-- Card Terpilih -->
  <div class="card" style="border-left: 4px solid #10b981; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
      <div>
        <p style="color: #777; font-size: 13px; margin-bottom: 8px; font-weight: 500;">TERPILIH</p>
        <h3 style="font-size: 28px; color: #222; margin: 0;">{{ $stats['terpilih'] ?? 0 }}</h3>
        <p style="color: #999; font-size: 12px; margin-top: 4px;">Sudah disetujui</p>
      </div>
      <span style="font-size: 32px;">✅</span>
    </div>
  </div>

  <!-- Card Belum Diproses -->
  <div class="card" style="border-left: 4px solid #f59e0b; cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
      <div>
        <p style="color: #777; font-size: 13px; margin-bottom: 8px; font-weight: 500;">BELUM DIPROSES</p>
        <h3 style="font-size: 28px; color: #222; margin: 0;">{{ $stats['belum_diproses'] ?? 0 }}</h3>
        <p style="color: #999; font-size: 12px; margin-top: 4px;">Menunggu keputusan</p>
      </div>
      <span style="font-size: 32px;">⏳</span>
    </div>
  </div>
</div> --}}

<!-- Info Section -->
<div class="card">
  <h3 style="margin-bottom: 16px; color: #222;">Informasi Akun</h3>
  <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; font-size: 13px;">
    <div style="padding: 12px; background: #f9fafb; border-radius: 6px;">
      <p style="color: #777; margin: 0 0 4px;">Nama Lengkap</p>
      <p style="color: #222; margin: 0; font-weight: 600;">{{ $user->nama_user ?? '-' }}</p>
    </div>
    <div style="padding: 12px; background: #f9fafb; border-radius: 6px;">
      <p style="color: #777; margin: 0 0 4px;">NIM</p>
      <p style="color: #222; margin: 0; font-weight: 600;">{{ $user->nim ?? '-' }}</p>
    </div>
    <div style="padding: 12px; background: #f9fafb; border-radius: 6px;">
      <p style="color: #777; margin: 0 0 4px;">Email</p>
      <p style="color: #222; margin: 0; font-weight: 600;">{{ $user->email ?? '-' }}</p>
    </div>
    <div style="padding: 12px; background: #f9fafb; border-radius: 6px;">
      <p style="color: #777; margin: 0 0 4px;">No. HP</p>
      <p style="color: #222; margin: 0; font-weight: 600;">{{ $user->no_hp ?? '-' }}</p>
    </div>
  </div>
  {{-- <div style="margin-top: 16px;">
    <a href="{{ route('mahasiswa.profile') }}" class="btn">Edit Profile</a>
  </div> --}}
</div>

<!-- Quick Action -->
<div style="margin-top: 20px;">
  <div class="card">
    <h3 style="margin-bottom: 16px; color: #222;">Aksi Cepat</h3>
    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
      <a href="/mahasiswa/daftar-asdos" class="btn" style="background: #3b82f6;">Daftar Asdos</a>
      <a href="/mahasiswa/jadwalMhs" class="btn" style="background: #8b5cf6;">Lihat Jadwal</a>
      <a href="/mahasiswa/riwayat" class="btn" style="background: #06b6d4;">Riwayat Pendaftaran</a>
    </div>
  </div>
</div>

@endsection
