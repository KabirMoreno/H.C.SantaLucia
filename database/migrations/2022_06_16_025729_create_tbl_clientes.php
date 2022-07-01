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
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->bigIncrements('Cod_cliente')->comment("Llave Primaria");
            $table->unsignedBigInteger('Cod_empresa')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_persona')->comment("Llave Foranea");
            $table->string('Usr_registro')->comment("Usuario que lo registro");
            $table->foreign('Cod_empresa')->references('Cod_empresa')->on('tbl_empresas')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_persona')->references('Cod_persona')->on('tbl_personas')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_clientes');
    }
};
