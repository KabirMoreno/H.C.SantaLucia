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
        Schema::create('tbl_bitacoras', function (Blueprint $table) {
            $table->bigIncrements('Cod_bitacora')->comment("Llave Primaria");
            $table->string('Usuario', 15)->comment("Usuario");
            $table->datetime('Modificado')->comment("Modificacion");
            $table->string('Accion', 50)->comment("Accion");
            $table->string('Nom_tabla', 50)->comment("Nombre de la tabla");
            $table->unsignedBigInteger('Cod_usuario')->comment("Llave Foranea");
            $table->unsignedBigInteger('Cod_Rol')->comment("Llave Foranea");
            $table->string('campo_1')->comment("campò");
            $table->string('campo_2')->comment("campò");
            $table->string('campo_3')->comment("campò");
            $table->string('campo_4')->comment("campò");
            $table->string('campo_5')->comment("campò");
            $table->string('campo_6')->comment("campò");
            $table->string('campo_7')->comment("campò");
            $table->string('campo_8')->comment("campò");
            $table->string('campo_9')->comment("campò");
            $table->string('campo_10')->comment("campò");
            $table->string('campo_11')->comment("campò");
            $table->string('campo_12')->comment("campò");
            $table->string('campo_13')->comment("campò");
            $table->string('campo_14')->comment("campò");
            $table->string('campo_15')->comment("campò");
            $table->string('campo_16')->comment("campò");
            $table->string('campo_17')->comment("campò");
            $table->string('campo_18')->comment("campò");
            $table->string('campo_19')->comment("campò");
            $table->string('campo_20')->comment("campò");
            $table->string('campo_21')->comment("campò");
            $table->string('campo_22')->comment("campò");
            $table->string('campo_23')->comment("campò");
            $table->string('campo_24')->comment("campò");
            $table->string('campo_25')->comment("campò");
            $table->string('campo_26')->comment("campò");
            $table->string('campo_27')->comment("campò");
            $table->string('campo_28')->comment("campò");
            $table->string('campo_29')->comment("campò");
            $table->string('campo_30')->comment("campò");
            $table->string('campo_31')->comment("campò");
            $table->string('campo_32')->comment("campò");
            $table->string('campo_33')->comment("campò");
            $table->string('campo_34')->comment("campò");
            $table->string('campo_35')->comment("campò");
            $table->string('campo_36')->comment("campò");
            $table->string('campo_37')->comment("campò");
            $table->string('campo_38')->comment("campò");
            $table->string('campo_39')->comment("campò");
            $table->string('campo_40')->comment("campò");
            $table->string('campo_41')->comment("campò");
            $table->string('campo_42')->comment("campò");
            $table->string('campo_43')->comment("campò");
            $table->string('campo_44')->comment("campò");
            $table->string('campo_45')->comment("campò");
            $table->string('campo_46')->comment("campò");
            $table->string('campo_47')->comment("campò");
            $table->string('campo_48')->comment("campò");
            $table->string('campo_49')->comment("campò");
            $table->string('campo_50')->comment("campò");
            $table->string('campo_51')->comment("campò");
            $table->foreign('Cod_usuario')->references('Cod_usuario')->on('users') ->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_Rol')->references('Cod_Rol')->on('tbl_roles') ->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('tbl_bitacoras');
    }
};
