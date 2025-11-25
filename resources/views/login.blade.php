<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: #fff;
            padding: 25px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #444;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .link{
            color:#2563eb;
            text-decoration:none;
        }
        button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    {{-- <form method="POST" action="/adminAsdos"> --}}
    {{-- <form method="POST" action="/adminAsdos"> --}}
    <form method="POST" action="login">
        @csrf

        {{-- <label>Username</label> --}}
        <input type="text" name="username" placeholder="Username">

        {{-- <label>Password</label> --}}
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Masuk</button>
        <p class="help">Belum punya akun? <a class="link" href="/register">Register</a></p>
    </form>
</div>

</body>
</html>
