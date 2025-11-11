<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Data Pengguna</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background: #f5f7fa;
        }

        /* --- STYLING BROWSER MOCKUP --- */
        .browser-mockup {
            border: 1px solid #ccc;
            border-radius: 8px 8px 0 0;
            background: #fff;
            max-width: 900px;
            margin: 20px auto 0;
            padding: 0;
        }

        .browser-mockup .url-bar {
            display: flex;
            align-items: center;
            padding: 8px 10px;
            background: #e9ecef;
            border-bottom: 1px solid #ccc;
            border-radius: 6px 6px 0 0;
        }

        .browser-mockup .url-bar .controls {
            display: flex;
            gap: 10px;
            margin-right: 15px;
            color: #666;
        }

        .browser-mockup .url-bar .url-input {
            flex-grow: 1;
            padding: 5px 10px;
            border: 1px solid #adb5bd;
            border-radius: 4px;
            background: #fff;
            font-size: 14px;
            color: #495057;
        }
        /* --- AKHIR STYLING BROWSER MOCKUP --- */


        /* --- TATA LETAK UTAMA --- */
        .admin-layout {
            display: flex;
            min-height: 80vh; /* Agar konten terlihat */
            border-radius: 0 0 8px 8px;
        }

        /* --- SIDEBAR --- */
        .sidebar {
            width: 200px;
            padding: 20px 0;
            border-right: 1px solid #ddd;
            background: #fff;
            flex-shrink: 0; /* Mencegah sidebar menyusut */
        }

        .profile-placeholder {
            width: 80px;
            height: 80px;
            border: 1px solid #ddd;
            background: #eee;
            margin: 0 auto 25px;
            border-radius: 4px;
        }

        .nav-button {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px 15px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 6px;
            text-decoration: none;
            color: #333;
            background: #f8f8f8;
            font-size: 14px;
        }
        .nav-button.active {
            background: #e0e0e0;
            border-color: #c0c0c0;
            font-weight: bold;
        }

        /* --- KONTEN UTAMA --- */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background: #fff;
        }

        .main-content h1 {
            font-size: 24px;
            color: #111;
            margin-top: 0;
            margin-bottom: 20px;
        }

        /* --- KONTROL ATAS (Tambah & Cari) --- */
        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
        }

        .btn-tambah {
            padding: 8px 20px;
            border: none;
            border-radius: 6px;
            background: #28a745; /* Hijau */
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .search-box {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 0 10px;
            flex-grow: 1;
            max-width: 300px;
        }

        .search-box input {
            border: none;
            padding: 8px 0;
            outline: none;
            flex-grow: 1;
            font-size: 14px;
        }

        /* --- DAFTAR PENGGUNA --- */
        .user-list {
            margin-top: 15px;
        }

        .user-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            border: 1px solid #eee;
            border-radius: 6px;
            margin-bottom: 10px;
            background: #fafafa;
        }

        .user-name {
            font-size: 15px;
            font-weight: 500;
            color: #333;
            flex-grow: 1;
        }

        .actions button {
            padding: 6px 15px;
            margin-left: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
            color: #fff;
        }

        .btn-edit {
            background: #ffc107; /* Kuning/Orange */
            color: #333;
        }

        .btn-hapus {
            background: #dc3545; /* Merah */
        }

        .show-more {
            display: block;
            text-align: right;
            margin-top: 10px;
            font-size: 13px;
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="browser-mockup">
    <div class="url-bar">
        <div class="controls">
            &larr; &rarr; &#x21BB;
        </div>
        <div class="url-input">
            https://SisAsdos/admin
        </div>
    </div>

    <div class="admin-layout">
        <div class="sidebar">
            <div class="profile-placeholder"></div>
            <a href="#" class="nav-button active">Data Pengguna</a>
            <a href="#" class="nav-button">Data Pendaftar</a>
            <a href="#" class="nav-button">Laporan</a>
        </div>

        <div class="main-content">
            <h1>Data pengguna</h1>

            <div class="controls">
                <button class="btn-tambah">Tambah</button>
                <div class="search-box">
                    <span>&#x1F50D;</span>
                    <input type="text" placeholder="cari pengguna">
                </div>
            </div>

            <div class="user-list">
                <div class="user-item">
                    <span class="user-name">User 1 (Admin/Dosen/Mahasiswa)</span>
                    <div class="actions">
                        <button class="btn-edit">edit</button>
                        <button class="btn-hapus">hapus</button>
                    </div>
                </div>
                
                <div class="user-item">
                    <span class="user-name">User 2 (Admin/Dosen/Mahasiswa)</span>
                    <div class="actions">
                        <button class="btn-edit">edit</button>
                        <button class="btn-hapus">hapus</button>
                    </div>
                </div>
                
                <div class="user-item">
                    <span class="user-name">User 3 (Admin/Dosen/Mahasiswa)</span>
                    <div class="actions">
                        <button class="btn-edit">edit</button>
                        <button class="btn-hapus">hapus</button>
                    </div>
                </div>
            </div>

            <a href="#" class="show-more">show more</a>
        </div>
    </div>
</div>

</body>
</html>