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
        Schema::create('tbl_creditos', function (Blueprint $table) {
            $table->bigIncrements('Cod_credito')->comment("Llave Pirmaria");
            $table->enum("Tip_credito",["C","M","L"])->comment("C=Corto, M=Medio, L=Largo plazo");
            $table->integer('Dia_credito')->comment("Dias del credito");
            $table->string('Descr')->comment("Descripcion del credito");
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
        Schema::dropIfExists('tbl_creditos');
    }
};
