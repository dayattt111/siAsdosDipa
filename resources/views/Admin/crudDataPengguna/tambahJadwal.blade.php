<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Jadwal</title>
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
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Tambah Jadwal Baru</h1>
            
            <form action="/Admin/kelolaJadwal" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="mata_kuliah" class="block text-sm font-medium text-gray-700 mb-1">Mata Kuliah</label>
                        <input type="text" id="mata_kuliah" name="mata_kuliah" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Algoritma dan Struktur Data">
                    </div>

                    <div>
                        <label for="dosen_pengampu" class="block text-sm font-medium text-gray-700 mb-1">Dosen Pengampu</label>
                        <input type="text" id="dosen_pengampu" name="dosen_pengampu" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Dr. Rina Kusuma">
                    </div>

                    <div>
                        <label for="hari" class="block text-sm font-medium text-gray-700 mb-1">Hari</label>
                        <select id="hari" name="hari" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 bg-white">
                            <option value="" disabled selected>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>

                    <div>
                        <label for="ruangan" class="block text-sm font-medium text-gray-700 mb-1">Ruangan</label>
                        <input type="text" id="ruangan" name="ruangan" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Lab Komputer A / R. 201">
                    </div>

                    <div>
                        <label for="waktu_mulai" class="block text-sm font-medium text-gray-700 mb-1">Waktu Mulai</label>
                        <input type="time" id="waktu_mulai" name="waktu_mulai" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="waktu_selesai" class="block text-sm font-medium text-gray-700 mb-1">Waktu Selesai</label>
                        <input type="time" id="waktu_selesai" name="waktu_selesai" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700 mb-1">Semester</label>
                        <input type="text" id="semester" name="semester" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Genap 2024/2025">
                    </div>
                </div>

                <div class="flex justify-end space-x-3 pt-6 border-t mt-6 border-gray-100">
                    <a href="/Admin/kelolaJadwal" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">Batal</a>
                    <button type="submit" class="px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition font-medium">Simpan Jadwal</button>
                </div>
            </form>
        </div>
    </main>
</div>

</body>
</html>