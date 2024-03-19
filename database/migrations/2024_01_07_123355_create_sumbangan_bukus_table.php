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
        Schema::create('sumbangan_bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->foreignId('petugas_id');
            $table->string('Nomber_wa');
            $table->string('Periode_wisuda');
            $table->string('Judul_buku');
            $table->string('Pengarang');
            $table->string('Tahun_terbitBuku');
            $table->string('Tanggal_pemesananBuku');
            $table->string('Tanggal_penyerahanBuku');
            $table->string('Bukti_pembelian');
            $table->string('Pembelian_denganCara');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumbangan_bukus');
    }
};
