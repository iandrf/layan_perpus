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
        Schema::create('penyerahan_k_p_s', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('mahasiswa_id');
            $table->foreignId('petugas_id');
            $table->string('Judul_laporanKP');
            $table->string('Tanggal_penyerahan');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyerahan_k_p_s');
    }
};
