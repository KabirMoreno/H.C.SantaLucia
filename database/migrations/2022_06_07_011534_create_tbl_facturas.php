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
        Schema::create('tbl_facturas', function (Blueprint $table) {
            $table->bigIncrements('Cod_factura')->comment("Llave Primaria");
            $table->string('Num_factura')->comment("Numero de factura");
            $table->unsignedBigInteger('Cod_cartera')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_cliente')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_credito')->comment("Llave Foranea");
            $table->date('Fec')->comment("Fecha de inicio");
            $table->date('Fec_expiracion')->comment("Fecha de expiracion");
            $table->float('Int_crediticio')->comment("Interes Crediticio");
            $table->unsignedBigInteger('Cod_estado')->comment("Llave Foranea");
            $table->foreign('Cod_cartera')->references('Cod_cartera')->on('tbl_carteras') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_cliente')->references('Cod_cliente')->on('tbl_clientes') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_credito')->references('Cod_credito')->on('tbl_creditos') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_estado')->references('Cod_estado')->on('tbl_estados') ->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_facturas');
    }
};
