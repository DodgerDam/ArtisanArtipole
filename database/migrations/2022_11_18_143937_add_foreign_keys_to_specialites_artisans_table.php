<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSpecialitesArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialites_artisans', function (Blueprint $table) {
            $table->foreign(['id_specialites'], 'specialites_artisans_ibfk_1')->references(['id'])->on('specialites');
            $table->foreign(['id_artisans'], 'specialites_artisans_ibfk_2')->references(['id'])->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialites_artisans', function (Blueprint $table) {
            $table->dropForeign('specialites_artisans_ibfk_1');
            $table->dropForeign('specialites_artisans_ibfk_2');
        });
    }
}
