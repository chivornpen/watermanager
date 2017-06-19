<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('contactNo');
            $table->string('email');
            $table->string('homeNo');
            $table->string('streetNo');
            $table->integer('village_id');
            $table->integer('district_id');
            $table->integer('commune_id');
            $table->integer('province_id');
            $table->integer('user_id');
            $table->string('cusbc')->nullable();
            $table->string('cusqr')->nullable();
            $table->tinyInteger('cusStatus')->nullable();
            $table->string('authorizer')->nullable();
            $table->date('authorize_date')->nullable();
            $table->string('recordStatus')->nullable();
            $table->integer('recordNum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
