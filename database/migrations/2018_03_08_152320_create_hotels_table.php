<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //
        public function up()
    {
        //
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('hotel_name');
            $table->text('description')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('city');
            $table->string('street')->nullable();
            $table->string('house_no')->nullable();
            $table->string('hotel_logo')->nullable();
            $table->string('google_coordinate_latitude')->nullable();
            $table->string('google_coordinate_longitude')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('website')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('hotel_checkIN_time')->nullable();
            $table->string('hotel_checkOUT_time')->nullable();
            $table->string('contact_person_contact')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('updated_user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_user_id')->references('id')->on('users');
            $table->enum('hotel_star_rating',['1','2','3','4','5','6','7'])->nullable();
            $table->string('rating_agency');
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
        //
        Schema::dropIfExists('hotels');
    }

}
