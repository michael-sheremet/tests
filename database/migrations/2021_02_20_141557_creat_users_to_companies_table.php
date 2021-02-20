<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatUsersToCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('user_to_company', function (Blueprint $table) {
            $table->string('company_id');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->primary(['user_id', 'company_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_to_company');
    }
}
