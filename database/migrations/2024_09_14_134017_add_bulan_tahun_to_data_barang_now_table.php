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
        Schema::table('data_barang_now', function (Blueprint $table) {
            // tambahkan kolom bulan bulan: varchar(255) tahun: varchar(255) sebelum kolom created_at
            $table->string('bulan')->nullable();
            $table->string('tahun')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_barang_now', function (Blueprint $table) {
            $table->dropColumn('bulan');
            $table->dropColumn('tahun');
        });
    }
};
