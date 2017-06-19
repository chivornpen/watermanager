<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInvioces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('use_id');
            $table->integer('customer_id');
            $table->date('invDate');
            $table->date('startDate');
            $table->date('endDate');
            $table->double('numUsed');
            $table->double('unitPrice');
            $table->double('amount');
            $table->double('discount');
            $table->double('tax');
            $table->date('invExpireDate');
            $table->string('invStatuts');
            $table->binary('printed');
            $table->integer('user_id');
            $table->string('authorizer')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
