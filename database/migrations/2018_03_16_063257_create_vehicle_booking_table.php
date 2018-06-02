<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_booking', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->enum('booking_status',['booked','cancelled','confirmed'])->default('booked');
            $table->enum('type', ['car', 'bus', 'zip', 'suv']);
            $table->integer('no_of_People')->default(1);
            $table->string('location');
            $table->string('drop_location')->nullable();
            $table->string('rate_perday')->nullable();
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
        Schema::dropIfExists('vehicle_booking');
    }
}
