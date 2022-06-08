<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_ESTADO_USUARIOS', function (Blueprint $table) {
            $table->bigIncrements('Cod_Estado')->comment("llave primaria para codigo de estado de usuario");
            $table->enum('Tip_Estado',["A","B","N"])->comment("A = Activo , B = Bloquiado , N = Nuevo");
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
        Schema::dropIfExists('TBL_ESTADO_USUARIOS');
    }
}
