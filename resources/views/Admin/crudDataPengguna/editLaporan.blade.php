<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Laporan</title>
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
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Edit Laporan: Basis Data (A), 15 Nov 2025</h1>
            
            <form action="/Admin/laporan" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div>
                        <label for="jadwal_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Jadwal</label>
                        <select id="jadwal_id" name="jadwal_id" disabled class="w-full px-4 py-2 border border-gray-200 bg-gray-100 rounded-lg cursor-not-allowed">
                            <option value="1" selected>Basis Data (A) - Senin, 10:00</option>
                            <option value="2">Algoritma (C) - Selasa, 13:00</option>
                        </select>
                        <p class="text-xs text-gray-500 mt-1">Jadwal tidak dapat diubah setelah laporan dibuat.</p>
                    </div>

                    <div>
                        <label for="tanggal_laporan" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Laporan</label>
                        <input type="date" id="tanggal_laporan" name="tanggal_laporan" value="2025-11-15" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="kehadiran" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Kehadiran Mhs</label>
                        <input type="number" id="kehadiran" name="kehadiran" value="25" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="topik" class="block text-sm font-medium text-gray-700 mb-1">Topik Bahasan</label>
                        <input type="text" id="topik" name="topik" value="Normalisasi Basis Data" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Detail Kegiatan Asistensi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">Mahasiswa berhasil memahami konsep normalisasi hingga 3NF dan mengerjakan contoh studi kasus.</textarea>
                </div>

                <div class="flex justify-end space-x-3 pt-6 border-t mt-6 border-gray-100">
                    <a href="/Admin/laporan" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">Batal</a>
                    <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-medium">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </main>
</div>

</body>
</html>