<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran - Mahasiswa</title>
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
        .navbar a { color: white; text-decoration: none; padding: 8px 15px; border-radius: 5px; background: rgba(255,255,255,0.2); }
        .navbar a:hover { background: rgba(255,255,255,0.3); }
        .container { max-width: 800px; margin: 30px auto; padding: 0 20px; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .detail-row { display: grid; grid-template-columns: 200px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee; }
        .detail-row:last-child { border-bottom: none; }
        .label { font-weight: 600; color: #333; }
        .value { color: #666; }
        .badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; display: inline-block; }
        .badge-warning { background: #ffc107; color: #333; }
        .badge-success { background: #28a745; color: white; }
        .badge-danger { background: #dc3545; color: white; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Detail Pendaftaran</h1>
        <div style="display: flex; gap: 15px;">
            <a href="/mahasiswa/riwayat">Kembali</a>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <h2 style="margin-bottom: 20px;">Detail Pendaftaran Asdos</h2>

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
                        <a href="{{ asset('storage/' . $pendaftar->dokumen) }}" target="_blank" style="color: #667eea;">Download Dokumen</a>
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
    </div>
</body>
</html>
