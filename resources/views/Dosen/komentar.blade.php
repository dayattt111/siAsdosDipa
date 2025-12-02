<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Komentar dan Penilaian</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background: #f5f7fa;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.05);
        }

        h2 {
            margin-top: 0;
            font-size: 22px;
            color: #111;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .info-header {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; /* Membagi kolom untuk Nama, Nim, Pilihan Kelas */
            font-weight: bold;
            color: #555;
            padding: 5px 0;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .info-details {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            margin-bottom: 15px;
            font-size: 15px;
            color: #333;
        }

        textarea {
            width: 100%;
            min-height: 120px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box; /* Penting agar padding tidak melebarkan elemen */
            resize: vertical;
            font-size: 14px;
        }

        .radio-group label {
            margin-right: 25px;
            font-size: 15px;
            color: #333;
            cursor: pointer;
        }

        .radio-group input[type="radio"] {
            margin-right: 5px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block; /* Untuk button/link */
            text-align: center;
        }

        .btn-back {
            background: #6c757d; /* Abu-abu */
            color: #fff;
        }

        .btn-submit {
            background: #007bff; /* Biru */
            color: #fff;
            font-weight: bold;
        }

        /* URL Bar Mockup */
        .browser-mockup {
            border: 1px solid #ccc;
            border-radius: 8px 8px 0 0;
            background: #fff;
            max-width: 600px;
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

        .browser-mockup .content-placeholder {
            padding: 15px 20px;
        }
    </style>
</head>
<body>

<div class="browser-mockup">
    <div class="content-placeholder">
        <div class="container" style="box-shadow: none; margin: 0 auto; padding: 0;">
            <h2>Komentar dan penilaian</h2>

            <div class="info-header">
                <span>Nama</span>
                <span>Nim</span>
                <span>Pilihan Kelas</span>
            </div>

            <div class="info-details">
                <span>Calon Asdos</span>
                <span>13018001</span>
                <span>Framework</span>
            </div>
            <form action="/Dosen/kirimKomentar" method="POST">
                @csrf
                <textarea name="komentar_dosen" placeholder="komentar dosen"></textarea>

                <div class="radio-group">
                    <label>
                        <input type="radio" name="persetujuan" value="setuju" checked> Setuju
                    </label>
                    <label>
                        <input type="radio" name="persetujuan" value="tidak_setuju"> Tidak Setuju
                    </label>
                </div>

                <div class="actions">
                    <a href="/Dosen/cekCalonAsdos" class="btn btn-back">
                        < back
                    </a>
                    <button type="submit" class="btn btn-submit">
                        kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>