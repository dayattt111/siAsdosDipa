<!-- resources/views/auth/register.blade.php -->
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    input.form-control{
      font-size:14px;
      border-radius:6px;
      margin-bottom:12px;
    }
    .btn-primary{
      width:100%;
      font-weight:600;
      padding:10px 12px;
      border-radius:6px;
    }
    .help {font-size:13px;color:#6b7280;text-align:center;margin-top:12px;}
    a.link{color:#2563eb;text-decoration:none;}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <center><h1>Register</h1></center>
      {{-- <p class="desc">Silakan buat akun baru untuk melanjutkan.</p> --}}

      <form method="POST" action="/jadwalMhs">
      {{-- <form method="POST" action="/daftarAsdos"> --}}
      {{-- <form method="POST" action="/adminAsdos"> --}}
        @csrf

        <div class="mb-3">
          <label for="name">Nim</label>
          <input id="name" type="text" name="nim" class="form-control">
        </div>

        <div class="mb-3">
          <label for="name">Nama Lengkap</label>
          <input id="name" type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">No Hp</label>
          <input id="" type="text" name="" class="form-control">
        </div>

        <div class="mb-3">
          <label for="">Upload Foto <i>(ukuran 4*3)</i></label>
          <input id="image" type="file" name="image" class="form-control" accept="image/*">

        </div>

        
        <div class="mb-3">
          <label for="password">Kata Sandi</label>
          <input id="password" type="password" name="password" class="form-control">
        </div>


        <div class="mb-3">
          <label for="password_confirmation">Konfirmasi Kata Sandi</label>
          <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
        </div>

        <button class="btn btn-primary" type="submit">Daftar</button>
      </form>

      <p class="help">Sudah punya akun? <a class="link" href="/">Login</a></p>
    </div>
  </div>
</body>
</html>
