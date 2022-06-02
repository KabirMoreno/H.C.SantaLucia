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
        Schema::create('tbl_reporte', function (Blueprint $table) {
            $table->bigIncrements('COD_REPORTE');
            $table->unsignedBigInteger('COD_TIPO_REPORTE');
            $table->string('NOMBRE_MODULO', 50);
            $table->string('TIPO_REPORTE');
            $table->string('INFO');
            $table->foreign('COD_TIPO_REPORTE')->references('COD_TIPO_REPORTE')->on('tbl_tipo_reporte');
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
        Schema::dropIfExists('tbl_reporte');
    }
};
