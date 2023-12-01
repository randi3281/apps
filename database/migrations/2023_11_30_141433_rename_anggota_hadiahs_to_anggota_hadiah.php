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
        Schema::rename('anggota_hadiahs', 'anggota_hadiah');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('anggota_hadiah', 'anggota_hadiahs');
    }
};
