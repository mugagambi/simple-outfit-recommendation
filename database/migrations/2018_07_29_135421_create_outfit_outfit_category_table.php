<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutfitOutfitCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfit_outfit_category', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('outfit_id');
            $table->foreign('outfit_id')->references('id')->on('outfits');
            $table->unsignedInteger('outfit_category_id');
            $table->foreign('outfit_category_id')->references('id')->on('outfit_categories');
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
        Schema::dropIfExists('outfit_outfit_category');
    }
}
