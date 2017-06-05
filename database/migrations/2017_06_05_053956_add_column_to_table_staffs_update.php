<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTableStaffsUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->string('authorizer')->nullable();
            $table->date('authorize_date')->nullable();
            $table->string('recordStatus')->nullable();
            $table->integer('recordNum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staffs', function (Blueprint $table) {
            //
        });
    }
}
