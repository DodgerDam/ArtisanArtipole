<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMetiersArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metiers_artisans', function (Blueprint $table) {
            $table->foreign(['id_metiers'], 'metiers_artisans_ibfk_1')->references(['id'])->on('metiers');
            $table->foreign(['id_artisans'], 'metiers_artisans_ibfk_2')->references(['id'])->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metiers_artisans', function (Blueprint $table) {
            $table->dropForeign('metiers_artisans_ibfk_1');
            $table->dropForeign('metiers_artisans_ibfk_2');
        });
    }
}
