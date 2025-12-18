<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            'nama_user' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'nama_user' => 'dosen',
            'username' => 'dosen',
            'email' => 'dosen@mail.com',
            'password' => Hash::make('dosen123'),
            'role' => 'dosen',
        ]);
        DB::table('users')->insert([
            'nama_user' => 'mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@mail.com',
            'password' => Hash::make('mahasiswa123'),
            'role' => 'mahasiswa',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
