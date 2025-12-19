@extends('Mahasiswa.layout')

@section('title', 'Registrasi Mahasiswa')
@section('page_title', 'Registrasi Mahasiswa Baru')

@section('content')
<div class="card" style="max-width:600px">
  <h2 style="margin-top:0;margin-bottom:20px;color:#111">Formulir Registrasi Mahasiswa</h2>
  
  <div style="background:#eff6ff;padding:12px 15px;border-radius:6px;margin-bottom:20px;border-left:4px solid #2563eb;font-size:13px;color:#1e40af">
    <p style="margin:0">Lengkapi semua data di bawah ini dengan benar untuk menyelesaikan proses registrasi.</p>
  </div>

  @if ($errors->any())
    <div style="background:#fee2e2;color:#991b1b;padding:12px 15px;border-radius:6px;margin-bottom:15px;border-left:4px solid #dc2626">
      <p style="margin:0 0 8px;font-weight:600;font-size:13px">Data tidak valid:</p>
      @foreach ($errors->all() as $error)
        <p style="margin:0 0 4px;font-size:12px">• {{ $error }}</p>
      @endforeach
    </div>
  @endif

  <form method="POST" action="/register" enctype="multipart/form-data">
    @csrf

    <div style="background:#f9fafb;padding:12px 15px;border-radius:6px;margin-bottom:20px;border-left:3px solid #6b7280">
      <p style="margin:0 0 15px;font-size:12px;color:#666;font-weight:600;text-transform:uppercase">Data Pribadi</p>
      
      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Nama Lengkap <span style="color:#dc2626">*</span></label>
        <input type="text" name="nama_user" value="{{ old('nama_user') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('nama_user')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">NIM (Nomor Induk Mahasiswa) <span style="color:#dc2626">*</span></label>
        <input type="text" name="nim" value="{{ old('nim') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('nim')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Email <span style="color:#dc2626">*</span></label>
        <input type="email" name="email" value="{{ old('email') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('email')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">No. Telepon/HP <span style="color:#dc2626">*</span></label>
        <input type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="08XXXXXXXXXX" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('no_hp')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
      </div>
    </div>

    <div style="background:#f9fafb;padding:12px 15px;border-radius:6px;margin-bottom:20px;border-left:3px solid #6b7280">
      <p style="margin:0 0 15px;font-size:12px;color:#666;font-weight:600;text-transform:uppercase">Akun & Keamanan</p>
      
      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Username <span style="color:#dc2626">*</span></label>
        <input type="text" name="username" value="{{ old('username') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('username')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
        <p style="margin:4px 0 0;font-size:12px;color:#666">Gunakan huruf, angka, dan underscore (_)</p>
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Password <span style="color:#dc2626">*</span></label>
        <input type="password" name="password" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('password')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
        <p style="margin:4px 0 0;font-size:12px;color:#666">Minimal 8 karakter, kombinasi huruf, angka, dan simbol</p>
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Konfirmasi Password <span style="color:#dc2626">*</span></label>
        <input type="password" name="password_confirmation" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('password_confirmation')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
      </div>
    </div>

    <div style="background:#f9fafb;padding:12px 15px;border-radius:6px;margin-bottom:20px;border-left:3px solid #6b7280">
      <p style="margin:0 0 15px;font-size:12px;color:#666;font-weight:600;text-transform:uppercase">Dokumen</p>
      
      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Foto Diri (3x4) <span style="color:#dc2626">*</span></label>
        <input type="file" name="gambar" accept="image/*" style="width:100%;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        @error('gambar')<span style="color:#dc2626;font-size:12px;margin-top:3px;display:block">{{ $message }}</span>@enderror
        <p style="margin:4px 0 0;font-size:12px;color:#666">Format: JPG, PNG (Max 2MB)</p>
      </div>
    </div>

    <div style="display:flex;gap:10px;margin-bottom:15px">
      <button type="submit" style="flex:1;padding:12px 20px;background:#2563eb;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600;font-size:14px;transition:background 0.2s">Daftar</button>
      <a href="/" style="flex:1;padding:12px 20px;background:#6b7280;color:#fff;border-radius:6px;text-decoration:none;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:14px">Batal</a>
    </div>

    <div style="text-align:center;padding-top:15px;border-top:1px solid #e5e7eb">
      <p style="margin:0;font-size:13px;color:#666">Sudah punya akun? <a href="/login" style="color:#2563eb;text-decoration:none;font-weight:600">Masuk di sini</a></p>
    </div>
  </form>
</div>
@endsection
