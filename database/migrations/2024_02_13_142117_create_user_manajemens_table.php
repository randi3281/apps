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
        Schema::create('user_manajemen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nik');
            $table->string('password');
            $table->string('posisi');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_manajemen');
    }
};
