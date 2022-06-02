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
        Schema::create('tbl_cartera', function (Blueprint $table) {
            $table->bigIncrements('COD_CARTERA');
            $table->float('VALOR_ACUMULADO', 10,2);
            $table->float('SALDO', 10,2);
            $table->unsignedBigInteger('COD_ESTADO');
            $table->string('OBSERVACIONES');
            $table->foreign('COD_ESTADO')->references('COD_ESTADO')->on('tbl_estado');
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
        Schema::dropIfExists('tbl_cartera');
    }
};
