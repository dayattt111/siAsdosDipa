<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matakuliah = [
            // Semester 1
            ['kode_mk' => 'PROG101', 'nama_mk' => 'Dasar Pemrograman', 'semester' => 1, 'sks' => 3],
            ['kode_mk' => 'MATH101', 'nama_mk' => 'Kalkulus I', 'semester' => 1, 'sks' => 4],
            ['kode_mk' => 'ALGOR101', 'nama_mk' => 'Algoritma Dasar', 'semester' => 1, 'sks' => 3],
            ['kode_mk' => 'LOGIC101', 'nama_mk' => 'Logika Matematika', 'semester' => 1, 'sks' => 3],
            
            // Semester 2
            ['kode_mk' => 'PROG102', 'nama_mk' => 'Pemrograman Lanjut', 'semester' => 2, 'sks' => 3],
            ['kode_mk' => 'MATH102', 'nama_mk' => 'Kalkulus II', 'semester' => 2, 'sks' => 4],
            ['kode_mk' => 'DS101', 'nama_mk' => 'Struktur Data', 'semester' => 2, 'sks' => 3],
            ['kode_mk' => 'DB101', 'nama_mk' => 'Basis Data I', 'semester' => 2, 'sks' => 3],
            
            // Semester 3
            ['kode_mk' => 'WEBDEV101', 'nama_mk' => 'Pengembangan Web', 'semester' => 3, 'sks' => 3],
            ['kode_mk' => 'DB102', 'nama_mk' => 'Basis Data II', 'semester' => 3, 'sks' => 3],
            ['kode_mk' => 'OS101', 'nama_mk' => 'Sistem Operasi', 'semester' => 3, 'sks' => 3],
            ['kode_mk' => 'NETWORK101', 'nama_mk' => 'Jaringan Komputer', 'semester' => 3, 'sks' => 3],
            
            // Semester 4
            ['kode_mk' => 'WEBDEV102', 'nama_mk' => 'Web Development Lanjut', 'semester' => 4, 'sks' => 3],
            ['kode_mk' => 'SE101', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'semester' => 4, 'sks' => 3],
            ['kode_mk' => 'SECURITY101', 'nama_mk' => 'Keamanan Komputer', 'semester' => 4, 'sks' => 3],
            ['kode_mk' => 'MOBILE101', 'nama_mk' => 'Pemrograman Mobile', 'semester' => 4, 'sks' => 3],
            
            // Semester 5
            ['kode_mk' => 'MOBILE102', 'nama_mk' => 'Aplikasi Mobile Lanjut', 'semester' => 5, 'sks' => 3],
            ['kode_mk' => 'AI101', 'nama_mk' => 'Kecerdasan Buatan', 'semester' => 5, 'sks' => 3],
            ['kode_mk' => 'CLOUD101', 'nama_mk' => 'Cloud Computing', 'semester' => 5, 'sks' => 3],
            ['kode_mk' => 'DEVOPS101', 'nama_mk' => 'DevOps dan CI/CD', 'semester' => 5, 'sks' => 3],
            
            // Semester 6
            ['kode_mk' => 'ML101', 'nama_mk' => 'Machine Learning', 'semester' => 6, 'sks' => 3],
            ['kode_mk' => 'BIGDATA101', 'nama_mk' => 'Big Data Analytics', 'semester' => 6, 'sks' => 3],
            ['kode_mk' => 'IOT101', 'nama_mk' => 'Internet of Things', 'semester' => 6, 'sks' => 3],
            ['kode_mk' => 'BLOCKCHAIN101', 'nama_mk' => 'Blockchain Technology', 'semester' => 6, 'sks' => 3],
            
            // Semester 7
            ['kode_mk' => 'ML102', 'nama_mk' => 'Advanced Machine Learning', 'semester' => 7, 'sks' => 3],
            ['kode_mk' => 'NLP101', 'nama_mk' => 'Natural Language Processing', 'semester' => 7, 'sks' => 3],
            ['kode_mk' => 'CV101', 'nama_mk' => 'Computer Vision', 'semester' => 7, 'sks' => 3],
            ['kode_mk' => 'RESEARCH101', 'nama_mk' => 'Metodologi Penelitian', 'semester' => 7, 'sks' => 2],
            
            // Semester 8
            ['kode_mk' => 'CAPSTONE101', 'nama_mk' => 'Capstone Project I', 'semester' => 8, 'sks' => 4],
            ['kode_mk' => 'CAPSTONE102', 'nama_mk' => 'Capstone Project II', 'semester' => 8, 'sks' => 4],
            ['kode_mk' => 'INTERNSHIP101', 'nama_mk' => 'Magang Industri', 'semester' => 8, 'sks' => 3],
            ['kode_mk' => 'ETHICS101', 'nama_mk' => 'Etika Profesional', 'semester' => 8, 'sks' => 2],
        ];

        foreach ($matakuliah as $mk) {
            MataKuliah::updateOrCreate(
                ['kode_mk' => $mk['kode_mk']],
                $mk
            );
        }
    }
}
