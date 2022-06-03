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
        Schema::create('tbl_empresa', function (Blueprint $table) {
            $table->bigIncrements('COD_EMPRESA');
            $table->string('NOM_EMPRESA');
            $table->integer('TEL_EMPRESA');
            $table->string('DIR_EMPRESA');
            $table->string('CONTACTO_EMPRESA');
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
        Schema::dropIfExists('tbl_empresa');
    }
};
