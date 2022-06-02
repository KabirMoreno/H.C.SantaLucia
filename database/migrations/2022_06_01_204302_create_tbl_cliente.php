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
        Schema::create('tbl_cliente', function (Blueprint $table) {
            $table->bigIncrements('COD_CLIENTE');
            $table->unsignedBigInteger('COD_EMPRESA');
            $table->unsignedBigInteger('COD_PERSONA');
            $table->string('IDENTIDAD');
            $table->foreign('COD_EMPRESA')->references('COD_EMPRESA')->on('tbl_empresa');
            $table->foreign('COD_PERSONA')->references('COD_PERSONA')->on('tbl_personas');
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
        Schema::dropIfExists('tbl_cliente');
    }
};
