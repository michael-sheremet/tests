<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanies extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->string('id',6)->primary();
            $table->string('name');
            $table->timestamp('started_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
