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
        Schema::create('tbl_rel_pertel', function (Blueprint $table) {
            $table->bigIncrements('Cod_rel');
            $table->unsignedBigInteger('Cod_persona')->comment("Llave foranea de la relacion personas");
            $table->unsignedBigInteger('Cod_telefono')->comment("Llave foranea de la relacion telefonos");
            $table->foreign('Cod_persona')->references('Cod_persona')->on('tbl_personas') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_telefono')->references('Cod_telefono')->on('tbl_telefonos') ->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_rel_pertel');
    }
};
