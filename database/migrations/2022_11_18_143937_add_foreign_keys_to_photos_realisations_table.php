<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPhotosRealisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos_realisations', function (Blueprint $table) {
            $table->foreign(['id_photos'], 'photos_realisations_ibfk_1')->references(['id'])->on('photos');
            $table->foreign(['id_artisans'], 'photos_realisations_ibfk_2')->references(['id'])->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos_realisations', function (Blueprint $table) {
            $table->dropForeign('photos_realisations_ibfk_1');
            $table->dropForeign('photos_realisations_ibfk_2');
        });
    }
}
