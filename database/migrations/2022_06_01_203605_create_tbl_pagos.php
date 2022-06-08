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
            $table->unsignedBigInteger('Cod_tipo_pago')->comment("Llave Foranea");
            $table->float('Inte', 10,2)->comment("Interes");
            $table->float('Sub', 10,2)->comment("Subtotal");
            $table->float('Tot', 10,2)->comment("Total");
            $table->foreign('Cod_tipo_pago')->references('Cod_tipo_pago')->on('tbl_tipo_pagos') ->constrained()->onUpdate('cascade')->onDelete('cascade');
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
