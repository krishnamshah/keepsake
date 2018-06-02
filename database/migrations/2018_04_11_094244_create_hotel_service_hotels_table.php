<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelServiceHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_service_hotels', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotels_id')->unsigned();
            $table->integer('hotel_service_id')->unsigned();
            $table->foreign('hotel_service_id')->references('id')->on('hotel_services')->onDelete('cascade');
            $table->foreign('hotels_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_service_hotels');
    }
}
