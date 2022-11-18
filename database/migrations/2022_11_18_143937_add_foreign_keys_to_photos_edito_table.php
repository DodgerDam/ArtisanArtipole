<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPhotosEditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos_edito', function (Blueprint $table) {
            $table->foreign(['id_photos'], 'photos_edito_ibfk_1')->references(['id'])->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos_edito', function (Blueprint $table) {
            $table->dropForeign('photos_edito_ibfk_1');
        });
    }
}
