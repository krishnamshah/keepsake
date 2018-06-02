<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('locations');
            $table->text('description')->nullable();
            $table->enum('type', ['car', 'bus', 'zip', 'suv']);
            $table->integer('no_of_People')->default(1)->nullable();
            $table->enum('gare', ['mannual', 'automatic'])->default('mannual');
            $table->enum('fule_option',['petrol','deseal'])->default('petrol');
            $table->float('rate_perday',8,2)->default(00.00)->nullable();
            $table->text('cost_includes_excludes')->nullable();
            $table->enum('diving_option',['with driver','without driver'])->default('with driver');
            $table->enum('driving_option',['4wd','2wd'])->default('2wd');
            $table->string('image')->nullable();
            $table->string('sit_pattern')->nullable();

            $table->integer('user_id')->unsigned()->nullable();

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
        Schema::dropIfExists('vehicle');
    }
}
