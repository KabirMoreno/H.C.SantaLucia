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
        Schema::create('tbl_reportes_guardados', function (Blueprint $table) {
            $table->bigIncrements('Cod_rep_guardado')->comment("Llave Pirmaria");
            $table->string('Tit')->comment("Titulo");
            $table->string('Tip')->comment("Tipo");
            $table->string('Fec_inicial')->comment("Fecha Inicial");
            $table->string('Fec_final')->comment("Fecha Final");
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
        Schema::dropIfExists('tbl_reportes_guardados');
    }
};
