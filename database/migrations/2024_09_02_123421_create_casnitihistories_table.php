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
        Schema::create('casnitihistories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('casnitiakun_id')->constrained()->onDelete('cascade');
            $table->date('tanggal');
            $table->integer('paket');
            $table->string('jenis1');
            $table->string('nilai1');
            $table->string('jenis2');
            $table->string('nilai2');
            $table->string('jenis3');
            $table->string('nilai3');
            $table->string('jenis4');
            $table->string('nilai4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casnitihistories');
    }
};
