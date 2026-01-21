<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Manajemen Asdos</title>
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
            max-width: 420px;
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
        .alert-error ul {
            margin-left: 16px;
        }
        .alert-error li {
            margin-bottom: 4px;
        }
        .form-group {
            margin-bottom: 14px;
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
        .error {
            color: #b91c1c;
            font-size: 12px;
            margin-top: 4px;
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
            margin-top: 8px;
        }
        button:hover {
            background: #2563eb;
        }
        .login-link {
            text-align: center;
            margin-top: 16px;
            color: #666;
            font-size: 13px;
        }
        .login-link a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Akun Baru</h1>
        <p class="subtitle">Silakan lengkapi form di bawah</p>

        @if($errors->any())
            <div class="alert alert-error">
                <strong>Terdapat kesalahan:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_user">Nama Lengkap</label>
                <input type="text" id="nama_user" name="nama_user" value="{{ old('nama_user') }}" required>
                @error('nama_user')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required>
                @error('username')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" value="{{ old('nim') }}" required>
                @error('nim')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="no_hp">No. HP (Opsional)</label>
                <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                @error('no_hp')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit">Daftar</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="/login">Login di sini</a>
        </div>
    </div>
</body>
</html>
