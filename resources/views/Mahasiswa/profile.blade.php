@extends('Mahasiswa.layout')

@section('title', 'Edit Profile')
@section('page_title', 'Edit Profile')

@section('content')
<div class="card" style="max-width:500px">
  <h2 style="margin:0 0 20px;color:#111">Edit Profil</h2>

  <form method="POST" action="/profile" enctype="multipart/form-data">
    @csrf

    <div style="margin-bottom:20px;padding:15px;background:#f3f4f6;border-radius:6px">
      <p style="margin:0 0 10px;font-size:12px;color:#666;font-weight:600">INFORMASI AKUN</p>
      <div style="font-size:14px;color:#333;line-height:1.8">
        <div><strong>Username:</strong> {{ $user->username }}</div>
        <div><strong>NIM:</strong> {{ $user->nim }}</div>
        <div><strong>Role:</strong> Mahasiswa</div>
      </div>
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Nama Lengkap</label>
      <input type="text" name="nama_user" value="{{ old('nama_user', $user->nama_user) }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px" required>
      @error('nama_user')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Email</label>
      <input type="email" name="email" value="{{ old('email', $user->email) }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px" required>
      @error('email')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">No. HP</label>
      <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px" required>
      @error('no_hp')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px;padding-top:20px;border-top:1px solid #e5e7eb">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Password Baru (Kosongkan jika tidak mengubah)</label>
      <input type="password" name="password" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px">
      @error('password')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Konfirmasi Password</label>
      <input type="password" name="password_confirmation" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px">
    </div>

    <div style="display:flex;gap:10px">
      <button type="submit" style="padding:10px 20px;background:#2563eb;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600">Simpan</button>
      <a href="/jadwalMhs" style="padding:10px 20px;background:#6b7280;color:#fff;border-radius:6px;text-decoration:none;display:inline-flex;align-items:center">Kembali</a>
    </div>
  </form>
</div>
@endsection
