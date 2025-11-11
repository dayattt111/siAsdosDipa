<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Asdos</title>
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
            color: white; /* Default untuk link di dalam button */
            text-decoration: none;
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

        /* --- STYLING MODAL BARU --- */
        .modal {
            display: none; /* Sembunyikan secara default */
            position: fixed;
            z-index: 10; /* Di atas konten lain */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); /* Background gelap transparan */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% dari atas dan di tengah */
            padding: 25px;
            border: 1px solid #888;
            width: 90%; /* Lebar modal */
            max-width: 400px; /* Maksimal lebar */
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .modal-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #111;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-close {
            background: #6c757d; /* Abu-abu */
        }
        .btn-send {
            background: #28a745; /* Hijau */
        }

    </style>
</head>
<body>

<header id="fx" class="bg-white shadow-md py-3 px-6 flex items-center justify-between">
    <a href="/" class="btn">Logout</a>
    <a class="btn" href="/Dosen/cekCalonAsdos">Cek Calon Asdos</a>
</header>

<div class="container">
    <h2>Daftar Asdos</h2>

    <div class="jadwal-box">
        <span>Jadwal Komputasi (Asdos: Budi)</span>
        <button class="btn" onclick="openModal('Budi')">Hubungi</button>
    </div>    
    <div class="jadwal-box">
        <span>Jadwal Aljabar Linier (Asdos: Sita)</span>
        <button class="btn" onclick="openModal('Sita')">Hubungi</button>
    </div>    
    <div class="jadwal-box">
        <span>Jadwal Struktur Data (Asdos: Joni)</span>
        <button class="btn" onclick="openModal('Joni')">Hubungi</button>
    </div>    

    <div class="bottom">
        <a href="#" class="link">show more</a>
    </div>
</div>

<div id="contactModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">Hubungi Asdos</div>
        <form id="contactForm">
            <div class="form-group">
                <label for="asdosName">Asdos yang dihubungi:</label>
                <input type="text" id="asdosName" name="asdosName" readonly>
            </div>

            <div class="form-group">
                <label for="yourName">Nama Anda (Dosen):</label>
                <input type="text" id="yourName" name="yourName" placeholder="Masukkan Nama Anda">
            </div>

            <div class="form-group">
                <label for="comment">Perihal/Komentar:</label>
                <textarea id="comment" name="comment" placeholder="Tulis perihal atau komentar di sini..."></textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-close" onclick="closeModal()">Tutup</button>
                <button type="submit" class="btn btn-send">Kirim Pesan</button>
            </div>
        </form>
    </div>
</div>
<script>
    // Ambil elemen modal
    const modal = document.getElementById('contactModal');
    // Ambil elemen input nama asdos di modal
    const asdosNameInput = document.getElementById('asdosName');
    // Ambil form
    const contactForm = document.getElementById('contactForm');

    // Fungsi untuk menampilkan modal dan mengisi nama asdos
    function openModal(asdosName) {
        asdosNameInput.value = asdosName;
        modal.style.display = "block";
    }

    // Fungsi untuk menyembunyikan modal
    function closeModal() {
        modal.style.display = "none";
        // Reset form setelah ditutup
        contactForm.reset();
    }

    // Ketika user mengklik di luar modal, tutup modal
    window.onclick = function(event) {
        if (event.target === modal) {
            closeModal();
        }
    }

    // Contoh penanganan submit form (hanya placeholder)
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const namaAnda = document.getElementById('yourName').value;
        const komentar = document.getElementById('comment').value;
        const asdos = asdosNameInput.value;

        alert(`Pesan berhasil dikirim kepada Asdos ${asdos} dari ${namaAnda}. Komentar: "${komentar}"`);

        closeModal();
    });

</script>
</body>
</html>