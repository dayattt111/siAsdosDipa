<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PendaftarAsdos;
use App\Models\Asdos;

return new class extends Migration
{
    public function up(): void
    {
        // Get all approved pendaftar
        $approvedPendaftars = PendaftarAsdos::where('status', 'disetujui')->get();

        foreach ($approvedPendaftars as $pendaftar) {
            // Check if asdos already exists for this pendaftar
            $existingAsdos = Asdos::where('user_id', $pendaftar->user_id)
                ->where('matakuliah_id', $pendaftar->matakuliah_id)
                ->first();

            // If not exists, create it
            if (!$existingAsdos && $pendaftar->matakuliah) {
                Asdos::create([
                    'user_id' => $pendaftar->user_id,
                    'dosen_id' => $pendaftar->user_id,
                    'matakuliah_id' => $pendaftar->matakuliah_id,
                    'mata_kuliah' => $pendaftar->matakuliah->nama_mk,
                    'kode_mk' => $pendaftar->matakuliah->kode_mk,
                    'semester' => $pendaftar->matakuliah->semester,
                    'deskripsi' => 'Dari pendaftar: ' . ($pendaftar->motivasi ?? 'Tidak ada')
                ]);
            }
        }
    }

    public function down(): void
    {
        // Don't delete asdos records on rollback
    }
};
