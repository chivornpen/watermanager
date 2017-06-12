<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColunmProvinceIdAndAddColumnDistrictIdToCommunes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('communes', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->integer('district_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('communes', function (Blueprint $table) {
            $table->integer('province_id');
        });
    }
}
