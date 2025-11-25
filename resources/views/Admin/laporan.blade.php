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

                                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-12">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-40">
                                Jadwal
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-48">
                                Waktu
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-56">
                                Dosen
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-500 uppercase tracking-wider w-24">
                                Asdos_1
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-500 uppercase tracking-wider w-24">
                                Asdos_2
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-500 uppercase tracking-wider w-40">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        
                        <!-- Contoh Baris Data 1: Asdos Terverifikasi -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                1
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Basis Data (Kelas A)
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Senin, 14:00 - 16:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Siti Aisyah (191101001)</div>
                                <div class="text-sm text-gray-500">Dosen</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Dayat (191101001)</div>
                                <div class="text-sm text-gray-500">Semester 6 / Lulus Matkul</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Ilham (191101001)</div>
                                <div class="text-sm text-gray-500">Semester 4 / Lulus Matkul</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <div class="space-x-2">
                                    {{-- <button class="px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition text-sm">Hapus</button> --}}
                                    <a href="/Admin/editLaporan" class="px-4 py-1 bg-yellow-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Edit</a>
                                    <a href="/Admin/hapusLaporan" class="px-4 py-1 bg-red-600 text-white rounded-md hover:bg-blue-700 transition text-sm">Hapus</a>
                                </div>
                            </td>
                        </tr>

                        <!-- Tambahkan baris data lainnya di sini... -->

                    </tbody>
                </table>
            </div>
    </main>
</div>

</body>
</html>