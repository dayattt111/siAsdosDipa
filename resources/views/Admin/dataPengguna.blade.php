<!-- Layout Sidebar Laravel dengan Tailwind CDN -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    <!-- SIDEBAR -->
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
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Laporan</a>
        </nav>

        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8 bg-gray-50">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Pengguna</h1>

        <div class="flex justify-between items-center mb-6">
            <a href="/Admin/tambah" class="px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition font-medium">Tambah</a>

            <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow border border-gray-200 w-72">
                <span class="text-gray-500 mr-2">🔍</span>
                <input type="text" placeholder="cari pendaftar / jadwal" class="flex-1 outline-none text-sm" />
            </div>
        </div>

        <!-- USER LIST -->
<div class="space-y-4">
    <div class="flex justify-between items-center bg-white shadow p-4 rounded-xl border hover:shadow-lg transition">
        
        <span class="font-medium text-gray-700 truncate">User 1 (Admin/Dosen/Mahasiswa)</span>
        
        <div class="flex space-x-2 ml-4">
            
            <a href="/Admin/edit" class="px-4 py-1 bg-yellow-400 text-black rounded-md hover:bg-yellow-500 transition text-sm font-medium">Edit</a>
            
            {{-- <a href="/Admin/tambah" class="px-4 py-1 bg-green-600 text-white rounded-md hover:bg-green-700 transition text-sm font-medium">Tambah</a> --}}
            
            <a href="/Admin/Hapus" class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm font-medium">Hapus</a>
        </div>
        
    </div>
</div>

        <a href="/adminAsdos" class="block text-right mt-4 text-blue-600 hover:underline text-sm">Show more</a class="block text-right mt-4 text-blue-600 hover:underline text-sm">Show more</a>

    </main>
</div>

</body>
</html>
