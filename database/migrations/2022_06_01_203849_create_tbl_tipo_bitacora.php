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
        Schema::create('tbl_tipo_bitacora', function (Blueprint $table) {
            $table->bigIncrements('COD_TIPO_BITACORA');
            $table->string('DESCRIPCION');
            $table->string('ESTADO');
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
        Schema::dropIfExists('tbl_tipo_bitacora');
    }
};
