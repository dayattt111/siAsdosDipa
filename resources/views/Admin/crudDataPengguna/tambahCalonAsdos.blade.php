<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 flex flex-col">

        <div class="p-6 border-b border-gray-200 text-center">
            <div class="w-20 h-20 mx-auto bg-gray-200 rounded-lg"></div>
            <p class="mt-3 font-semibold text-gray-700">Admin Panel</p>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/adminAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 font-medium text-gray-700">Data Pengguna</a>
            <a href="/Admin/Asdos" class="block px-4 py-3 rounded-xl bg-blue-100 text-blue-700 font-semibold">Data Asdos</a>
            <a href="/Admin/calonAsdos" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700">Data Calon Asdos</a>
            <a href="/Admin/kelolaJadwal" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 font-medium text-gray-700">Kelola Jadwal</a>
            <a href="/Admin/laporan" class="block px-4 py-3 rounded-xl hover:bg-blue-100 hover:text-blue-700 font-medium text-gray-700">Laporan</a>
        </nav>

        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 bg-gray-50">

        <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Calon Asdos Baru</h1>

        <div class="max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-gray-200">

            <form action="/Admin/calonAsdos" method="POST">
                @csrf

                <!-- Nama Asdos -->
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 mb-2">Nama Calon Asdos</label>
                    <input type="text" name="nama" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-200 outline-none"
                           placeholder="Masukkan nama asdos">
                </div>

                <!-- Mata Kuliah -->
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 mb-2">Mata Kuliah</label>
                    <input type="text" name="mata_kuliah" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-200 outline-none"
                           placeholder="Masukkan mata kuliah">
                </div>

                <!-- Jadwal -->
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 mb-2">Jadwal</label>
                    <input type="text" name="jadwal" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-200 outline-none"
                           placeholder="Contoh: Senin, 10.00 - 12.00">
                </div>

                <!-- Verifikasi -->
                <div class="mb-6">
                    <label class="block font-medium text-gray-700 mb-2">Verifikasi</label>
                    <select name="verifikasi" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-200 outline-none">
                        <option value="">Pilih Status</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="/Admin/calonAsdos" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>

    </main>
</div>

</body>
</html>
