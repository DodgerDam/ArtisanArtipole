<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPhotosActusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos_actus', function (Blueprint $table) {
            $table->foreign(['id_photos'], 'photos_actus_ibfk_1')->references(['id'])->on('photos');
            $table->foreign(['id_actus'], 'photos_actus_ibfk_2')->references(['id'])->on('actus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos_actus', function (Blueprint $table) {
            $table->dropForeign('photos_actus_ibfk_1');
            $table->dropForeign('photos_actus_ibfk_2');
        });
    }
}
