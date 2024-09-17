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
        Schema::table('penghapusan', function (Blueprint $table) {
            $table->string('outlet_pencatatan')->nullable()->change();
            $table->string('outlet_actual')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penghapusan', function (Blueprint $table) {
            $table->string('outlet_pencatatan')->nullable(false)->change();
            $table->string('outlet_actual')->nullable(false)->change();
        });
    }
};
