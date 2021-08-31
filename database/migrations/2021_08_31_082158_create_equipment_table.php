<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('truck_type')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->enum('fuel',['Diesel','Petrol','Electric'])->nullable();
            $table->integer('mileage');
            $table->integer('capacity')->nullable();
            $table->string('truck_location',)->nullable();
            $table->string('city')->nullable();
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
        Schema::dropIfExists('equipment');
    }
}
