<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomBedTypeRoomsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hotel_room_bed_type_rooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotel_room_bed_type_id');
            $table->integer('rooms_id')->nullable();
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
        //
        Schema::dropIfExists('hotel_room_bed_type_rooms');
    }
}
