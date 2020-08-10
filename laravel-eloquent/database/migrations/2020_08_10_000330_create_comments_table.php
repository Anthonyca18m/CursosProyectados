<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->text('body');

            /**
             * CADA RELACIÓN POLIFORMICA DEBE TERMINAR EN able
             * ESTE CAMPO VA CREAR 2 CAMPOS UNA QUE HACE REFERENCIA AL ID, Y OTRO A LA ENTIDAD
             * CON ESTO INTENTAS SALVAS EL COMENTARIO DE UN POST, O UN VIDEO YA QUE EN LOS DOS CASOS
             * PODRÍA HABER UN COMENTARIO
             */
            $table->morphs('commnetable');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('comments');
    }
}
