<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftar - Admin</title>
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
        .layout { display: flex; min-height: calc(100vh - 60px); }
        .sidebar {
            width: 250px;
            background: white;
            box-shadow: 2px 0 4px rgba(0,0,0,0.1);
            padding: 20px 0;
        }
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { margin: 5px 0; }
        .sidebar-menu a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: background 0.2s;
        }
        .sidebar-menu a:hover { background: #f0f0f0; }
        .sidebar-menu a.active { background: #3182ce; color: white; }
        .content { flex: 1; padding: 30px; }
        .container { max-width: 100%; margin: 0; padding: 0; }
        .btn { padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; font-size: 14px; }
        .btn-success { background: #28a745; color: white; }
        .btn-danger { background: #dc3545; color: white; }
        table { width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        th, td { padding: 15px; text-align: left; }
        th { background: #3182ce; color: white; }
        tr:nth-child(even) { background: #f8f9fa; }
        .actions { display: flex; gap: 10px; }
        .badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; }
        .badge-warning { background: #ffc107; color: #333; }
        .badge-success { background: #28a745; color: white; }
        .badge-danger { background: #dc3545; color: white; }
        .alert { padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .alert-success { background-color: #d4edda; color: #155724; border-left: 4px solid #28a745; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Data Pendaftar Asdos</h1>
        <div style="display: flex; gap: 15px;">
            <span style="color: white;">{{ session('user')->nama_user }}</span>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="layout">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="/admin/dashboard">📊 Dashboard</a></li>
                <li><a href="/admin/asdos">📋 Kelola Asdos</a></li>
                <li><a href="/admin/pendaftar" class="active">👥 Pendaftar Asdos</a></li>
                <li><a href="/admin/users">👤 Kelola User</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2>Daftar Pendaftar Asdos</h2>
            <a href="/admin/pendaftar/create" style="padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px; display: inline-block;">+ Tambah Pendaftar</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Mata Kuliah</th>
                    <th>IPK</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pendaftar as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->mahasiswa->nama_user }}</td>
                    <td>{{ $item->mahasiswa->nim }}</td>
                    <td>{{ $item->mata_kuliah }}</td>
                    <td>{{ $item->ipk }}</td>
                    <td>
                        @if($item->status == 'pending')
                            <span class="badge badge-warning">Menunggu</span>
                        @elseif($item->status == 'disetujui')
                            <span class="badge badge-success">Disetujui</span>
                        @else
                            <span class="badge badge-danger">Ditolak</span>
                        @endif
                    </td>
                    <td>
                        <div class="actions">
                            <a href="/admin/pendaftar/{{ $item->id }}" class="btn btn-success">Detail</a>
                            <a href="/admin/pendaftar/{{ $item->id }}/edit" class="btn btn-success" style="background: #ffc107; color: #333;">Edit</a>
                            @if($item->status == 'pending')
                            <form action="/admin/pendaftar/{{ $item->id }}/approve" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Setujui</button>
                            </form>
                            @endif
                            <form action="/admin/pendaftar/{{ $item->id }}/delete" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus pendaftar ini?');">
                                @csrf
                                <button type="submit" class="btn btn-success" style="background: #dc3545;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Tidak ada data pendaftar</td>
                </tr>
                @endforelse
            </tbody>
        </table>
            </div>
        </div>
    </div>
</body>
</html>
