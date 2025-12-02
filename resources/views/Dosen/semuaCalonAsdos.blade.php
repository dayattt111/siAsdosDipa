<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen - Cek Calon Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<div class="flex flex-1">
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 flex flex-col">
        <div class="p-6 border-b border-gray-200 text-center">
            <div class="w-20 h-20 mx-auto bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 text-2xl font-bold mb-2">DSN</div>
            <p class="font-semibold text-gray-700">Panel Dosen</p>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/Dosen" class="flex items-center px-4 py-3 rounded-xl text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor"><path d="M10 2a5 5 00-5 5v2a2 2 00-2 2v5a2 2 002 2h10a2 2 002-2v-5a2 2 00-2-2V7a5 5 00-5-5zm0 2a3 3 013 3v2H7V7a3 3 013-3zm1 10.158V16h-2v-1.842a1 1 000-1.707v-1.636a1 1 001.531-.832l1.636 1.636a1 1 010 1.414z"/></svg>
                Daftar Asdos
            </a>
            <a href="/Dosen/cekCalonAsdos" class="flex items-center px-4 py-3 rounded-xl bg-blue-600 text-white font-semibold transition-all shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 010-6 3 3 010 6zm-7 9a7 7 0114 0h-2c-.524-1.31-1.282-2.434-2.188-3.344C11.666 14.12 10.372 15 9 15c-.933 0-1.82-.25-2.584-.719C5.462 13.916 4.704 12.792 4.188 11.488A7 7 003 18z" clip-rule="evenodd"/></svg>
                Cek Calon Asdos
            </a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition font-medium">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8">
        <div class="max-w-4xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow-2xl border border-gray-200">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 border-b pb-3">Daftar Calon Asisten Dosen</h1>
            
            <div class="space-y-4">
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-gray-50 rounded-xl border border-gray-200 hover:shadow-md transition">
                    <div class="mb-3 sm:mb-0">
                        <span class="text-base font-medium text-gray-700">Calon Asdos: **Budi Santoso**</span>
                        <p class="text-xs text-gray-500">Mendaftar untuk: Senin, 09.00</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="/Dosen/komentar/232220" class="px-3 py-2 bg-yellow-500 text-white text-sm rounded-lg hover:bg-yellow-600 transition font-medium">
                            Komentar
                        </a>
                        <a href="/Dosen/detail" class="px-3 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition font-medium">
                            Detail
                        </a>
                    </div>
                </div> 

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-gray-50 rounded-xl border border-gray-200 hover:shadow-md transition">
                    <div class="mb-3 sm:mb-0">
                        <span class="text-base font-medium text-gray-700">Calon Asdos: **Siti Aisyah**</span>
                        <p class="text-xs text-gray-500">Mendaftar untuk: Selasa, 13.00</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="/Dosen/komentar/232221" class="px-3 py-2 bg-yellow-500 text-white text-sm rounded-lg hover:bg-yellow-600 transition font-medium">
                            Komentar
                        </a>
                        <a href="/Dosen/detailCalonAsdos/232221" class="px-3 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition font-medium">
                            Detail
                        </a>
                    </div>
                </div> 

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-white rounded-xl border border-gray-300 opacity-60">
                    <div class="mb-3 sm:mb-0">
                        <span class="text-base font-medium text-gray-700">Calon Asdos: **Joni Iskandar**</span>
                        <p class="text-xs text-red-500 font-semibold">Status: Sudah Ditolak</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-2 bg-gray-400 text-white text-sm rounded-lg cursor-not-allowed font-medium" disabled>
                            Komentar
                        </button>
                        <button class="px-3 py-2 bg-gray-400 text-white text-sm rounded-lg cursor-not-allowed font-medium" disabled>
                            Detail
                        </button>
                    </div>
                </div> 
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-white rounded-xl border border-gray-300 opacity-60">
                    <div class="mb-3 sm:mb-0">
                        <span class="text-base font-medium text-gray-700">Calon Asdos: **Joni Iskandar**</span>
                        <p class="text-xs text-red-500 font-semibold">Status: Sudah Ditolak</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-2 bg-gray-400 text-white text-sm rounded-lg cursor-not-allowed font-medium" disabled>
                            Komentar
                        </button>
                        <button class="px-3 py-2 bg-gray-400 text-white text-sm rounded-lg cursor-not-allowed font-medium" disabled>
                            Detail
                        </button>
                    </div>
                </div> 
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-white rounded-xl border border-gray-300 opacity-60">
                    <div class="mb-3 sm:mb-0">
                        <span class="text-base font-medium text-gray-700">Calon Asdos: **Joni Iskandar**</span>
                        <p class="text-xs text-red-500 font-semibold">Status: Sudah Ditolak</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-2 bg-gray-400 text-white text-sm rounded-lg cursor-not-allowed font-medium" disabled>
                            Komentar
                        </button>
                        <button class="px-3 py-2 bg-gray-400 text-white text-sm rounded-lg cursor-not-allowed font-medium" disabled>
                            Detail
                        </button>
                    </div>
                </div> 
                
            </div>
            <div class="flex justify-between mt-6 pt-3 border-t border-gray-100">
                <a href="/Dosen/cekCalonAsdos" class="text-sm font-medium text-blue-600 hover:text-blue-800 transition"><< Kembali</a>
                {{-- <a href="/Dosen/semuaCalonAsdos" class="text-sm font-medium text-blue-600 hover:text-blue-800 transition">Lihat Semua >></a> --}}
            </div>
        </div>

    </main>
</div>

</body>
</html>