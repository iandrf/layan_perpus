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
        Schema::create('validasi_t_a_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->string('Judul_penelitian');
            $table->string('Nama_pembimbing');
            $table->string('Tanggal_sidang');
            $table->string('Periode_wisuda');
            $table->string('Upload_TAjurnal');
            $table->string('Karya_ilmiah');
            $table->string('Verifikasi_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi_t_a_s');
    }
};
