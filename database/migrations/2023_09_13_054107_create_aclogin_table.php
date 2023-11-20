<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcloginTable extends Migration
{
    public function up()
    {
        Schema::create('aclogin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username', 100);
            $table->string('password', 100);
            $table->integer('pin');
            $table->integer('keslog');
            $table->integer('minkode')->nullable();
            $table->string('kampus', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aclogin');
    }
}
