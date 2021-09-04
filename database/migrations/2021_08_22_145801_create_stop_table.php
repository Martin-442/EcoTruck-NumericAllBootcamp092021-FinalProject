<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stop', function (Blueprint $table) {
            $table->id();
            $table->string('stop_org');
            $table->string('stop');
            $table->string('NOM_LUXEMBOURGEOIS');
            $table->string('NOM_COMMUNE_ADMINISTRATIVE');
            $table->string('NOM_COMMUNE_CADASTRALE');
            $table->string('NOM_OFFICIEL_LOCALITE');
            $table->string('LOCALITE_OFFICIELLE');
            $table->integer('Y_RECHTS');
            $table->integer('X_HOCH');
            $table->float('LON_LL84');
            $table->float('LAT_LL84');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stop');
    }
}
