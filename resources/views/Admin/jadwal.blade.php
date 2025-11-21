<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Jadwal</title>
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
            <a href="/Admin/kelolaJadwal" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 font-semibold transition-all">Kelola Jadwal</a>
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Laporan</a>
        </nav>

        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Kelola Jadwal</h1>

        <div class="flex justify-between items-center mb-6">
            <a href="/Admin/tambahJadwal" class="px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition font-medium">Tambah</a>

            <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow border border-gray-200 w-72">
                <span class="text-gray-500 mr-2">🔍</span>
                <input type="text" placeholder="cari pendaftar / jadwal" class="flex-1 outline-none text-sm" />
            </div>
        </div>

        {{-- <div class="space-y-4">
            <div class="flex justify-between items-center bg-white shadow p-4 rounded-xl border hover:shadow-xl transition-transform hover:scale-[1.02]">
                <span class="font-medium text-gray-700">Jadwal: Basis Data Kelas A (Dosen: Widodo)</span>
                <div class="space-x-2">
                    <button class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm">Hapus</button>
                    <a href="/Admin/kelolaJadwal/lihat/1" class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Lihat</a>
                </div>
            </div> --}}

            {{-- <div class="flex justify-between items-center bg-white shadow p-4 rounded-xl border hover:shadow-xl transition-transform hover:scale-[1.02]">
                <span class="font-medium text-gray-700">Jadwal: Algoritma Kelas C (Dosen: Lina)</span>
                <div class="space-x-2">
                    <button class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm">Hapus</button>
                    <a href="/Admin/kelolaJadwal/lihat/2" class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Lihat</a>
                </div>
            </div>

            <div class="flex justify-between items-center bg-white shadow p-4 rounded-xl border hover:shadow-xl transition-transform hover:scale-[1.02]">
                <span class="font-medium text-gray-700">Jadwal: Struktur Data Kelas B (Dosen: Rina)</span>
                <div class="space-x-2">
                    <button class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm">Hapus</button>
                    <a href="/Admin/kelolaJadwal/lihat/3" class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Lihat</a>
                </div>
            </div> --}}
            
             <div class="flex justify-between items-center bg-white shadow p-4 rounded-xl border hover:shadow-xl transition-transform hover:scale-[1.02]">
                <span class="font-medium text-gray-700">Jadwal: Komputasi Dasar Kelas A (Dosen: Jack)</span>
                <div class="space-x-2">
                    {{-- <button class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm">Hapus</button> --}}
                    <a href="/Admin/lihatJadwal" class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Lihat</a>
                    <a href="/Admin/editJadwal" class="px-4 py-1 bg-yellow-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Edit</a>
                    <a href="/Admin/hapusJadwal" class="px-4 py-1 bg-red-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Hapus</a>
                </div>
            </div>
        </div>

        <a href="#" class="block text-right mt-4 text-blue-600 hover:underline text-sm">Show more</a>

    </main>
</div>

</body>
</html>