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
        Schema::create('tbl_factura', function (Blueprint $table) {
            $table->bigIncrements('COD_FACTURA');
            $table->string('NUMERO_FACTURA');
            $table->unsignedBigInteger('COD_CARTERA');
            $table->unsignedBigInteger('COD_CLI');
            $table->unsignedBigInteger('COD_CREDITO');
            $table->date('FECHA');
            $table->date('FECHA_EXPIRACION');
            $table->float('INTERES_CREDITICIO');
            $table->unsignedBigInteger('COD_ESTADO');
            $table->foreign('COD_CARTERA')->references('COD_CARTERA')->on('tbl_cartera');
            $table->foreign('COD_CLI')->references('COD_CLI')->on('tbl_cliente');
            $table->foreign('COD_CREDITO')->references('COD_CREDITO')->on('tbl_creditos');
            $table->foreign('COD_ESTADO')->references('COD_ESTADO')->on('tbl_estado');
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
        Schema::dropIfExists('tbl_factura');
    }
};
