<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Manajemen Asdos</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
        }
        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 380px;
            width: 100%;
            padding: 32px;
        }
        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 8px;
            font-size: 24px;
            font-weight: 600;
        }
        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 24px;
            font-size: 13px;
        }
        .alert {
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 16px;
            font-size: 13px;
        }
        .alert-error {
            background-color: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }
        .alert-success {
            background-color: #f0fdf4;
            color: #166534;
            border: 1px solid #bbf7d0;
        }
        .form-group {
            margin-bottom: 16px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #333;
            font-weight: 500;
            font-size: 13px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }
        input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
        }
        button {
            width: 100%;
            padding: 10px;
            background: #3b82f6;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #2563eb;
        }
        .register-link {
            text-align: center;
            margin-top: 16px;
            color: #666;
            font-size: 13px;
        }
        .register-link a {
            color: #3b82f6;
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
                <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
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
