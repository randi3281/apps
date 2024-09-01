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
        Schema::table('commentonetomanies', function (Blueprint $table) {
            $table->renameColumn('postonetomanie_id', 'postonetomany_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentonetomanies', function (Blueprint $table) {
            $table->renameColumn('postonetomany_id', 'postonetomanie_id');
        });
    }
};
