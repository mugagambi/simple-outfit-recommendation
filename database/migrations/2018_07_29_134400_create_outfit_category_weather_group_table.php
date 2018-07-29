<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutfitCategoryWeatherGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfit_category_weather_group', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('outfit_category_id');
            $table->foreign('outfit_category_id')->references('id')->on('outfit_categories');
            $table->unsignedInteger('weather_group_id');
            $table->foreign('weather_group_id')->references('id')->on('weather_groups');
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
        Schema::dropIfExists('outfit_category_weather_group');
    }
}
