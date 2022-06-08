<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_preguntas', function (Blueprint $table) {
            $table->bigIncrements('Cod_Pregunta')->comment("Llave Primaria de tabla de preguntas");
            $table->string('pregunta',200);
            $table->integer('creado_por');
            $table->integer('modificado_por');
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
        Schema::dropIfExists('tbl_preguntas');
    }
}
