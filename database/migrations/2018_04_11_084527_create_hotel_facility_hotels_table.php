<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelFacilityHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_facility_hotels', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotels_id')->unsigned();
            $table->integer('hotel_facility_id')->unsigned();
            $table->foreign('hotels_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('hotel_facility_id')->references('id')->on('hotel_facilities')->onDelete('cascade');
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
        Schema::dropIfExists('hotel_facility_hotels');
    }
}
