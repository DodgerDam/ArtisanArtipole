<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosInspirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_inspirations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_photos')->index('id_photos');
            $table->integer('id_metiers')->index('id_metiers');
            $table->integer('position')->nullable();
            $table->integer('pages')->nullable();
            $table->string('legende', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos_inspirations');
    }
}
