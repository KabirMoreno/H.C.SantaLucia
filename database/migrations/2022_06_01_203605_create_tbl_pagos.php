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
        Schema::create('tbl_pagos', function (Blueprint $table) {
            $table->bigIncrements('COD_PAGOS');
            $table->unsignedBigInteger('COD_TIPO_PAGO');
            $table->float('INTERES', 10,2);
            $table->float('SUBTOTAL', 10,2);
            $table->float('TOTAL', 10,2);
            $table->foreign('COD_TIPO_PAGO')->references('COD_TIPO_PAGO')->on('tbl_tipo_pagos');
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
        Schema::dropIfExists('tbl_pagos');
    }
};
