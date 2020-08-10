<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
                //PARA QUE AL ELIMINAR O ACTUALIZAR AFECTE TAMBIEN A ESTA TABLA
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('videos');
    }
}
