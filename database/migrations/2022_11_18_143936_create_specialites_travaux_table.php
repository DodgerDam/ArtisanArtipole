<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialitesTravauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialites_travaux', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_specialites')->index('specialites_travaux_FK');
            $table->integer('id_travaux')->index('specialites_travaux_FK_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialites_travaux');
    }
}
