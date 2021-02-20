<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id',6)->primary();
            $table->string('name');
            $table->unsignedTinyInteger('age');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
