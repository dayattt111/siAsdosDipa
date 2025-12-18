<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->where('username', 'admin')->update([
            'nim' => '001',
            'no_hp' => '081234567890',
            'gambar' => 'default.jpg',
        ]);

        DB::table('users')->where('username', 'dosen')->update([
            'nim' => 'DOSEN001',
            'no_hp' => '082345678901',
            'gambar' => 'default.jpg',
        ]);

        DB::table('users')->where('username', 'mahasiswa')->update([
            'nim' => '2024001',
            'no_hp' => '083456789012',
            'gambar' => 'default.jpg',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->update([
            'nim' => null,
            'no_hp' => null,
            'gambar' => null,
        ]);
    }
};
