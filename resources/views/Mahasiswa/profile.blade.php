@extends('Mahasiswa.layout')

@section('title', 'Edit Profile')
@section('page_title', 'Edit Profile')

@section('content')
<div class="card" style="max-width:500px">
  <h2 style="margin:0 0 20px;color:#111">Edit Profil</h2>

  <form method="POST" action="{{ route('mahasiswa.profile.update') }}" enctype="multipart/form-data">
    @csrf

    <div style="margin-bottom:20px;padding:15px;background:#f3f4f6;border-radius:6px">
      <p style="margin:0 0 10px;font-size:12px;color:#666;font-weight:600">INFORMASI AKUN</p>
      <div style="font-size:14px;color:#333;line-height:1.8">
        <div><strong>Username:</strong> {{ $user->username }}</div>
        <div><strong>NIM:</strong> {{ $user->nim }}</div>
        <div><strong>Role:</strong> Mahasiswa</div>
      </div>
    </div>

    @php
      $fotoUrl = null;
      if (!empty($user->gambar) && $user->gambar !== 'default.jpg') {
        $fotoUrl = asset('storage/profil/' . $user->gambar);
      }
      if (!$fotoUrl) {
        $fotoUrl = 'https://via.placeholder.com/80x100?text=Foto';
      }
    @endphp

    <div style="margin-bottom:20px;padding:15px;background:#f9fafb;border-radius:6px;border:1px solid #e5e7eb">
      <p style="margin:0 0 10px;font-size:12px;color:#666;font-weight:600">FOTO PROFIL</p>
      <div style="display:flex;align-items:flex-start;gap:15px">
        <div>
          <img src="{{ $fotoUrl }}" alt="Foto Profil" style="width:80px;height:100px;object-fit:cover;border-radius:6px;border:1px solid #ddd;display:block" onerror="this.onerror=null;this.src='https://via.placeholder.com/80x100?text=Foto';">
        </div>
        <div style="flex:1">
          <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Ganti Foto (3x4)</label>
          <input type="file" name="gambar" accept="image/*" style="width:100%;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:13px;box-sizing:border-box">
          <p style="margin:6px 0 0;font-size:12px;color:#666">Format: JPG, PNG (Max 2MB)</p>
          @error('gambar')<span style="color:#dc2626;font-size:12px;display:block;margin-top:3px">{{ $message }}</span>@enderror
        </div>
      </div>
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Nama Lengkap</label>
      <input type="text" name="nama_user" value="{{ old('nama_user', $user->nama_user) }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
      @error('nama_user')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Email</label>
      <input type="email" name="email" value="{{ old('email', $user->email) }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
      @error('email')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">No. HP</label>
      <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
      @error('no_hp')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px;padding-top:20px;border-top:1px solid #e5e7eb">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Password Baru (Kosongkan jika tidak mengubah)</label>
      <input type="password" name="password" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box">
      @error('password')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Konfirmasi Password</label>
      <input type="password" name="password_confirmation" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box">
    </div>

    <div style="display:flex;gap:10px">
      <button type="submit" style="padding:10px 20px;background:#2563eb;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600">Simpan</button>
      <a href="/jadwalMhs" style="padding:10px 20px;background:#6b7280;color:#fff;border-radius:6px;text-decoration:none;display:inline-flex;align-items:center">Kembali</a>
    </div>
  </form>
</div>
@endsection
