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
        Schema::create('tbl_objetos', function (Blueprint $table) {
            $table->bigIncrements('Cod_Objeto')->comment("Llave primaria de tabla de objetos");
            $table->string('Objeto')->comment("Nombre del objetos");
            $table->string('Tip_Objeto')->comment("Tipo de objetos");
            $table->string('des')->comment("Descripción de objetos");
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
        Schema::dropIfExists('tbl_objetos');
    }
};
