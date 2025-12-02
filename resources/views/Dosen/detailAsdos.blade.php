<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen - Detail Calon Asdos</title>
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
            <div class="w-20 h-20 mx-auto bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 text-2xl font-bold mb-2">DSN</div>
            <p class="font-semibold text-gray-700">Panel Dosen</p>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/Dosen" class="flex items-center px-4 py-3 rounded-xl text-white bg-blue-600 hover:bg-blue-100 hover:text-blue-700 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor"><path d="M10 2a5 5 00-5 5v2a2 2 00-2 2v5a2 2 002 2h10a2 2 002-2v-5a2 2 00-2-2V7a5 5 00-5-5zm0 2a3 3 013 3v2H7V7a3 3 013-3zm1 10.158V16h-2v-1.842a1 1 000-1.707v-1.636a1 1 001.531-.832l1.636 1.636a1 1 010 1.414z"/></svg>
                Daftar Asdos
            </a>
            <a href="/Dosen/cekCalonAsdos" class="flex items-center px-4 py-3 rounded-xl  hover:bg-blue-100 hover:text-blue-700 font-semibold transition-all shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 010-6 3 3 010 6zm-7 9a7 7 0114 0h-2c-.524-1.31-1.282-2.434-2.188-3.344C11.666 14.12 10.372 15 9 15c-.933 0-1.82-.25-2.584-.719C5.462 13.916 4.704 12.792 4.188 11.488A7 7 003 18z" clip-rule="evenodd"/></svg>
                Cek Calon Asdos
            </a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition font-medium">Logout</a>
        </div>
    </aside>
    <main class="flex-1 p-8 bg-gray-50">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Detail Asdos</h1>
            
            <form action="/Dosen" method="POST">
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
                    <a href="/Dosen" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">
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