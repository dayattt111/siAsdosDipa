<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen - Daftar Asdos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<div class="flex flex-1">
    <aside class="w-64 bg-white shadow-xl border-r border-gray-200 flex flex-col">
        <div class="p-6 border-b border-gray-200 text-center">
            <div class="w-20 h-20 mx-auto bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 text-2xl font-bold mb-2">DSN</div>
            <p class="font-semibold text-gray-700">Panel Dosen</p>
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="/Dosen" class="flex items-center px-4 py-3 rounded-xl bg-blue-600 text-white font-semibold transition-all shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor"><path d="M10 2a5 5 00-5 5v2a2 2 00-2 2v5a2 2 002 2h10a2 2 002-2v-5a2 2 00-2-2V7a5 5 00-5-5zm0 2a3 3 013 3v2H7V7a3 3 013-3zm1 10.158V16h-2v-1.842a1 1 000-1.707v-1.636a1 1 001.531-.832l1.636 1.636a1 1 010 1.414z"/></svg>
                Daftar Asdos
            </a>
            <a href="/Dosen/cekCalonAsdos" class="flex items-center px-4 py-3 rounded-xl text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 010-6 3 3 010 6zm-7 9a7 7 0114 0h-2c-.524-1.31-1.282-2.434-2.188-3.344C11.666 14.12 10.372 15 9 15c-.933 0-1.82-.25-2.584-.719C5.462 13.916 4.704 12.792 4.188 11.488A7 7 003 18z" clip-rule="evenodd"/></svg>
                Cek Calon Asdos
            </a>
        </nav>
        <div class="p-4 border-t border-gray-200">
            <a href="/" class="block w-full text-center bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition font-medium">Logout</a>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-50">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Jadwal Asisten Dosen</h1>

        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow border border-gray-200 w-72">
                <span class="text-gray-500 mr-2">🔍</span>
                <input type="text" placeholder="cari pendaftar / jadwal" class="flex-1 outline-none text-sm" />
            </div>
        </div>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-12">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-40">
                                Nama Asdos
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-48">
                                Mata Kuliah
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-56">
                                Jadwal
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-500 uppercase tracking-wider w-24">
                                Verifikasi
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
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Siti Aisyah (191101001)</div>
                                <div class="text-sm text-gray-500">Semester 6 / Lulus Matkul</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Basis Data (Kelas A)
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Senin, 14:00 - 16:00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Yes
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="/Dosen/detailAsdos" class="px-3 py-1.5 bg-blue-400 text-gray-800 rounded-md hover:bg-blue-500 transition text-xs font-semibold shadow-sm">
                                        Detail
                                    </a>
                                    <a href="/Dosen" class="px-3 py-1.5 bg-yellow-400 text-gray-800 rounded-md hover:bg-blue-500 transition text-xs font-semibold shadow-sm">
                                        Hubungi
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- Tambahkan baris data lainnya di sini... -->

                    </tbody>
                </table>

        <a href="#" class="block text-right mt-4 text-blue-600 hover:underline text-sm">Show more</a>

    </main>
</div>

</body>
</html>