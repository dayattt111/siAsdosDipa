<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Asdos - Admin</title>
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
        .form-card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; color: #333; font-weight: 500; }
        input, textarea, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; }
        input:focus, textarea:focus, select:focus { outline: none; border-color: #3182ce; }
        textarea { min-height: 100px; resize: vertical; }
        .btn { padding: 12px 24px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .btn-primary { background: #3182ce; color: white; width: 100%; }
        .btn-primary:hover { background: #2c5aa0; }
        .error { color: #dc3545; font-size: 12px; margin-top: 3px; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Tambah Asdos</h1>
        <div style="display: flex; gap: 15px;">
            <span style="color: white;">{{ session('user')->nama_user }}</span>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="layout">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="/admin/dashboard">📊 Dashboard</a></li>
                <li><a href="/admin/asdos" class="active">📋 Kelola Asdos</a></li>
                <li><a href="/admin/pendaftar">👥 Pendaftar Asdos</a></li>
                <li><a href="/admin/users">👤 Kelola User</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container">
        <div class="form-card">
            <h2 style="margin-bottom: 20px;">Form Tambah Asdos</h2>

            <form action="/admin/asdos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="user_id">Mahasiswa</label>
                    <select id="user_id" name="user_id" required>
                        <option value="">Pilih Mahasiswa</option>
                        @foreach($mahasiswa as $mhs)
                            <option value="{{ $mhs->id }}">{{ $mhs->nama_user }} ({{ $mhs->nim }})</option>
                        @endforeach
                    </select>
                    @error('user_id')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="dosen_id">Dosen Pembimbing</label>
                    <select id="dosen_id" name="dosen_id" required>
                        <option value="">Pilih Dosen</option>
                        @foreach($dosen as $dsn)
                            <option value="{{ $dsn->id }}">{{ $dsn->nama_user }}</option>
                        @endforeach
                    </select>
                    @error('dosen_id')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="matakuliah_id">Mata Kuliah</label>
                    <select id="matakuliah_id" name="matakuliah_id" required onchange="updateMataKuliah()">
                        <option value="">Pilih Mata Kuliah</option>
                        @foreach($matakuliah as $mk)
                            <option value="{{ $mk->id }}" data-kode="{{ $mk->kode_mk }}" data-semester="{{ $mk->semester }}">
                                [{{ $mk->kode_mk }}] {{ $mk->nama_mk }} (Semester {{ $mk->semester }})
                            </option>
                        @endforeach
                    </select>
                    @error('matakuliah_id')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="mata_kuliah">Nama Mata Kuliah (Auto)</label>
                    <input type="text" id="mata_kuliah" name="mata_kuliah" value="{{ old('mata_kuliah') }}" readonly style="background: #f0f0f0;">
                    @error('mata_kuliah')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="kode_mk">Kode Mata Kuliah (Auto)</label>
                    <input type="text" id="kode_mk" name="kode_mk" value="{{ old('kode_mk') }}" readonly style="background: #f0f0f0;">
                    @error('kode_mk')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="semester">Semester (Auto)</label>
                    <input type="text" id="semester" name="semester" value="{{ old('semester') }}" readonly style="background: #f0f0f0;">
                    @error('semester')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="aktif">Aktif</option>
                        <option value="tidak_aktif">Tidak Aktif</option>
                    </select>
                    @error('status')<div class="error">{{ $message }}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
            </div>
        </div>
    </div>

    <script>
        function updateMataKuliah() {
            const select = document.getElementById('matakuliah_id');
            const selectedOption = select.options[select.selectedIndex];
            
            if (selectedOption.value) {
                const mataKuliahData = @json($matakuliah);
                const selectedMk = mataKuliahData.find(mk => mk.id == selectedOption.value);
                
                if (selectedMk) {
                    document.getElementById('mata_kuliah').value = selectedMk.nama_mk;
                    document.getElementById('kode_mk').value = selectedMk.kode_mk;
                    document.getElementById('semester').value = selectedMk.semester;
                }
            } else {
                document.getElementById('mata_kuliah').value = '';
                document.getElementById('kode_mk').value = '';
                document.getElementById('semester').value = '';
            }
        }
    </script>
</body>
</html>
