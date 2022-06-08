<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_parametros', function (Blueprint $table) {
            $table->id();
            $table->string('parametro',30); //admin_intentos
            $table->string('valor',30); //admin_vigencia
            $table->unsignedBigInteger('Cod_Usuario');
            $table->foreign('Cod_Usuario')->references('cod_usuario')->on('tbl_usuarios');//llave foranea 
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
        Schema::dropIfExists('tbl_parametros');
    }
}
