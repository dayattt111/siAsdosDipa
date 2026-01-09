<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Asdos - Mahasiswa</title>
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
        .container { max-width: 800px; margin: 30px auto; padding: 0 20px; }
        .form-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; color: #333; font-weight: 500; }
        input, textarea, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; }
        input:focus, textarea:focus, select:focus { outline: none; border-color: #3182ce; }
        textarea { min-height: 100px; resize: vertical; }
        .btn { padding: 12px 24px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .btn-primary { background: #3182ce; color: white; width: 100%; }
        .btn-primary:hover { background: #2c5aa0; }
        .error { color: #dc3545; font-size: 12px; margin-top: 3px; }
        .alert { padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .alert-error { background-color: #f8d7da; color: #721c24; border-left: 4px solid #dc3545; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Daftar Asdos</h1>
        <div style="display: flex; gap: 15px;">
            <a href="/mahasiswa/dashboard">Dashboard</a>
            <a href="/logout">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="form-card">
            <h2 style="margin-bottom: 20px;">Form Pendaftaran Asdos</h2>

            @if($errors->any())
                <div class="alert alert-error">
                    <ul style="margin-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/mahasiswa/daftar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="mata_kuliah">Mata Kuliah</label>
                    <input type="text" id="mata_kuliah" name="mata_kuliah" value="{{ old('mata_kuliah') }}" required>
                    @error('mata_kuliah')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="kode_mk">Kode Mata Kuliah</label>
                    <input type="text" id="kode_mk" name="kode_mk" value="{{ old('kode_mk') }}" required>
                    @error('kode_mk')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="number" id="ipk" name="ipk" step="0.01" min="0" max="4" value="{{ old('ipk') }}" required>
                    @error('ipk')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" id="semester" name="semester" value="{{ old('semester') }}" required>
                    @error('semester')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="motivasi">Motivasi</label>
                    <textarea id="motivasi" name="motivasi">{{ old('motivasi') }}</textarea>
                    @error('motivasi')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="dokumen">Upload Dokumen (PDF, DOC, DOCX - Max 2MB)</label>
                    <input type="file" id="dokumen" name="dokumen" accept=".pdf,.doc,.docx">
                    @error('dokumen')<div class="error">{{ $message }}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Kirim Pendaftaran</button>
            </form>
        </div>
    </div>
</body>
</html>
