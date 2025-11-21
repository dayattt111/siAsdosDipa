<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Detail Calon Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* CSS Tambahan untuk menyesuaikan lebar label agar terlihat rapi */
        .detail-label {
            width: 200px; /* Lebar label yang tetap */
            flex-shrink: 0;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 flex flex-col">

        <div class="p-6 border-b border-gray-200 text-center">
            <div class="w-20 h-20 mx-auto bg-gray-200 rounded-lg"></div>
            <p class="mt-3 font-semibold text-gray-700">Admin Panel</p>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/adminAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Data Pengguna</a>
            <a href="/Admin/Asdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Data Asdos</a>
            <a href="/Admin/calonAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 font-semibold transition-all">Data Calon Asdos</a>
            <a href="/Admin/kelolaJadwal" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Kelola Jadwal</a>
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Laporan</a>
        </nav>

        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Detail Calon Asdos</h1>
            
            <form action="https://wa.me/6282197855715" method="POST">
                @csrf
                
                <div class="detail-group mb-6 p-4 rounded-lg border border-blue-100 bg-blue-50 border-l-4 border-blue-600">
                    <h3 class="text-lg font-semibold text-blue-800 mb-3">Informasi Pendaftar</h3>
                    
                    <div class="detail-item flex mb-2">
                        <span class="detail-label font-medium text-gray-600">Nama</span>
                        <span class="flex-1 text-gray-800">: Budi Santoso</span>
                    </div>
                    <div class="detail-item flex mb-2">
                        <span class="detail-label font-medium text-gray-600">Nim</span>
                        <span class="flex-1 text-gray-800">: 13018001</span>
                    </div>
                    <div class="detail-item flex mb-2">
                        <span class="detail-label font-medium text-gray-600">Pilihan Jadwal</span>
                        <span class="flex-1 text-gray-800">: Komputasi Dasar (Kelas A)</span>
                    </div>
                    <div class="detail-item flex mb-2">
                        <span class="detail-label font-medium text-gray-600">Alasan MHS</span>
                        <span class="flex-1 text-gray-800">: Saya ingin memperdalam materi dan membantu teman-teman.</span>
                    </div>
                    <div class="detail-item flex">
                        <span class="detail-label font-medium text-gray-600">Transkrip Nilai</span>
                        <span class="flex-1 text-blue-600 font-bold">: <a href="#" class="hover:underline">Lihat File Transkrip.pdf</a></span>
                    </div>
                </div>

                <div class="detail-group mb-6 p-4 rounded-lg border border-green-100 bg-green-50 border-l-4 border-green-600">
                    <h3 class="text-lg font-semibold text-green-800 mb-3">Informasi Dosen & Rekomendasi</h3>
                    
                    <div class="detail-item flex mb-2">
                        <span class="detail-label font-medium text-gray-600">Dosen yang Merekomendasikan</span>
                        <span class="flex-1 text-gray-800">: Dr. Ir. S. P. Widodo, M.Kom.</span>
                    </div>
                    <div class="detail-item flex mb-2">
                        <span class="detail-label font-medium text-gray-600">Alasan Dosen</span>
                        <span class="flex-1 text-gray-800">: Mahasiswa ini memiliki nilai bagus di mata kuliah terkait dan aktif bertanya.</span>
                    </div>
                    <div class="detail-item flex">
                        <span class="detail-label font-medium text-gray-600">Status Persetujuan Dosen</span>
                        <span class="flex-1 text-green-600 font-bold">: Disetujui</span>
                    </div>
                </div>

                <div class="actions flex justify-between items-center mt-6">
                    <a href="/Admin/Asdos" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">
                        &lt; Kembali
                    </a>
                    <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-medium">
                        Hubungi
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>

</body>
</html>