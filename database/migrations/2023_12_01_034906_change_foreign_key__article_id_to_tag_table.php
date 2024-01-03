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
        Schema::dropIfExists('articles');
        Schema::dropIfExists('tags');
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->timestamps();
        });
        Schema::create('tags', function (Blueprint $table) {
            // hapus baris user_id
            $table->increments('id');
            $table->string('tag');
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->index('article_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tags', function (Blueprint $table) {
            // hapus baris user_id
            $table->dropForeign('tags_article_id_foreign');
            $table->dropIndex('tags_article_id_index');
        });
        Schema::dropIfExists('articles');
        Schema::dropIfExists('tags');
    }
};
