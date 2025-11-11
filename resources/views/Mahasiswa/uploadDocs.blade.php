<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Dokumen</title>
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
    }
    label {
      display: block;
      font-size: 14px;
      color: #333;
      margin-bottom: 4px;
    }
    input[type="file"], input[type="text"], textarea {
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 8px 10px;
      font-size: 14px;
      margin-bottom: 12px;
      box-sizing: border-box;
    }
    textarea { resize: vertical; min-height: 70px; }
    button {
      width: 100%;
      padding: 10px;
      background: #2563eb;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Upload Dokumen</h2>

    <form method="POST" action="/jadwalMhs/status" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="transkrip">Transkrip Nilai</label>
        <input id="transkrip" type="file" name="transkrip">
      </div>

      <div>
        <label for="jadwal">Jadwal Mhs</label>
        <input id="jadwal" type="file" name="jadwal">
      </div>

      <div>
        <label for="dosen">Dosen yang Merekomendasi</label>
        <input id="dosen" type="text" name="dosen">
      </div>

      <div>
        <label for="alasan">Alasan ingin menjadi asdos matkul ini</label>
        <textarea id="alasan" name="alasan"></textarea>
      </div>

      <button type="submit">Kirim</button><br>
    </form>
    <a href="/jadwalMhs">kembali</a>
  </div>
</body>
</html>
