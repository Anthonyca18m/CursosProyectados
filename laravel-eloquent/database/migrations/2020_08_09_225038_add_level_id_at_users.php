<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelIdAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->bigInteger('level_id')->unsigned()
                ->nullable()
                ->after('id');

            $table->foreign('level_id')->references('id')->on('levels')
                // SI EL LEVEL SE ELIMINA, NO SE ELIMINA EL USUARIO SINO QUE LO COLOCA COMO NULL EL VALOR
                ->onDelete('set null')
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
        //
    }
}
