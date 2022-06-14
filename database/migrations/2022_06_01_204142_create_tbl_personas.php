<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_personas', function (Blueprint $table) {
            $table->bigIncrements('COD_PER');
            $table->integer('DNI');
            $table->string('NOM');
            $table->string('APE');
            $table->string('DIR');
            $table->integer('TEL');
            $table->integer('CEL');
            $table->string('COR');//// agregar
            $table->enum('SEX',["M","F","O"]);//// ESTE ES EL TIPO DE SEXO gregar
            $table->datetime('FEC_REG');
            $table->timestamps();
            $table->softDeletes(); ////ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_personas');
    }
};
