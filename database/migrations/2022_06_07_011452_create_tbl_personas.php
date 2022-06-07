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
        Schema::create('tbl_personas', function (Blueprint $table) {
            $table->bigIncrements('Cod_persona');
            $table->string('DNI')->comment("Identidad");
            $table->string('Nom')->comment("Nombre");
            $table->string('Ape')->comment("Apellido");
            $table->string('Dir')->comment("Direccion Persona");
            $table->integer('Tel')->comment("Telefono");
            $table->integer('Cel')->comment("Celular");
            $table->enum("Tip_resgitro",["C","E"])->comment("C=Clientes, E=Empleados");
            $table->datetime('Fec_registro')->comment("Fecha de registro");
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
        Schema::dropIfExists('tbl_personas');
    }
};
