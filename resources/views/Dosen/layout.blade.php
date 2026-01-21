<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen - Manajemen Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f5f5f5; }
        .navbar {
            background: #2d3748;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar h1 { font-size: 24px; }
        .navbar .user-info { display: flex; gap: 20px; align-items: center; }
        .navbar a { color: white; text-decoration: none; padding: 8px 15px; border-radius: 5px; background: rgba(255,255,255,0.2); transition: background 0.2s; }
        .navbar a:hover { background: rgba(255,255,255,0.3); }
        
        .layout { display: flex; min-height: calc(100vh - 60px); }
        
        .sidebar {
            width: 250px;
            background: white;
            box-shadow: 2px 0 4px rgba(0,0,0,0.1);
            padding: 20px 0;
            position: fixed;
            height: calc(100vh - 60px);
            overflow-y: auto;
        }
        
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { margin: 5px 0; }
        .sidebar-menu a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
            border-left: 3px solid transparent;
        }
        .sidebar-menu a:hover { 
            background: #f0f0f0;
            border-left-color: #3182ce;
        }
        .sidebar-menu a.active { 
            background: #3182ce; 
            color: white;
            border-left-color: #2c5aa0;
        }
        
        .sidebar-divider {
            height: 1px;
            background: #e0e0e0;
            margin: 15px 0;
        }
        
        .sidebar-title {
            padding: 15px 20px 5px;
            font-size: 12px;
            font-weight: 600;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .content { 
            flex: 1;
            margin-left: 250px;
            padding: 30px;
        }
        
        .container { max-width: 100%; }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 4px solid #3182ce;
        }
        .stat-card h3 { color: #666; font-size: 14px; margin-bottom: 10px; }
        .stat-card .number { font-size: 32px; font-weight: bold; color: #3182ce; }
        
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .menu-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
            text-decoration: none;
            color: #333;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .menu-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .menu-card h3 { margin-top: 15px; color: #3182ce; font-size: 18px; }
        .menu-card p { color: #666; font-size: 14px; margin-top: 10px; }
        
        table { width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        table th, table td { padding: 15px; text-align: left; }
        table th { background: #3182ce; color: white; }
        table tr:nth-child(even) { background: #f8f9fa; }
        .badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; }
        .badge-success { background: #28a745; color: white; }
        .badge-secondary { background: #6c757d; color: white; }
        .badge-warning { background: #ffc107; color: #333; }
        .badge-danger { background: #dc3545; color: white; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>📚 Dashboard Dosen</h1>
        <div class="user-info">
            <span>{{ session('user')->nama_user }}</span>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="layout">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-title">Menu Utama</li>
                <li><a href="/dosen/dashboard" class="@if(request()->is('dosen/dashboard')) active @endif">📊 Dashboard</a></li>
                
                <div class="sidebar-divider"></div>
                
                <li class="sidebar-title">Manajemen</li>
                <li><a href="/dosen/my-asdos" class="@if(request()->is('dosen/my-asdos*')) active @endif">📋 Asdos Saya</a></li>
                <li><a href="/dosen/pendaftar" class="@if(request()->is('dosen/pendaftar*')) active @endif">👥 Pendaftar Asdos</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
