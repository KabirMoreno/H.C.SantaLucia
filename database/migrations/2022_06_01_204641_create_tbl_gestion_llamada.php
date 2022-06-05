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
        Schema::create('tbl_gestion_llamada', function (Blueprint $table) {
            $table->bigIncrements('Cod_Llamada')->comment("Código de Llamada");
            $table->unsignedBigInteger('Cod_Gestion')->comment("Código de Gestión");
            $table->date('Fec_Llamada')->comment("Fecha de la Llamada");
            $table->date('Fec_Proxima')->comment("Fecha Proxima");
            $table->string('Col', 45)->comment("Colaborador");
            $table->string('Comentario')->comment("Comentario extra");
            $table->foreign('Cod_Gestion')->references('Cod_Gestion')->on('tbl_gestion_cliente')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_gestion_llamada');
    }
};
