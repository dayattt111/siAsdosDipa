<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\MataKuliah;
use App\Models\PendaftarAsdos;

return new class extends Migration
{
    public function up(): void
    {
        // Fix all pendaftar records by matching kode_mk with matakuliah table
        $pendaftars = PendaftarAsdos::all();

        foreach ($pendaftars as $pendaftar) {
            $matakuliah = MataKuliah::where('kode_mk', $pendaftar->kode_mk)->first();
            
            if ($matakuliah) {
                $pendaftar->update([
                    'matakuliah_id' => $matakuliah->id
                ]);
            }
        }
    }

    public function down(): void
    {
        // No rollback needed for data fixing
    }
};
