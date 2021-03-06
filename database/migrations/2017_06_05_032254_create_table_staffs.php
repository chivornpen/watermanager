<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStaffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('address');
            $table->string('contactNo');
            $table->string('email');
            $table->integer('ssid');
            $table->string('position');
            $table->double('salary');
            $table->integer('user_id');
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
        Schema::dropIfExists('staffs');
    }
}
