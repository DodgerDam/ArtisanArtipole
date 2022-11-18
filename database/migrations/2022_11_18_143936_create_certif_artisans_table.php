<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertifArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certif_artisans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_certifications')->index('id_certifications');
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
        Schema::dropIfExists('certif_artisans');
    }
}
