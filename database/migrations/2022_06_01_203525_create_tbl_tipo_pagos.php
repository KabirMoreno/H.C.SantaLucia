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
        Schema::create('tbl_tipo_pagos', function (Blueprint $table) {
            $table->bigIncrements('Cod_tipo_pago')->comment("Llave Primaria");
            $table->enum("Tip_credito",["T","CH","E"])->comment("T=Transaccion, CH=Cheque, E=Efectivo");
            $table->string('Descripcion')->comment("Descripcion del credito");
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
        Schema::dropIfExists('tbl_tipo_pagos');
    }
};
