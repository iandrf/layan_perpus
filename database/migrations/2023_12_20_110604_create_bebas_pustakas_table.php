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
        Schema::create('bebas_pustakas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->foreignId('petugas_id')->nullable();
            $table->string('Judul_buku')->nullable();
            $table->string('Pengarang')->nullable();
            $table->string('Tahun_terbit')->nullable();
            $table->string('Tgl_pengajuan')->nullable();
            $table->string('Surat_cutiundur')->nullable();
            $table->string('Bukti_sumbangan')->nullable();
            $table->string('Bukti_karyailmiah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebas_pustakas');
    }
};
