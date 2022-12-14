<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actus', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('titre', 100)->nullable();
            $table->longText('contenu')->nullable();
            $table->integer('type')->nullable();
            $table->integer('position')->nullable();
            $table->date('date_ajout')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actus');
    }
}
