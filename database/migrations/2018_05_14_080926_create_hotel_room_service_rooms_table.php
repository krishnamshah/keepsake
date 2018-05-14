<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomServiceRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room_service_rooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('rooms_id');
            $table->unsignedInteger('hotel_room_service_id');
            $table->foreign('rooms_id')->references('id')->on('hotel_rooms')->onDelete('cascade');
            $table->foreign('hotel_room_service_id')->references('id')->on('hotel_room_services')->onDelete('cascade');
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
        Schema::dropIfExists('hotel_room_service_rooms');
    }
}
