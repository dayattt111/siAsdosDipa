<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen - Manajemen Asdos</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f5f5f5; }
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 { font-size: 24px; }
        .navbar .user-info { display: flex; gap: 20px; align-items: center; }
        .navbar a { color: white; text-decoration: none; padding: 8px 15px; border-radius: 5px; background: rgba(255,255,255,0.2); }
        .navbar a:hover { background: rgba(255,255,255,0.3); }
        .container { max-width: 1200px; margin: 30px auto; padding: 0 20px; }
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
        }
        .stat-card h3 { color: #666; font-size: 14px; margin-bottom: 10px; }
        .stat-card .number { font-size: 32px; font-weight: bold; color: #667eea; }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
            transition: transform 0.2s;
        }
        .menu-card:hover { transform: translateY(-5px); box-shadow: 0 4px 8px rgba(0,0,0,0.15); }
        .menu-card h3 { margin-top: 15px; color: #667eea; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Dashboard Dosen</h1>
        <div class="user-info">
            <span>{{ session('user')->nama_user }}</span>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="stats">
            <div class="stat-card">
                <h3>Total Asdos Saya</h3>
                <div class="number">{{ $totalAsdos }}</div>
            </div>
            <div class="stat-card">
                <h3>Pendaftar Baru</h3>
                <div class="number">{{ $pendaftarBaru }}</div>
            </div>
        </div>

        <h2 style="margin-bottom: 20px;">Menu Dosen</h2>
        <div class="menu-grid">
            <a href="/dosen/my-asdos" class="menu-card">
                <h3>📋 Asdos Saya</h3>
                <p>Lihat daftar asdos yang saya bimbing</p>
            </a>
            <a href="/dosen/pendaftar" class="menu-card">
                <h3>👥 Pendaftar Asdos</h3>
                <p>Lihat dan beri komentar pada pendaftar</p>
            </a>
        </div>
    </div>
</body>
</html>
