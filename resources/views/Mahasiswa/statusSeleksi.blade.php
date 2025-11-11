<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Status Asdos</title>
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
    .jadwal-box {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 10px 14px;
      margin-bottom: 10px;
    }
    .status {
      font-size: 14px;
      color: #333;
    }
    a.link {
      font-size: 13px;
      color: #2563eb;
      text-decoration: none;
    }
    .bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
    }
    .btn {
      padding: 6px 12px;
      border: 1px solid #2563eb;
      border-radius: 6px;
      background: #2563eb;
      color: #fff;
      cursor: pointer;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Status Asdos</h2>

    <div class="jadwal-box">
      <span>Jadwal</span>
      <span class="status">Status lolos / tidak lolos</span>
    </div>

    <div class="jadwal-box">
      <span>Jadwal</span>
      <span class="status">Status lolos / tidak lolos</span>
    </div>

    <div class="jadwal-box">
      <span>Jadwal</span>
      <span class="status">Status lolos / tidak lolos</span>
    </div>

    <div class="bottom">
      <a href="/jadwalMhs" class="btn">Ajukan Asdos</a>
      
      <a href="#" class="link">show more</a>
    </div>
  </div>
</body>
</html>
