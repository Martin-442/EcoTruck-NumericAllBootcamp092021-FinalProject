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
            $table->string('truck_type')->nullable(true);
            $table->string('brand')->nullable(true);
            $table->string('model')->nullable(true);
            $table->integer('year')->nullable(true);
            $table->enum('fuel',['Diesel','Petrol','Electric'])->nullable(true);
            $table->integer('mileage');
            $table->integer('capacity')->nullable(true);
            $table->string('truck_location',)->nullable(true);
            $table->string('city');
            $table->integer('postal_code');
            $table->string('specification')->nullable(true);
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
