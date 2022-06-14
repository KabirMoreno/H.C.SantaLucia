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
        Schema::create('tbl_cliente', function (Blueprint $table) {
            $table->bigIncrements('COD_CLI');
            $table->unsignedBigInteger('COD_EMP');
            $table->unsignedBigInteger('COD_PER');
            $table->string('DIR_CLI');//// AQUI SE AGREGARA LA DORECCION DEL CLIENTE POR SI DEJA DE LABORAR PARA LAEMPRESA
            $table->string('DNI');////ESTE DEBERIA SER UNA FORANEA DE LA TABLA PERSONA
            $table->enum('TIP_CLI',["N","J"]);//// ESTE DEBE DE SER NATURAL(N) O JURIDICO(J)
            $table->enum('EST_LABORAL',["P","C"]);//// ESTE DEBE DE SER PERMANENTE(P) O CPNTRATO(C)
            $table->foreign('COD_EMP')->references('COD_EMP')->on('tbl_empresa');
            $table->foreign('COD_PER')->references('COD_PER')->on('tbl_personas');
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
        Schema::dropIfExists('tbl_cliente');
    }
};
