<!-- resources/views/mhs/jadwal.blade.php -->
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Asdos</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: #f5f7fa;
    }
    #fx{
      display: flex;
      justify-content: space-between;
    }
    .container {
      max-width: 600px;
      margin: 60px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.05);
    }
    a{
      color: white;
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
    .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 6px;
      background: #2563eb;
      color: #fff;
      cursor: pointer;
      font-size: 13px;
    }
    .bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
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

    /* === MODAL STYLE === */
    .modal {
      display: none;
      position: fixed;
      z-index: 100;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 500px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-10px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .modal-header {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 8px;
    }

    .modal-body p {
      margin: 8px 0;
      color: #333;
      font-size: 14px;
    }

    .modal-footer {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .btn-secondary {
      background: #e5e7eb;
      color: #111;
    }

    .photo-box {
      width: 100px;
      height: 100px;
      background: #e5e7eb;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px dashed #ccc;
      margin-left: auto;
    }
  </style>
</head>
<body>

<header id="fx" class="bg-white shadow-md py-3 px-6 flex items-center justify-between">
  <a href="/" class="btn">Logout</a>
  <a class="btn" href="/Dosen/cekAsdos">Cek Asdos</a>
</header>

<div class="container">
  <h2>Daftar Calon Asdos</h2>
    {{-- @csrf --}}
  <div class="jadwal-box">
    <span>Calon Asdos</span>
    <div class="subColumn">
      <a class="btn" href="/Dosen/komentar">Komentar</a>
      <button class="btn" onclick="openModal()">Detail</button>
    </div>
  </div>
</div>

<!-- === MODAL DETAIL CALON ASDOS === -->
<div id="detailModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">Detail Calon Asdos</div>
    <div class="modal-body">
      <div style="display: flex; justify-content: space-between; align-items: flex-start;">
        <div>
          <p><b>Nama:</b> Budi Santoso</p>
          <p><b>NIM:</b> 232220</p>
          <p><b>Pilihan Jadwal:</b> Senin, 09.00</p>
          <p><b>Dosen Rekomendasi:</b> Dr. Ahmad</p>
          <p><b>Alasan Mhs:</b> Ingin menambah pengalaman mengajar</p>
          <p><b>Transkrip Nilai:</b> 3.85</p>
        </div>
        <div class="photo-box">Foto</div>
      </div>
    </div>

    <div class="modal-footer">
      <button class="btn btn-secondary" onclick="closeModal()">← Back</button>
      <a href="/Dosen/komentar" class="btn">Berikan Penilaian & Komentar</a>
    </div>
  </div>
</div>

<script>
  function openModal() {
    document.getElementById('detailModal').style.display = 'block';
  }
  function closeModal() {
    document.getElementById('detailModal').style.display = 'none';
  }
  window.onclick = function(event) {
    const modal = document.getElementById('detailModal');
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }
</script>
</body>
</html>
