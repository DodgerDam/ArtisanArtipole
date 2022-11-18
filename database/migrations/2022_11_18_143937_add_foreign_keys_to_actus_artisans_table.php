<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActusArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actus_artisans', function (Blueprint $table) {
            $table->foreign(['id_actus'], 'actus_artisans_ibfk_1')->references(['id'])->on('actus');
            $table->foreign(['id_artisans'], 'actus_artisans_ibfk_2')->references(['id'])->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actus_artisans', function (Blueprint $table) {
            $table->dropForeign('actus_artisans_ibfk_1');
            $table->dropForeign('actus_artisans_ibfk_2');
        });
    }
}
