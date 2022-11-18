<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCertifArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('certif_artisans', function (Blueprint $table) {
            $table->foreign(['id_certifications'], 'certif_artisans_ibfk_1')->references(['id'])->on('certifications');
            $table->foreign(['id_artisans'], 'certif_artisans_ibfk_2')->references(['id'])->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certif_artisans', function (Blueprint $table) {
            $table->dropForeign('certif_artisans_ibfk_1');
            $table->dropForeign('certif_artisans_ibfk_2');
        });
    }
}
