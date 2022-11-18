<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosRealisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_realisations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_photos')->index('id_photos');
            $table->integer('id_artisans')->index('id_artisans');
            $table->integer('position')->nullable();
            $table->string('legende')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos_realisations');
    }
}
