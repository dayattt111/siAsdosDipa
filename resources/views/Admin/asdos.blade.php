<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Asdos - Admin</title>
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
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .btn { padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-primary { background: #3182ce; color: white; }
        .btn-primary:hover { background: #2c5aa0; }
        .btn-danger { background: #dc3545; color: white; }
        .btn-warning { background: #ffc107; color: #333; }
        table { width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        th, td { padding: 15px; text-align: left; }
        th { background: #3182ce; color: white; }
        tr:nth-child(even) { background: #f8f9fa; }
        .actions { display: flex; gap: 10px; }
        .badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; }
        .badge-success { background: #28a745; color: white; }
        .badge-secondary { background: #6c757d; color: white; }
        .alert { padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .alert-success { background-color: #d4edda; color: #155724; border-left: 4px solid #28a745; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Data Asdos</h1>
        <div style="display: flex; gap: 15px;">
            <a href="/admin/dashboard">Dashboard</a>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="header">
            <h2>Daftar Asdos</h2>
            <a href="/admin/asdos/create" class="btn btn-primary">+ Tambah Asdos</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mahasiswa</th>
                    <th>Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Kode MK</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($asdos as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->mahasiswa->nama_user }}</td>
                    <td>{{ $item->dosen->nama_user }}</td>
                    <td>{{ $item->mata_kuliah }}</td>
                    <td>{{ $item->kode_mk }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>
                        <span class="badge {{ $item->status == 'aktif' ? 'badge-success' : 'badge-secondary' }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                    <td>
                        <div class="actions">
                            <a href="/admin/asdos/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/admin/asdos/{{ $item->id }}/delete" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" style="text-align: center;">Tidak ada data asdos</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
