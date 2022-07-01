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
