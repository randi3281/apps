<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcrepoTable extends Migration
{
    public function up()
    {
        Schema::create('acrepo', function (Blueprint $table) {
            $table->id();
            $table->string('repositori', 100);
            $table->string('username', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acrepo');
    }
}
