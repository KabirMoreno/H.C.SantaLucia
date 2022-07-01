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
        Schema::create('tbl_gestion_conserjes', function (Blueprint $table) {
            $table->bigIncrements('Cod_Conserje')->comment("Llave Primaria");
            $table->unsignedBigInteger('Cod_Gestion')->comment("Llave Foranea");
            $table->string('Obs')->comment("Observación");
            $table->string('Img')->comment("Imagen");
            $table->foreign('Cod_Gestion')->references('Cod_Gestion')->on('tbl_gestion_clientes')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_gestion_conserjes');
    }
};
