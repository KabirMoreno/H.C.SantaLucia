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
        Schema::create('tbl_rel__per_tel', function (Blueprint $table) {
            $table->bigIncrements('Cod_pertel')->comment("Llave Pirmaria");
            $table->unsignedBigInteger('Cod_persona')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_telefono')->comment("Llave Foranea");
            $table->foreign('Cod_persona')->references('Cod_persona')->on('tbl_personas')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_telefono')->references('Cod_telefono')->on('tbl_telefonos')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_rel__per_tel');
    }
};
