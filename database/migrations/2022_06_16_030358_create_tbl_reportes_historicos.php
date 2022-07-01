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
        Schema::create('tbl_reportes_historicos', function (Blueprint $table) {
            $table->bigIncrements('Cod_rep_historicos')->comment("Llave Pirmaria");
            $table->string('Tit')->comment("Titulo");
            $table->string('Tip')->comment("Tipo");
            $table->string('Forma')->comment("Formato");
            $table->string('Tipo_generacion')->comment("Tipo de Generacion");
            $table->string('Fec_inicial')->comment("Fecha de inicio");
            $table->string('Fec_final')->comment("Fecha final");
            $table->string('Corr_enviado')->comment("Corro Enviado");
            $table->string('Fec_registro')->comment("Fecha de registro");
            $table->unsignedBigInteger('Cod_reporte')->comment("Llave Foranea");
            $table->foreign('Cod_reporte')->references('Cod_reporte')->on('tbl_reportes')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_reportes_historicos');
    }
};
