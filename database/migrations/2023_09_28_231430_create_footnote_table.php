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
        Schema::create('footnote', function (Blueprint $table) {
            $table->integer('jumlahfootnoteyangada')->primary();
            $table->integer('id');
            $table->string('username', 100)->nullable();
            $table->string('repositori', 100)->nullable();
            $table->string('penulis_1', 255)->nullable();
            $table->string('penulis_2', 255)->nullable();
            $table->string('penulis_3', 255)->nullable();
            $table->string('penerjemah', 100)->nullable();
            $table->longText('judul')->nullable();
            $table->longText('sumber')->nullable();
            $table->string('volume', 11)->nullable();
            $table->string('nomor', 100)->nullable();
            $table->integer('tahun')->nullable();
            $table->string('halaman_awal', 100)->nullable();
            $table->string('halaman_akhir', 100)->nullable();
            $table->integer('jumlah_penulis')->nullable();
            $table->integer('jenis')->nullable();
            $table->string('judul_web', 100)->nullable();
            $table->string('deskripsi_web', 100)->nullable();
            $table->string('bulan', 100)->nullable();
            $table->string('link_web', 100)->nullable();
            $table->string('tanggal_diakses_web', 100)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('jenisBuku', 100)->nullable();
            $table->integer('asing')->nullable();
            $table->string('penerbit', 100)->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->string('jenisWawancara', 100)->nullable();
            $table->string('waktu', 100)->nullable();
            $table->string('acara', 100)->nullable();
            $table->string('judulAcara', 100)->nullable();
            $table->string('penyelenggaraAcara', 100)->nullable();
            $table->string('cetakan', 100)->nullable();
            $table->string('jilid', 100)->nullable();
            $table->string('tanggal', 100)->nullable();
            $table->string('hari', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footnote');
    }
};
