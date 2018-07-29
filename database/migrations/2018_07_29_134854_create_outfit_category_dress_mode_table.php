<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutfitCategoryDressModeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfit_category_dress_mode', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('outfit_category_id');
            $table->foreign('outfit_category_id')->references('id')->on('outfit_categories');
            $table->unsignedInteger('dress_mode_id');
            $table->foreign('dress_mode_id')->references('id')->on('dress_modes');
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
        Schema::dropIfExists('outfit_category_dress_mode');
    }
}
