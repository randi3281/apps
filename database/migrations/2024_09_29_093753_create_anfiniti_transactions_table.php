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
        Schema::create('anfiniti_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('login_id')->nullable()->constrained('anfiniti_login');
            $table->integer('price')->nullable();
            $table->string('status')->nullable();
            $table->string('snap_token')->nullable();
            $table->string('order_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anfiniti_transaction');
    }
};
