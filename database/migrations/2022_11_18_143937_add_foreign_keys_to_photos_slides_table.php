<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPhotosSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos_slides', function (Blueprint $table) {
            $table->foreign(['id_photos'], 'photos_slides_ibfk_1')->references(['id'])->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos_slides', function (Blueprint $table) {
            $table->dropForeign('photos_slides_ibfk_1');
        });
    }
}
