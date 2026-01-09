<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asdos Saya - Dosen</title>
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
        }
        .navbar h1 { font-size: 24px; }
        .navbar a { color: white; text-decoration: none; padding: 8px 15px; border-radius: 5px; background: rgba(255,255,255,0.2); }
        .navbar a:hover { background: rgba(255,255,255,0.3); }
        .container { max-width: 1200px; margin: 30px auto; padding: 0 20px; }
        table { width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        th, td { padding: 15px; text-align: left; }
        th { background: #3182ce; color: white; }
        tr:nth-child(even) { background: #f8f9fa; }
        .badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; }
        .badge-success { background: #28a745; color: white; }
        .badge-secondary { background: #6c757d; color: white; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Asdos Yang Saya Bimbing</h1>
        <div style="display: flex; gap: 15px;">
            <a href="/dosen/dashboard">Dashboard</a>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="container">
        <h2 style="margin-bottom: 20px;">Daftar Asdos</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mahasiswa</th>
                    <th>NIM</th>
                    <th>Mata Kuliah</th>
                    <th>Kode MK</th>
                    <th>Semester</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($asdos as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->mahasiswa->nama_user }}</td>
                    <td>{{ $item->mahasiswa->nim }}</td>
                    <td>{{ $item->mata_kuliah }}</td>
                    <td>{{ $item->kode_mk }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>
                        <span class="badge {{ $item->status == 'aktif' ? 'badge-success' : 'badge-secondary' }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Belum ada asdos yang dibimbing</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
