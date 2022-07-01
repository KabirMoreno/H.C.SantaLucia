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
        Schema::create('tbl_telefonos', function (Blueprint $table) {
                $table->bigIncrements('Cod_telefono')->unsigned()->comment("Llave primaria");;
                $table->string('Descr')->comment("Descripcion");
                $table->decimal('Num', 11)->comment("Numero de telefono");
                $table->enum("Tip_telefono",["F","C"])->comment("F=Fijo, C=Celular");
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
        Schema::dropIfExists('tbl_telefonos');
    }
};
