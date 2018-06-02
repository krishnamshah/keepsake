<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_searches', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('hotel_id')->nullable();
            $table->integer('room_id')->nullable();
            $table->string('tag');
            $table->date('start')->default(date("Y-m-d"));
            $table->date('end')->default(date("Y-m-d"));
            $table->integer('no_of_people');
            $table->boolean('booking_status')->nullable();
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
        Schema::dropIfExists('hotel_searches');
    }
}
