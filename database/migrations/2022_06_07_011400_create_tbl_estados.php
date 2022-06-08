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
        Schema::create('tbl_estados', function (Blueprint $table) {
            $table->bigIncrements('Cod_estado')->comment("Llave Pirmaria");
            $table->enum("Tip_estado",["A","M","X"])->comment("A=Activo, M=Mora, X=Expirado");
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
        Schema::dropIfExists('tbl_estados');
    }
};
