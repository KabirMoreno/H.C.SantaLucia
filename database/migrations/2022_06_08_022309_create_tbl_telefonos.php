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
        Schema::create('tbl_telefonos', function (Blueprint $table) {
            $table->bigIncrements('Cod_telefono')->comment("Llave Pirmaria");
            $table->integer('Num_telefono')->comment("Numero de teledono");
            $table->enum("Tip_telefono",["F","C","E"])->comment("F=Fijo, C=Celular, E=Empresarial");
            $table->date('Fec_registro')->comment("Fecha de registro");
            $table->string('Usr_registro', 45)->comment("Usuario que lo registro");
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
        Schema::dropIfExists('tbl_telefonos');
    }
};
