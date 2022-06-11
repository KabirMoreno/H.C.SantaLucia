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
        //
        $procedimiento = "CREATE PROCEDURE SP_DEL_PERSONAS (IN _Cod_persona bigint(20))
        BEGIN
                      DELETE FROM tbl_personas WHERE Cod_persona  = _Cod_persona;
                END";
                DB::unprepared($procedimiento);
        
    }
    ////PARA LLAMAR EL PROCEDIMIENTO ALMACENADO.....
    ////CALL SP_DEL_PERSONAS (1)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_PERSONAS";
        DB::unprepared($procedimiento);
    }
};
