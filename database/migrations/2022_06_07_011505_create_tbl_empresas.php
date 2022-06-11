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
        Schema::create('tbl_empresas', function (Blueprint $table) {
            $table->bigIncrements('Cod_empresa')->comment("Llave  Primaria");
            $table->string('Nom_empresa')->comment("Nombre de la empresa");
            $table->integer('Tel_empresa')->comment("Telefono de la empresa");
            $table->string('Dir_empresa')->comment("Direccion Empresa");
            $table->string('Con_empresa')->comment("Contacto de la empresa");
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
        Schema::dropIfExists('tbl_empresas');
    }
};
