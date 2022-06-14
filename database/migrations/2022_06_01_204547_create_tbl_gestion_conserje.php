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
        Schema::create('tbl_gestion_conserje', function (Blueprint $table) {
            $table->bigIncrements('COD_CONSERJE');
            $table->unsignedBigInteger('COD_GESTION');
            $table->string('OBSERVACION');
            $table->string('IMAGEN');
            $table->foreign('COD_GESTION')->references('COD_GESTION')->on('tbl_gestion_cliente');
            $table->timestamps();
            $table->softDeletes(); ////ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION
            // te la comes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_gestion_conserje');
    }
};
