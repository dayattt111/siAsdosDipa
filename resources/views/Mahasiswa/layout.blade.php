<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Dashboard Mahasiswa')</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: #f5f7fa;
    }
    .wrapper {
      display: flex;
      min-height: 100vh;
    }
    .sidebar {
      width: 250px;
      background: #1f2937;
      color: #fff;
      padding: 20px 0;
      position: fixed;
      height: 100vh;
      overflow-y: auto;
      box-shadow: 2px 0 8px rgba(0,0,0,0.1);
    }
    .sidebar-header {
      padding: 20px;
      border-bottom: 1px solid #374151;
      margin-bottom: 20px;
    }
    .sidebar-header h3 {
      font-size: 16px;
      margin-bottom: 5px;
    }
    .sidebar-header p {
      font-size: 12px;
      color: #9ca3af;
    }
    .sidebar-menu {
      list-style: none;
    }
    .sidebar-menu li {
      margin: 0;
    }
    .sidebar-menu a {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px 20px;
      color: #d1d5db;
      text-decoration: none;
      transition: all 0.2s;
      font-size: 14px;
    }
    .sidebar-menu a:hover {
      background: #374151;
      color: #fff;
      padding-left: 24px;
    }
    .sidebar-menu a.active {
      background: #2563eb;
      color: #fff;
      border-left: 4px solid #93c5fd;
      padding-left: 16px;
    }
    .sidebar-menu .menu-icon {
      width: 18px;
      height: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
    }
    .sidebar-divider {
      border-top: 1px solid #374151;
      margin: 15px 0;
    }
    .main {
      flex: 1;
      margin-left: 250px;
    }
    .navbar {
      background: #fff;
      padding: 15px 30px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar-title {
      font-size: 18px;
      font-weight: 600;
      color: #111;
    }
    .navbar-user {
      display: flex;
      align-items: center;
      gap: 15px;
      font-size: 13px;
    }
    .content {
      padding: 30px;
    }
    .card {
      background: #fff;
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .btn {
      display: inline-block;
      padding: 10px 18px;
      background: #2563eb;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.2s;
    }
    .btn:hover {
      background: #1d4ed8;
    }
    .btn-logout {
      background: #dc2626;
    }
    .btn-logout:hover {
      background: #b91c1c;
    }
    .alert {
      padding: 12px 18px;
      border-radius: 6px;
      margin-bottom: 20px;
      font-size: 14px;
    }
    .alert-success {
      background: #efe;
      color: #3c3;
      border: 1px solid #9e9;
    }
    .alert-danger {
      background: #fee;
      color: #c33;
      border: 1px solid #fcc;
    }
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .main {
        margin-left: 0;
      }
      .wrapper {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar-header">
        <h3>{{ session('user')->nama_user ?? 'User' }}</h3>
        <p>{{ session('user')->nim ?? 'NIM' }}</p>
      </div>
      <ul class="sidebar-menu">
        <li><a href="/mahasiswa/dashboard" @if(request()->path() === 'mahasiswa/dashboard') class="active" @endif><span class="menu-icon">📊</span> Dashboard</a></li>
        
        <div class="sidebar-divider"></div>
        
        {{-- <li><a href="/mahasiswa/jadwalMhs" @if(request()->path() === 'mahasiswa/jadwalMhs') class="active" @endif><span class="menu-icon">📅</span> Jadwal Asdos</a></li> --}}
        <li><a href="/mahasiswa/jadwalMhs/status" @if(request()->path() === 'mahasiswa/jadwalMhs/status') class="active" @endif><span class="menu-icon">✅</span> Status Seleksi</a></li>
        
        <div class="sidebar-divider"></div>
        
        <li><a href="/mahasiswa/daftar-asdos" @if(request()->path() === 'mahasiswa/daftar-asdos') class="active" @endif><span class="menu-icon">📝</span> Daftar Asdos</a></li>
        <li><a href="/mahasiswa/riwayat" @if(request()->path() === 'mahasiswa/riwayat') class="active" @endif><span class="menu-icon">📋</span> Riwayat</a></li>
        
        <div class="sidebar-divider"></div>
        
        {{-- <li><a href="/mahasiswa/profile" @if(request()->path() === 'mahasiswa/profile') class="active" @endif><span class="menu-icon">👤</span> Edit Profile</a></li> --}}
        
        <div class="sidebar-divider"></div>
        
        <li><a href="/logout" style="color:#fca5a5"><span class="menu-icon">🚪</span> Logout</a></li>
      </ul>
    </div>

    <div class="main">
      <div class="navbar">
        <div class="navbar-title">@yield('page_title', 'Dashboard')</div>
        <div class="navbar-user">
          Selamat datang, {{ session('user')->nama_user ?? 'User' }}
        </div>
      </div>

      <div class="content">
        @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>
