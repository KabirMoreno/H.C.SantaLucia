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
        Schema::create('tbl_tipo_reportes', function (Blueprint $table) {
            $table->bigIncrements('Cod_tipo_reporte')->comment("Llave Primaria");
            $table->string('Descr')->comment("Descripcion");
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
        Schema::dropIfExists('tbl_tipo_reportes');
    }
};
