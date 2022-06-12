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
        Schema::create('TBL_USUARIOS', function (Blueprint $table) {
            $table->bigIncrements('Cod_usuario')->comment("LLave primaria de tabla de usuario");
            $table->string('Nom_Usuario')->comment("Nombre del Usuario");
            $table->string('Correo_Electronico')->unique()->comment("Correo electronico del usuario");
            $table->string('Contrasena')->comment("contraseña del usuario");
            $table->date('Fec_Cambio')->nullable()->comment("Fecha de cambio de contraseña"); 
            $table->unsignedBigInteger('Cod_Estado_Usuario')->comment("Estado del usuario")->comment("LLave Foranea con el estado del usuario");
            $table->foreign('Cod_Estado_Usuario')->references('Cod_Estado')->on('TBL_ESTADO_USUARIOS');
            $table->unsignedBigInteger('Cod_Rol')->comment("Estado del usuario")->comment("LLave Foranea de los roles del usuario"); 
            $table->foreign('Cod_Rol')->references('Cod_Rol')->on('tbl_roles');
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
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
        Schema::dropIfExists('TBL_USUARIOS');
    }
};
