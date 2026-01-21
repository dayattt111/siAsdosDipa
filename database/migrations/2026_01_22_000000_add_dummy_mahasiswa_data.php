<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Data dummy mahasiswa yang dinamis
        $mahasiswas = [
            [
                'nama_user' => 'Ahmad Rizki',
                'username' => 'ahmadrizki',
                'email' => 'ahmad.rizki@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024001',
                'no_hp' => '081234567890',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ],
            [
                'nama_user' => 'Siti Nurhaliza',
                'username' => 'sitinur',
                'email' => 'siti.nur@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024002',
                'no_hp' => '082345678901',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ],
            [
                'nama_user' => 'Budi Santoso',
                'username' => 'budisantoso',
                'email' => 'budi.santoso@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024003',
                'no_hp' => '083456789012',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ],
            [
                'nama_user' => 'Dewi Lestari',
                'username' => 'dewilestari',
                'email' => 'dewi.lestari@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024004',
                'no_hp' => '084567890123',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ],
            [
                'nama_user' => 'Rindi Cahyani',
                'username' => 'rindica',
                'email' => 'rindi.cahyani@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024005',
                'no_hp' => '085678901234',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ],
            [
                'nama_user' => 'Fikri Pratama',
                'username' => 'fikripr',
                'email' => 'fikri.pratama@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024006',
                'no_hp' => '086789012345',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ],
            [
                'nama_user' => 'Intan Wijaya',
                'username' => 'intanwij',
                'email' => 'intan.wijaya@student.univ.ac.id',
                'password' => bcrypt('password123'),
                'nim' => '2024007',
                'no_hp' => '087890123456',
                'gambar' => 'default.jpg',
                'role' => 'mahasiswa'
            ]
        ];

        // Insert data dummy jika belum ada
        foreach ($mahasiswas as $mahasiswa) {
            DB::table('users')->updateOrInsert(
                ['nim' => $mahasiswa['nim']],
                $mahasiswa
            );
        }
    }

    public function down(): void
    {
        // Hapus data dummy mahasiswa
        DB::table('users')->where('role', 'mahasiswa')->where('nim', 'like', '202400%')->delete();
    }
};
