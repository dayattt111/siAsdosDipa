<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        foreach ($mahasiswas as $mahasiswa) {
            User::updateOrCreate(
                ['nim' => $mahasiswa['nim']],
                $mahasiswa
            );
        }
    }
}
