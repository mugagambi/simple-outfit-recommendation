<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWornOutfitOutfitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worn_outfit_outfit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('worn_outfit_id');
            $table->foreign('worn_outfit_id')->references('id')->on('worn_outfits');
            $table->unsignedInteger('outfit_id');
            $table->foreign('outfit_id')->references('id')->on('outfits');
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
        Schema::dropIfExists('worn_outfit_outfit');
    }
}
