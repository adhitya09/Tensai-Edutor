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
        Schema::create('pengajars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengajar'); // Nama Pengajar
            $table->string('foto')->nullable(); // Foto Pengajar (path file)
            $table->integer('usia'); // Usia
            $table->string('nomor_telepon'); // Nomor Handphone Pengajar
            $table->string('tingkat_pendidikan'); // Tingkat Pendidikan
            $table->string('sesi_kosong'); // Sesi kosong (contoh: Senin 08:00 - 10:00)
            $table->string('mata_pelajaran'); // Mata Pelajaran yang diajarkan
            $table->string('alamat'); // Alamat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajars');
    }
};
