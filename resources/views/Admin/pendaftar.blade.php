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
        .container { max-width: 1200px; margin: 30px auto; padding: 0 20px; }
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
            <a href="/admin/dashboard">Dashboard</a>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h2 style="margin-bottom: 20px;">Daftar Pendaftar Asdos</h2>

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
                            @if($item->status == 'pending')
                            <form action="/admin/pendaftar/{{ $item->id }}/approve" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Setujui</button>
                            </form>
                            @endif
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
</body>
</html>
