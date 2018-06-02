<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravellerBookedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourtraveller_booked', function (Blueprint $table) {
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
        Schema::dropIfExists('traveller_booked');
    }
}
