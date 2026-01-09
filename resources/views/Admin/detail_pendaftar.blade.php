<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftar - Admin</title>
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
        .container { max-width: 800px; margin: 0 auto; padding: 0; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .detail-row { display: grid; grid-template-columns: 200px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee; }
        .detail-row:last-child { border-bottom: none; }
        .label { font-weight: 600; color: #333; }
        .value { color: #666; }
        .badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; display: inline-block; }
        .badge-warning { background: #ffc107; color: #333; }
        .badge-success { background: #28a745; color: white; }
        .badge-danger { background: #dc3545; color: white; }
        .btn { padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; margin-right: 10px; }
        .btn-success { background: #28a745; color: white; }
        .btn-danger { background: #dc3545; color: white; }
        .form-group { margin-top: 20px; }
        label { display: block; margin-bottom: 5px; color: #333; font-weight: 500; }
        textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; min-height: 80px; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Detail Pendaftar</h1>
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
                <div class="card">
                    <h2 style="margin-bottom: 20px;">Detail Pendaftar Asdos</h2>

                    <div class="detail-row">
                        <div class="label">Nama Mahasiswa</div>
                        <div class="value">{{ $pendaftar->mahasiswa->nama_user }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">NIM</div>
                        <div class="value">{{ $pendaftar->mahasiswa->nim }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Email</div>
                        <div class="value">{{ $pendaftar->mahasiswa->email }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Mata Kuliah</div>
                        <div class="value">{{ $pendaftar->mata_kuliah }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Kode MK</div>
                        <div class="value">{{ $pendaftar->kode_mk }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">IPK</div>
                        <div class="value">{{ $pendaftar->ipk }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Semester</div>
                        <div class="value">{{ $pendaftar->semester }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Motivasi</div>
                        <div class="value">{{ $pendaftar->motivasi ?? '-' }}</div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Dokumen</div>
                        <div class="value">
                            @if($pendaftar->dokumen)
                                <a href="{{ asset('storage/' . $pendaftar->dokumen) }}" target="_blank" style="color: #3182ce;">Download Dokumen</a>
                            @else
                                -
                            @endif
                        </div>
                    </div>

                    <div class="detail-row">
                        <div class="label">Status</div>
                        <div class="value">
                            @if($pendaftar->status == 'pending')
                                <span class="badge badge-warning">Menunggu</span>
                            @elseif($pendaftar->status == 'disetujui')
                                <span class="badge badge-success">Disetujui</span>
                            @else
                                <span class="badge badge-danger">Ditolak</span>
                            @endif
                        </div>
                    </div>

                    @if($pendaftar->komentar)
                    <div class="detail-row">
                        <div class="label">Komentar</div>
                        <div class="value">{{ $pendaftar->komentar }}</div>
                    </div>
                    @endif

                    <div class="detail-row">
                        <div class="label">Tanggal Daftar</div>
                        <div class="value">{{ $pendaftar->created_at->format('d F Y, H:i') }}</div>
                    </div>
                </div>

                @if($pendaftar->status == 'pending')
                <div class="card">
                    <h3 style="margin-bottom: 15px;">Aksi</h3>
                    <form action="/admin/pendaftar/{{ $pendaftar->id }}/approve" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">Setujui Pendaftar</button>
                    </form>

                    <form action="/admin/pendaftar/{{ $pendaftar->id }}/reject" method="POST" style="display: inline;">
                        @csrf
                        <div class="form-group">
                            <label for="komentar">Alasan Penolakan</label>
                            <textarea id="komentar" name="komentar" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger" style="margin-top: 10px;">Tolak Pendaftar</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
