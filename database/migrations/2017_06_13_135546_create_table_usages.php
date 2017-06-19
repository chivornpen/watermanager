<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');            
            $table->integer('startNo');            
            $table->integer('endNo');            
            $table->date('startDate');            
            $table->date('endDate');            
            $table->tinyInteger('isGenerateInv');            
            $table->integer('user_id');            
            $table->integer('auhorizer')->nullable();            
            $table->date('authorize_date')->nullable();
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
        Schema::dropIfExists('usages');
    }
}
