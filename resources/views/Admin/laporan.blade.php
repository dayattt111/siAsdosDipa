<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Laporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
            <a href="/Admin/calonAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Data Calon Asdos</a>
            <a href="/Admin/kelolaJadwal" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Kelola Jadwal</a>
            
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl bg-blue-500 text-white font-semibold transition-all">Laporan</a>
        </nav>

        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Laporan Jadwal Asisten Dosen</h1>

        <div class="flex justify-between items-center mb-6">
            <a href="/Admin/tambahLaporan" class="px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition font-medium">
                + Tambah Laporan
            </a>
            
            <button class="px-6 py-2 bg-gray-200 text-gray-700 border border-gray-300 rounded-lg shadow hover:bg-gray-300 transition font-medium">
                Cetak Laporan
            </button>
        </div>

        <div class="space-y-4">
            
            <div class="grid grid-cols-10 gap-4 px-4 py-3 bg-gray-200 rounded-lg font-bold text-gray-700 text-sm shadow-sm">
                <span class="col-span-2">Jadwal</span>
                <span class="col-span-2">Waktu</span>
                <span class="col-span-2">Dosen</span>
                <span class="col-span-2">Asdos</span>
                <span class="col-span-2 text-center">Aksi</span>
            </div>

            <div class="grid grid-cols-10 gap-4 items-center bg-white shadow p-4 rounded-xl border hover:shadow-lg transition text-sm text-gray-700">
                <span class="col-span-2 font-medium truncate">Basis Data (A)</span>
                <span class="col-span-2 truncate">Senin, 10:00</span>
                <span class="col-span-2 truncate">Dr. Ir. Widodo</span>
                <span class="col-span-2 font-semibold truncate">Budi Santoso</span>
                <div class="col-span-2 flex justify-center space-x-2">
                    <a href="/Admin/editLaporan" class="px-3 py-1 bg-yellow-400 text-black rounded-md hover:bg-yellow-500 transition text-xs font-medium">Edit</a>
                    <a href="/Admin/hapusLaporan" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-xs font-medium">Hapus</a>
                </div>
            </div>
            
            <div class="grid grid-cols-10 gap-4 items-center bg-white shadow p-4 rounded-xl border hover:shadow-lg transition text-sm text-gray-700">
                <span class="col-span-2 font-medium truncate">Algoritma (C)</span>
                <span class="col-span-2 truncate">Selasa, 13:00</span>
                <span class="col-span-2 truncate">Prof. Lina</span>
                <span class="col-span-2 font-semibold truncate">Siti Aisyah</span>
                <div class="col-span-2 flex justify-center space-x-2">
                    <a href="/Admin/editLaporan" class="px-3 py-1 bg-yellow-400 text-black rounded-md hover:bg-yellow-500 transition text-xs font-medium">Edit</a>
                    <a href="/Admin/hapusLaporan" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-xs font-medium">Hapus</a>
                </div>
            </div>
            </div>
    </main>
</div>

</body>
</html>