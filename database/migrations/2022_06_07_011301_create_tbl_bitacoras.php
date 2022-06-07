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
        Schema::create('tbl_bitacoras', function (Blueprint $table) {
            $table->bigIncrements('Cod_bitacora')->comment("Llave Primaria");
            $table->unsignedBigInteger('Cod_usuario')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_tipo_bitacora')->comment("Llave Foranea");
            $table->string('Nom_modulo')->comment("Nombre del Modulo");
            $table->string('Nom_reporte')->comment("Nombre del Reporte");
            $table->string('Info')->comment("Informacion");
            $table->datetime('Fec_creacion')->comment("Fecha de Creacion");
            $table->foreign('Cod_usuario')->references('id')->on('users') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_tipo_bitacora')->references('Cod_tipo_bitacora')->on('tbl_tipo_bitacoras') ->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_bitacoras');
    }
};
