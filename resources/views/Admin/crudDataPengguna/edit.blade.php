<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Pengguna</title>
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
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Edit Pengguna: Budi Santoso (13018001)</h1>
            
            <form action="/adminAsdos" method="GET" class="space-y-6">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="Budi Santoso" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan nama pengguna">
                </div>

                <div>
                    <label for="identitas" class="block text-sm font-medium text-gray-700 mb-1">NIM / NIP</label>
                    <input type="text" id="identitas" name="identitas" value="13018001" readonly class="w-full px-4 py-2 border border-gray-200 bg-gray-100 rounded-lg cursor-not-allowed">
                    <p class="text-xs text-gray-500 mt-1">NIM/NIP tidak dapat diubah.</p>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" value="budi.santoso@email.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan email">
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role/Jabatan</label>
                    <select id="role" name="role" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 bg-white">
                        <option value="Admin">Admin</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Mahasiswa" selected>Mahasiswa</option>
                    </select>
                </div>
                
                <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                    <p class="text-sm font-medium text-gray-700">Ubah kata sandi menjadi NIM/NIP?</p>
                    <a href="/Admin/reset-password/1" class="px-4 py-2 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 transition font-medium text-sm">Reset Password</a>
                </div>

                <div class="flex justify-end space-x-3 pt-4">
                    <a href="/adminAsdos" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-medium">Batal</a>
                    <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-medium">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </main>
</div>

</body>
</html>