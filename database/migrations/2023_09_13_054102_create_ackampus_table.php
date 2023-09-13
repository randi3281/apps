<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAckampusTable extends Migration
{
    public function up()
    {
        Schema::create('ackampus', function (Blueprint $table) {
            $table->id();
            $table->string('alias', 100);
            $table->string('nama_kampus', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ackampus');
    }
}
