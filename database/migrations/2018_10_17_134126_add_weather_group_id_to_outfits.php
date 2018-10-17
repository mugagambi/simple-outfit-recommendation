<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeatherGroupIdToOutfits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('outfits', function ($table) {
            $table->unsignedInteger("weathe_group_id")->nullable();
            $table->foreign('weathe_group_id')->references('id')->on('weather_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('outfits', function ($table) {
            $table->dropColumn('weathe_group_id');
        });
    }
}
