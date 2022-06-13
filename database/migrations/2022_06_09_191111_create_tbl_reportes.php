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
        Schema::create('tbl_reportes', function (Blueprint $table) {
            $table->bigIncrements('Cod_reporte')->comment("Llave Primaria");
            $table->string('Nom_reporte')->comment("Nombre del reporte ");
            $table->enum("Tip_reporte",["D","S","M"])->comment("D=Diario, S=Semanal, M=Mensual");
            $table->enum("Tip_formato",["E","P"])->comment("Excel, P=Pdf");
            $table->string('Det')->comment("Detalles del reporte");
            $table->date('Fec_inicial')->comment("Fecha Inicial");
            $table->date('Fec_final')->comment("Fecha Final");
            $table->unsignedBigInteger('Cod_Gestion')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_Conserje')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_Llamada')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_Cobro')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_pago')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_factura')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_cartera')->comment("Llave Foranea");
            $table->foreign('Cod_Gestion')->references('Cod_Gestion')->on('tbl_gestion_clientes') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_Conserje')->references('Cod_Conserje')->on('tbl_gestion_conserjes') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_Llamada')->references('Cod_Llamada')->on('tbl_gestion_llamadas') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_Cobro')->references('Cod_Cobro')->on('tbl_cobros') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_pago')->references('Cod_pago')->on('tbl_pagos') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_factura')->references('Cod_factura')->on('tbl_facturas') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_cartera')->references('Cod_cartera')->on('tbl_carteras') ->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_reportes');
    }
};
