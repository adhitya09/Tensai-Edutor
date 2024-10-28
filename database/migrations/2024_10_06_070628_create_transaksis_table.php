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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa'); // Nama Siswa
            $table->string('nama_orang_tua'); // Nama Orang Tua Siswa
            $table->string('tingkat_pendidikan'); // Tingkat Pendidikan
            $table->string('asal_sekolah'); // Asal Sekolah
            $table->string('pilihan_hari'); // Pilihan Hari dalam seminggu
            $table->string('pilihan_waktu'); // Pilihan Waktu Bimbel
            $table->string('mata_pelajaran'); // Mata Pelajaran
            $table->date('rencana_mulai_kelas'); // Rencana Mulai Kelas
            $table->string('nomor_telepon_siswa'); // Nomor Telepon Siswa
            $table->string('nomor_telepon_orang_tua'); // Nomor Telepon Orang Tua
            $table->string('bukti_pembayaran')->nullable(); // Bukti Pembayaran
            $table->enum('status_pembayaran', ['Belum dibayar', 'Sudah dibayar'])->default('Belum dibayar')->nullable(); // Status Pembayaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
