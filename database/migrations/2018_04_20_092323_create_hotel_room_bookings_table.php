<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room_bookings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->enum('booking_status', ['booked', 'unreserved'])->default('booked');
            $table->integer('no_of_people');
            $table->date('start_date')->default(date("Y-m-d"));
            $table->date('end_date')->default(date("Y-m-d"));
            $table->string('booked_by');
            $table->string('phone_no')->default('0000000000');
            $table->string('email');
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
        Schema::dropIfExists('hotel_room_bookings');
    }
}
