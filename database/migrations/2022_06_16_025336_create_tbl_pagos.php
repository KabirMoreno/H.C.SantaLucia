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
            $table->bigIncrements('Cod_pago')->comment("Llave Pirmaria");
            $table->float('Inte', 10,2)->comment("Interes");
            $table->float('Sub', 10,2)->comment("Subtotal");
            $table->float('Tot', 10,2)->comment("Total");
            $table->enum("Tip_credito",["T","CH","E"])->comment("T=Transaccion, CH=Cheque, E=Efectivo");
            $table->string('Descr')->comment("Descripcion del credito");
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
        Schema::dropIfExists('tbl_pagos');
    }
};
