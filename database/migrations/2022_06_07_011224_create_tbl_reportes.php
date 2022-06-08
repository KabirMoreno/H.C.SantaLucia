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
            $table->unsignedBigInteger('Cod_tipo_reporte')->comment("Llave Foranea");
            $table->string('Nom_modulo', 50)->comment("Nombre del Modulo");
            $table->string('Tip_reporte')->comment("Tipo de Reporte");
            $table->string('Info')->comment("Informacion");
            $table->foreign('Cod_tipo_reporte')->references('Cod_tipo_reporte')->on('tbl_tipo_reportes') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();////ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION NO ES NECESARIO
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
