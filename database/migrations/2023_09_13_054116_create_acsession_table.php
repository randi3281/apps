<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcsessionTable extends Migration
{
    public function up()
    {
        Schema::create('acsession', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('sessionlog1');
            $table->bigInteger('sessionlog2');
            $table->string('username', 100);
            $table->integer('urutansesi');
            $table->string('repo', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acsession');
    }
}
