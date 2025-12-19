<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Edit Profil</title>
  <style>
    html,body{height:100%;margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
    .wrap {
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      background:#f5f7fa;
      padding:20px;
    }
    .card {
      width:100%;
      max-width:420px;
      background:#fff;
      border-radius:8px;
      box-shadow:0 6px 18px rgba(0,0,0,0.08);
      padding:28px;
      box-sizing:border-box;
    }
    h1{margin:0 0 14px;font-size:20px;color:#111}
    .desc{margin:0 0 18px;color:#666;font-size:14px}
    label{display:block;font-size:13px;color:#333;margin-bottom:6px}
    input[type="text"], input[type="email"], input[type="password"]{
      width:100%;
      padding:10px 12px;
      border:1px solid #d7dbe0;
      border-radius:6px;
      box-sizing:border-box;
      margin-bottom:12px;
      font-size:14px;
    }
    .info{background:#f0f4f8;padding:10px 12px;border-radius:6px;margin-bottom:12px;font-size:13px;color:#444}
    .btn {
      width:100%;
      padding:10px 12px;
      border:0;
      border-radius:6px;
      background:#2563eb;
      color:#fff;
      font-weight:600;
      cursor:pointer;
      font-size:14px;
      margin-top:6px;
    }
    .btn:hover{background:#1d4ed8}
    .btn-secondary{background:#6b7280}
    .btn-secondary:hover{background:#4b5563}
    .btn-group{display:flex;gap:8px}
    .btn-group button{flex:1}
    .link{text-align:center;margin-top:12px;font-size:13px;}
    .link a{color:#2563eb;text-decoration:none}
    .alert{padding:12px;border-radius:6px;margin-bottom:12px;font-size:13px}
    .alert-success{background:#efe;color:#3c3}
    .error{color:#dc2626;font-size:12px;margin-top:-8px;margin-bottom:8px}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Edit Profil</h1>
      <p class="desc">Perbarui data profil anda</p>

      @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
        </div>
      @endif

      <form action="/profile" method="POST">
        @csrf

        <div class="info">
          <strong>Username:</strong> {{ $user->username }}<br>
          <strong>NIM:</strong> {{ $user->nim }}<br>
          <strong>Role:</strong> {{ $user->role }}
        </div>

        <label for="nama_user">Nama Lengkap</label>
        <input type="text" id="nama_user" name="nama_user" value="{{ old('nama_user', $user->nama_user) }}" required>
        @error('nama_user') <div class="error">{{ $message }}</div> @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label for="no_hp">No. HP</label>
        <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" required>
        @error('no_hp') <div class="error">{{ $message }}</div> @enderror

        <label for="password">Password Baru (Kosongkan jika tidak ingin mengubah)</label>
        <input type="password" id="password" name="password">
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

        <div class="btn-group">
          <button type="submit" class="btn">Simpan</button>
          <a href="/Dosen" style="text-decoration:none"><button type="button" class="btn btn-secondary">Kembali</button></a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
