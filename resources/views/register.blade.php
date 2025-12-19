<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Daftar</title>
  <style>
    html,body{height:100%;margin:0;font-family:Arial,sans-serif}
    .wrap{min-height:100vh;display:flex;align-items:center;justify-content:center;background:#f5f7fa;padding:20px}
    .card{width:100%;max-width:420px;background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.1);padding:30px}
    h1{margin:0 0 10px;font-size:24px;color:#111}
    .desc{margin:0 0 20px;color:#666;font-size:14px}
    label{display:block;font-size:13px;font-weight:600;color:#333;margin:15px 0 5px}
    input,select{width:100%;padding:10px;border:1px solid #ddd;border-radius:5px;font-size:14px;box-sizing:border-box}
    input:focus,select:focus{outline:none;border-color:#2563eb;box-shadow:0 0 0 3px rgba(37,99,235,0.1)}
    .btn{width:100%;padding:12px;margin-top:20px;border:none;border-radius:5px;background:#2563eb;color:#fff;font-weight:600;cursor:pointer;font-size:14px}
    .btn:hover{background:#1d4ed8}
    .link{text-align:center;margin-top:15px;font-size:14px}
    .link a{color:#2563eb;text-decoration:none}
    .alert{padding:12px;border-radius:5px;margin-bottom:15px;font-size:13px}
    .alert-danger{background:#fee;color:#c33}
    .error{color:#dc2626;font-size:12px;margin-top:3px}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Daftar Akun</h1>
      <p class="desc">Buat akun baru</p>

      @if ($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>
      @endif

      <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Lengkap</label>
        <input type="text" name="nama_user" value="{{ old('nama_user') }}" required>
        @error('nama_user')<div class="error">{{ $message }}</div>@enderror

        <label>Username</label>
        <input type="text" name="username" value="{{ old('username') }}" required>
        @error('username')<div class="error">{{ $message }}</div>@enderror

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')<div class="error">{{ $message }}</div>@enderror

        <label>NIM</label>
        <input type="text" name="nim" value="{{ old('nim') }}" required>
        @error('nim')<div class="error">{{ $message }}</div>@enderror

        <label>No. HP</label>
        <input type="text" name="no_hp" value="{{ old('no_hp') }}" required>
        @error('no_hp')<div class="error">{{ $message }}</div>@enderror

        <label>Foto (3x4)</label>
        <input type="file" name="gambar" accept="image/*">
        @error('gambar')<div class="error">{{ $message }}</div>@enderror

        <label>Password</label>
        <input type="password" name="password" required>
        @error('password')<div class="error">{{ $message }}</div>@enderror

        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn">Daftar</button>
      </form>

      <div class="link">
        Sudah punya akun? <a href="/login">Login</a>
      </div>
    </div>
  </div>
</body>
</html>
