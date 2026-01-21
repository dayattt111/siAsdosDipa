<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('asdos', function (Blueprint $table) {
            $table->unsignedBigInteger('matakuliah_id')->nullable()->after('id');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('asdos', function (Blueprint $table) {
            $table->dropForeign(['matakuliah_id']);
            $table->dropColumn('matakuliah_id');
        });
    }
};
