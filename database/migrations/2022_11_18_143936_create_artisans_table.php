<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('num_adhÃ©rent', 100)->nullable();
            $table->integer('id_photo_artisan')->index('artisans_FK');
            $table->string('nom', 100)->nullable();
            $table->string('adresse', 100)->nullable();
            $table->string('code_postal', 100)->nullable();
            $table->string('ville', 100)->nullable();
            $table->string('mail', 100)->nullable();
            $table->string('telephone', 100)->nullable();
            $table->string('site', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->text('description_activite')->nullable();
            $table->text('description_entreprise')->nullable();
            $table->binary('logo')->nullable();
            $table->string('latitude', 100)->nullable();
            $table->string('longitude', 100)->nullable();
            $table->string('horaire_jours', 100)->nullable();
            $table->string('horaires', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artisans');
    }
}
