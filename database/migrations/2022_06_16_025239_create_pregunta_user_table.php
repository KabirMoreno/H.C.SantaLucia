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
        Schema::create('pregunta_user', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('cod_pregunta');
            $table->unsignedBigInteger('Cod_Usuario');
            $table->foreign('cod_pregunta')->references('Cod_Pregunta')->on('preguntas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Cod_Usuario')->references('Cod_Usuario')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('respuesta',100);
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
        Schema::dropIfExists('pregunta_user');
    }
};
