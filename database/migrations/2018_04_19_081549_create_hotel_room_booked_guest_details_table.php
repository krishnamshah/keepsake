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
            $table->increments('id')->unsigned();
            $table->integer('booking_id')->unsigned();
            $table->string('name');
            $table->enum('gender',['male','female','other']);
            $table->date('dob')->default(date("Y-m-d"));
            $table->string('address');
            $table->string('phone_no')->default('0000000000');

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
        Schema::dropIfExists('hotel_room_booked_guest_details');
    }
}
