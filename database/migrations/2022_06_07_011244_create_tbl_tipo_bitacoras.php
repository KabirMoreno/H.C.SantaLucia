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
        Schema::create('tbl_tipo_bitacoras', function (Blueprint $table) {
            $table->bigIncrements('Cod_tipo_bitacora')->comment("Llave Primaria");
            $table->string('Desc')->comment("Descripcion");
            $table->string('Est')->comment("Estado");
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
        Schema::dropIfExists('tbl_tipo_bitacoras');
    }
};
