<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('truck_type');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->enum('fuel',['Diesel','Petrol','Electric ']);
            $table->integer('mileage')->nullable();
            $table->string('truck_location');
            $table->string('city');
            $table->integer('postal_code')->nullable();
            $table->string('specification')->nullable();
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
        Schema::dropIfExists('trucks');
    }
}
