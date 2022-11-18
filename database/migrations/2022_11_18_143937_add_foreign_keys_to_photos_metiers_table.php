<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPhotosMetiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos_metiers', function (Blueprint $table) {
            $table->foreign(['id_photos'], 'photos_metiers_ibfk_1')->references(['id'])->on('photos');
            $table->foreign(['id_metiers'], 'photos_metiers_ibfk_2')->references(['id'])->on('metiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos_metiers', function (Blueprint $table) {
            $table->dropForeign('photos_metiers_ibfk_1');
            $table->dropForeign('photos_metiers_ibfk_2');
        });
    }
}
