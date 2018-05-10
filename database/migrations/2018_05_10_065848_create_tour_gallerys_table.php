<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourGallerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_gallerys', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('image');
            $table->integer('tour_id')->unsigned();;
            $table->foreign('tour_id')->references('id')->on('tour_package')->onDelete('cascade');
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
        Schema::dropIfExists('tour_gallerys');
    }
}
