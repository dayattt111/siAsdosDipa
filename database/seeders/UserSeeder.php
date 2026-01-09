<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'nama_user' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'nim' => '000000',
            'no_hp' => '081234567890',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        // Dosen
        User::create([
            'nama_user' => 'Dr. Budi Santoso',
            'username' => 'budi.dosen',
            'email' => 'budi@example.com',
            'nim' => '111111',
            'no_hp' => '081234567891',
            'password' => Hash::make('dosen123'),
            'role' => 'dosen'
        ]);

        // Mahasiswa
        User::create([
            'nama_user' => 'Andi Prasetyo',
            'username' => 'andi.mhs',
            'email' => 'andi@example.com',
            'nim' => '222001',
            'no_hp' => '081234567892',
            'password' => Hash::make('mahasiswa123'),
            'role' => 'mahasiswa'
        ]);

        User::create([
            'nama_user' => 'Siti Nurhaliza',
            'username' => 'siti.mhs',
            'email' => 'siti@example.com',
            'nim' => '222002',
            'no_hp' => '081234567893',
            'password' => Hash::make('mahasiswa123'),
            'role' => 'mahasiswa'
        ]);
    }
}
