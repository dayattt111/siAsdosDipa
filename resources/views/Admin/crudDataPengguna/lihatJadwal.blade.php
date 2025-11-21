<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Detail Jadwal</title>
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
            <a href="/Admin/kelolaJadwal" class="block px-4 py-3 rounded-xl bg-blue-500 text-white font-semibold transition-all">Kelola Jadwal</a>
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 transition-all font-medium text-gray-700">Laporan</a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Detail Jadwal Mata Kuliah</h1>
            
            <div class="space-y-4">
                
                <div class="border-b border-gray-100 pb-4">
                    <p class="text-sm font-medium text-gray-500">Mata Kuliah</p>
                    <p class="text-xl font-semibold text-gray-800">Algoritma dan Struktur Data</p>
                </div>
                
                <div class="border-b border-gray-100 pb-4">
                    <p class="text-sm font-medium text-gray-500">Dosen Pengampu</p>
                    <p class="text-lg font-medium text-gray-700">Dr. Rina Kusuma</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Hari</p>
                        <p class="text-lg font-medium text-gray-700">Senin</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Ruangan</p>
                        <p class="text-lg font-medium text-gray-700">Lab Komputer A</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Waktu Mulai</p>
                        <p class="text-lg font-medium text-gray-700">08:00</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Waktu Selesai</p>
                        <p class="text-lg font-medium text-gray-700">09:40</p>
                    </div>
                </div>

                <div class="pt-2">
                    <p class="text-sm font-medium text-gray-500">Semester</p>
                    <p class="text-lg font-medium text-gray-700">Genap 2024/2025</p>
                </div>
            </div>

            <div class="flex justify-start space-x-3 pt-8 border-t mt-6 border-gray-100">
                <a href="/Admin/kelolaJadwal" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">Kembali ke Daftar</a>
                <a href="/Admin/editJadwal" class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-medium">Edit Jadwal</a>
            </div>
        </div>
    </main>
</div>

</body>
</html>