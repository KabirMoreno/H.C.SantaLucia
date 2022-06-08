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
        Schema::create('tbl_roles_objetos', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('cod_rol');
            $table->unsignedBigInteger('Cod_objeto');
            $table->foreign('cod_rol')->references('cod_rol')->on('tbl_roles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Cod_objeto')->references('Cod_objeto')->on('tbl_objetos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Permiso_Insercion');
            $table->string('Permiso_Eliminacion');
            $table->string('Permiso_Actualización');
            $table->string('Permiso_Consultar');
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
        Schema::dropIfExists('tbl_roles_objetos');
    }
};
