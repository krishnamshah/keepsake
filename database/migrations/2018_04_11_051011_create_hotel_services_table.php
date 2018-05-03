<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_services', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('service_name');
            $table->string('service_hour');
            $table->enum('service_type',['paid','free'])->default('free');
            $table->string('cost')->nullable();
            $table->string('unit')->nullable();
            $table->text('service_description')->nullable();
            $table->string('remarks')->nullable();
            $table->boolean('enable')->default(1);
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('hotel_services');
    }
}
