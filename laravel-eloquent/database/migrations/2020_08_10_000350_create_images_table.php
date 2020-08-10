<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();

            $table->text('url');

            /**
             * CADA RELACIÓN POLIFORMICA DEBE TERMINAR EN able
             * ESTE CAMPO VA CREAR 2 CAMPOS UNA QUE HACE REFERENCIA AL ID, Y OTRO A LA ENTIDAD
             * CON ESTO INTENTAS SALVAS EL IMAGE DE UN POST, O UN COMENTARIO YA QUE EN LOS DOS CASOS
             * PODRÍA HABER UNA IMAGEN
             */
            $table->morphs('commnetable');
            $table->morphs('imageable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
