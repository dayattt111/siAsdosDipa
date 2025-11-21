<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen - Daftar Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* CSS Tambahan untuk Modal (dapat diubah ke utility class jika diperlukan) */
        .modal {
            display: none; 
            position: fixed;
            z-index: 50; /* Z-index tinggi */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5); /* Background gelap transparan */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 flex flex-col">
        <div class="p-6 border-b border-gray-200 text-center">
            <div class="w-20 h-20 mx-auto bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold">DSN</div>
            <p class="mt-3 font-semibold text-gray-700">Panel Dosen</p>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/Dosen/daftarAsdos" class="block px-4 py-3 rounded-xl bg-blue-500 text-white font-semibold transition-all">
                Daftar Asdos
            </a>
            <a href="/Dosen/cekCalonAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">
                Cek Calon Asdos
            </a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Daftar Asisten Dosen Anda</h1>
            
            <div class="space-y-3">
                
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 transition">
                    <span class="text-base font-medium text-gray-700">Jadwal Komputasi (Asdos: **Budi**)</span>
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition" onclick="openModal('Budi')">
                        Hubungi
                    </button>
                </div> 

                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 transition">
                    <span class="text-base font-medium text-gray-700">Jadwal Aljabar Linier (Asdos: **Sita**)</span>
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition" onclick="openModal('Sita')">
                        Hubungi
                    </button>
                </div>

                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 transition">
                    <span class="text-base font-medium text-gray-700">Jadwal Struktur Data (Asdos: **Joni**)</span>
                    <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition" onclick="openModal('Joni')">
                        Hubungi
                    </button>
                </div> 
                
            </div>

            <div class="flex justify-end mt-4">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 transition">Lihat Semua >></a>
            </div>
        </div>
    </main>
</div>

</body>
</html>