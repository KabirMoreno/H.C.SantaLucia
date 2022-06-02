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
            $table->bigIncrements('COD_CREDITO');
            $table->enum("TIPO_CREDITO",["C","M","L"]);
            $table->integer('DIAS_CREDITO');
            $table->string('DESCRIPCION');
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
        Schema::dropIfExists('tbl_creditos');
    }
};
