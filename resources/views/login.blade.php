<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Manajemen Asdos</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #4a5568;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .alert {
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .alert-error {
            background-color: #fee;
            color: #c00;
            border-left: 4px solid #c00;
        }
        .alert-success {
            background-color: #efe;
            color: #0a0;
            border-left: 4px solid #0a0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: 500;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border-color: #3182ce;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #3182ce;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #2c5aa0;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        .register-link a {
            color: #3182ce;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manajemen Asdos</h1>
        <p class="subtitle">Silakan login untuk melanjutkan</p>

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username atau Email</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="register-link">
            Belum punya akun? <a href="/register">Daftar di sini</a>
        </div>
    </div>
</body>
</html>
  </style>
</head>
{{-- <body>
  <div class="wrap">
    <div class="card">
      <center><h1>Login</h1></center>
        @if (session('error'))
            <div class="error" style="color:#b91c1c; background:#fee2e2; padding:10px; border-radius:6px; margin-bottom:12px; text-align:center;">
                {{ session('error') }}
            </div>
        @endif
      <form method="post" action="/login">
        @csrf

        <div>
          <input id="nim" type="text" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM">
          @error('nim')
            <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div>
          <input id="password" type="password" name="password" placeholder="Masukkan kata sandi">
          @error('password')
            <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <button class="btn" type="submit">Login</button>
      </form>

      <p class="help">Belum punya akun? <a class="link" href="/register">Register</a></p>
    </div>
  </div>
</body> --}}
</html>
