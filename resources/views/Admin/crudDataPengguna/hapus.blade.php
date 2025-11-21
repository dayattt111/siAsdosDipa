<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Hapus Pengguna</title>
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
            <a href="/adminAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 font-semibold transition-all">Data Pengguna</a>
            <a href="/Admin/Asdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Data Asdos</a>
            <a href="/Admin/calonAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Data Calon Asdos</a>
            <a href="/Admin/kelolaJadwal" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Kelola Jadwal</a>
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Laporan</a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <div class="max-w-xl mx-auto mt-16 bg-white p-8 rounded-xl shadow-2xl border border-red-200 text-center">
            
            <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.3 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Konfirmasi Penghapusan Data</h1>
            
            <p class="text-lg text-gray-600 mb-6">Anda yakin ingin menghapus pengguna ini?</p>
            
            <div class="p-3 bg-red-50 rounded-lg mb-8 border border-red-300">
                <p class="font-semibold text-red-800">Nama: xxx</p>
                <p class="text-red-700 text-sm">NIM: xxx</p>
            </div>
            
            <form action="/adminAsdos" method="POST" class="flex justify-center space-x-4">
                @csrf
                <a href="/adminAsdos" class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">Batal</a>
                
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition font-medium">
                    Ya, Hapus Permanen
                </button>
            </form>
        </div>
    </main>
</div>

</body>
</html>