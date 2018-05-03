<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomBookedGuestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room_booked_guest_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('booking_id');
            $table->string('name');
            $table->enum('gender',['male','female','other']);
            $table->date('dob');
            $table->string('address');
            $table->integer('phone_no');
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
        Schema::dropIfExists('hotel_room_booked_guest_details');
    }
}
