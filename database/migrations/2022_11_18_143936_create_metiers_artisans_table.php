<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetiersArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metiers_artisans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_metiers')->index('id_metiers');
            $table->integer('id_artisans')->index('id_artisans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metiers_artisans');
    }
}
