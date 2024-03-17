<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_kerja', function (Blueprint $table) {
            $table->id('id_kerja');
            $table->string('Nama');
            $table->string('posisi_kerja');
            $table->string('tempat_kerja');
            $table->date('tahun_masuk');
            $table->date('tahun_keluar');
            $table->string('alasan_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kerja');
    }
};
