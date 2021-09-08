<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('company_id');
            $table->enum('truck_type',['Standard','Semi trailer','Truck Pup','Dump Truck']);
            $table->foreign('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('construction_site_id');
            $table->string('description');
            $table->integer('dump_site_id');
            $table->integer('price');
            $table->date('booking_date');
            $table->string('time');
            $table->integer('meter_reading')->nullable();
            $table->integer('fuel_reading')->nullable();
            $table->integer('rent_rate')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
