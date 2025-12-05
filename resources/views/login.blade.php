<!-- resources/views/auth/login.blade.php -->
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <style>
    /* Center both vertically & horizontally */
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
    input[type="email"], input[type="password"]{
      width:100%;
      padding:10px 12px;
      border:1px solid #d7dbe0;
      border-radius:6px;
      box-sizing:border-box;
      margin-bottom:12px;
      font-size:14px;
    }
    .row {display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;}
    .remember {display:flex;align-items:center;gap:8px;font-size:13px;color:#444}
    .btn {
      width:100%;
      padding:10px 12px;
      border:0;
      border-radius:6px;
      background:#2563eb;
      color:#fff;
      font-weight:600;
      cursor:pointer;
      font-size:15px;
    }
    .error {color:#b91c1c;font-size:13px;margin-bottom:12px;}
    .help {font-size:13px;color:#6b7280;text-align:center;margin-top:12px;}
    a.link{color:#2563eb;text-decoration:none;}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <center><h1>Login</h1></center>
      {{-- <p class="desc">Silakan Login menggunakan email dan kata sandi Anda.</p> --}}

      {{-- Mahasiswa, Dosen, Admin --}}

      {{-- <form method="post" action="/jadwalMhs"> --}}
      <form method="post" action="/Dosen">
      {{-- <form method="post" action="/adminAsdos"> --}}
        @csrf

        <div>
          {{-- <label for="email">Email</label> --}}
          <input id="email" type="email" name="email" value="" placeholder="Masukkan email">
        </div>

        <div>
          {{-- <label for="password">Kata Sandi</label> --}}
          <input id="password" type="password" name="password" placeholder="Masukkan kata sandi">
        </div>

        <button class="btn" type="submit">Login</button>
      </form>

      <p class="help">Belum punya akun? <a class="link" href="/register">Register</a></p>
    </div>
  </div>
</body>
</html>
