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
            $table->enum("Tip_sexo",["M","F"])->comment("M=Masculino, F=Femenino");
            $table->enum("Tip_registro",["C","E"])->comment("C=Clientes, E=Empleados");
            $table->datetime('Fec_registro')->comment("Fecha de registro");
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
        Schema::dropIfExists('tbl_personas');
    }
};
