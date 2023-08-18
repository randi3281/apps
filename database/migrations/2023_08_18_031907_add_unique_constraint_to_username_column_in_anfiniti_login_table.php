<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueConstraintToUsernameColumnInAnfinitiLoginTable extends Migration
{
    public function up()
    {
        Schema::table('anfiniti_login', function (Blueprint $table) {
            $table->unique('username');
        });
    }

    public function down()
    {
        Schema::table('anfiniti_login', function (Blueprint $table) {
            $table->dropUnique('anfiniti_login_username_unique');
        });
    }
}
    