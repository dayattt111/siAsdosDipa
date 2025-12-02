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

    <main class="flex-1 p-8">
        <div class="max-w-4xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow-2xl border border-gray-200">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 border-b pb-3">Daftar Asisten Dosen Mata Kuliah Anda</h1>
            
            <div class="mb-6 p-4 bg-gray-50 rounded-xl border border-gray-200">
                <form action="/Dosen" method="post" class="space-y-4 md:space-y-0 md:flex md:items-end md:gap-4">
                    @csrf
                    <div class="flex-grow">
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari Nama Asdos / Mata Kuliah</label>
                        <div class="relative">
                            <input type="text" id="search" name="search" placeholder="Contoh: Budi atau Komputasi" class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </div>

                    <div class="w-full md:w-auto md:min-w-[150px]">
                        <label for="filter_matkul" class="block text-sm font-medium text-gray-700 mb-1">Filter Mata Kuliah</label>
                        <select id="filter_matkul" name="filter_matkul" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Semua Mata Kuliah</option>
                            <option value="komputasi">Komputasi</option>
                            <option value="aljabar">Aljabar Linier</option>
                            <option value="struktur">Struktur Data</option>
                            </select>
                    </div>

                    <button type="submit" class="w-full md:w-auto px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium shadow-md">
                        Terapkan
                    </button>

                </form>
            </div>
            
            <div class="space-y-4">
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Komputasi</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Budi Santoso**</p>
                    </div>
                    <a href="#" 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div> 

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Aljabar Linier</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Sita Dewi**</p>
                    </div>
                    <a href="#" 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Struktur Data</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Joni Iskandar**</p>
                    </div>
                    <a href="https://wa.me/6281234567892?text=Yth.%20Joni,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Struktur%20Data." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div> 
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Aljabar Linier</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Sita Dewi**</p>
                    </div>
                    <a href="https://wa.me/6281234567891?text=Yth.%20Sita,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Aljabar%20Linier." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Struktur Data</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Joni Iskandar**</p>
                    </div>
                    <a href="https://wa.me/6281234567892?text=Yth.%20Joni,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Struktur%20Data." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div> 
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Aljabar Linier</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Sita Dewi**</p>
                    </div>
                    <a href="https://wa.me/6281234567891?text=Yth.%20Sita,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Aljabar%20Linier." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Struktur Data</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Joni Iskandar**</p>
                    </div>
                    <a href="https://wa.me/6281234567892?text=Yth.%20Joni,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Struktur%20Data." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div> 
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Aljabar Linier</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Sita Dewi**</p>
                    </div>
                    <a href="https://wa.me/6281234567891?text=Yth.%20Sita,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Aljabar%20Linier." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-5 bg-white rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                    <div class="mb-3 sm:mb-0">
                        <p class="text-lg font-semibold text-gray-800">Jadwal Struktur Data</p>
                        <p class="text-sm text-gray-600">Asisten Dosen: **Joni Iskandar**</p>
                    </div>
                    <a href="https://wa.me/6281234567892?text=Yth.%20Joni,%20Saya%20Dosen%20Anda.%20Mohon%20konfirmasi%20jadwal%20asistensi%20Struktur%20Data." 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-full shadow-md hover:bg-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.43 2.93A10 10 0 002.58 17.42l-.74 2.5a.5.5 0 00.67.67l2.5-.74A10 10 0 0017.43 2.93zM10 18a8 8 0 110-16 8 8 0 010 16zm-1.5-6.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5zm3 0a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"/></svg>
                        Hubungi via WA
                    </a>
                </div> 
                
            </div>
            <div class="flex justify-between mt-6 pt-3 border-t border-gray-100">
                <a href="/Dosen" class="text-sm font-medium text-blue-600 hover:text-blue-800 transition"><< Kembali</a>
                {{-- <a href="/Dosen/semuaAsdos" class="text-sm font-medium text-blue-600 hover:text-blue-800 transition">Lihat Semua >></a> --}}
            </div>
        </div>
    </main>
</div>

</body>
</html>