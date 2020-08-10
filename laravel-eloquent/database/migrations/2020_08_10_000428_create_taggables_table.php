<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('tag_id')->unsigned();

            /**
             * CADA RELACIÓN POLIFORMICA DEBE TERMINAR EN able
             * ESTE CAMPO VA CREAR 2 CAMPOS UNA QUE HACE REFERENCIA AL ID, Y OTRO A LA ENTIDAD
             */
            $table->morphs('taggable');

            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('tags')
                //PARA QUE AL ELIMINAR O ACTUALIZAR AFECTE TAMBIEN A ESTA TABLA
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggables');
    }
}
