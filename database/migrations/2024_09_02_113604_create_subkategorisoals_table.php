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
        Schema::create('casnitisubkategorisoals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('casnitikategorisoal_id')->constrained()->onDelete('cascade');
            $table->string('subkategorisoal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casnitisubkategorisoals');
    }
};
