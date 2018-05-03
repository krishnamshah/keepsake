<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomGallerysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room_gallerys', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('original_name');
            $table->text('filename');
            $table->integer('hotel_rooms_id')->unsigned();;
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
        Schema::dropIfExists('hotel_room_gallerys');
    }
}
