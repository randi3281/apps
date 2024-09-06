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
        Schema::table('casnitihistories', function (Blueprint $table) {
            // ganti tipe data nilai 1 - 4 menjadi integer
            $table->integer('nilai1')->change();
            $table->integer('nilai2')->change();
            $table->integer('nilai3')->change();
            $table->integer('nilai4')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('casnitihistories', function (Blueprint $table) {
            $table->string('nilai1')->change();
            $table->string('nilai2')->change();
            $table->string('nilai3')->change();
            $table->string('nilai4')->change();
        });
    }
};
