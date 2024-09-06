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
        Schema::create('casnitisoals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('casnitisubkategorisoal_id')->constrained()->onDelete('cascade');
            $table->integer('nomorsoalumum');
            $table->integer('nomorsoalkhusus');
            $table->text('soal');
            $table->text('ja');
            $table->text('jb');
            $table->text('jc');
            $table->text('jd');
            $table->text('je');
            $table->text('js');
            $table->text('alasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casnitisoals');
    }
};
