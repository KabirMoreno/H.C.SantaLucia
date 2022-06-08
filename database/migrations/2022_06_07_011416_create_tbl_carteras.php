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
        Schema::create('tbl_carteras', function (Blueprint $table) {
            $table->bigIncrements('Cod_cartera')->comment("Llave Primaria");
            $table->float('Val_acumulado', 10,2)->comment("Valor Acumulado");
            $table->float('Sal', 10,2)->comment("Saldo Cartera");
            $table->unsignedBigInteger('Cod_estado')->comment("Llave Foranea");
            $table->string('Obs')->comment("Observaciones");
            $table->foreign('Cod_estado')->references('Cod_estado')->on('tbl_estados') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();// //ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_carteras');
    }
};
