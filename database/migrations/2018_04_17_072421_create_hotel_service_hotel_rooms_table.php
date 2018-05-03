<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelServiceHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_service_hotel_rooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotel_rooms_id')->unsigned();
            $table->integer('hotel_room_service_id')->unsigned();
            $table->foreign('hotel_room_service_id')->references('id')->on('hotel_room_services')->onDelete('cascade');
            $table->foreign('hotel_rooms_id')->references('id')->on('hotel_rooms')->onDelete('cascade');
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
        Schema::dropIfExists('hotel_services_hotel_rooms');
    }
}
