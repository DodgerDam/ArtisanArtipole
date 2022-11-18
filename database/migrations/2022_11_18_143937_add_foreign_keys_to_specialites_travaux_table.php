<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpecialitesTravauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialites_travaux', function (Blueprint $table) {
            $table->foreign(['id_specialites'], 'specialites_travaux_FK')->references(['id'])->on('specialites');
            $table->foreign(['id_travaux'], 'specialites_travaux_FK_1')->references(['id'])->on('travaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialites_travaux', function (Blueprint $table) {
            $table->dropForeign('specialites_travaux_FK');
            $table->dropForeign('specialites_travaux_FK_1');
        });
    }
}
