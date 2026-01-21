<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\MataKuliah;

return new class extends Migration
{
    public function up(): void
    {
        // Update pendaftar records by matching kode_mk with matakuliah table
        $pendaftars = DB::table('pendaftar_asdos')
            ->whereNull('matakuliah_id')
            ->get();

        foreach ($pendaftars as $pendaftar) {
            $matakuliah = MataKuliah::where('kode_mk', $pendaftar->kode_mk)->first();
            
            if ($matakuliah) {
                DB::table('pendaftar_asdos')
                    ->where('id', $pendaftar->id)
                    ->update([
                        'matakuliah_id' => $matakuliah->id
                    ]);
            }
        }
    }

    public function down(): void
    {
        // Revert by setting matakuliah_id back to null for records that match
        DB::table('pendaftar_asdos')->update(['matakuliah_id' => null]);
    }
};
