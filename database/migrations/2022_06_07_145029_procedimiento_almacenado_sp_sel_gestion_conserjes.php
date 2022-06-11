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
        $procedimiento = "CREATE PROCEDURE SP_SEL_GESTION_CONSERJES (_Cod_Conserje bigint(20))
        BEGIN
            SELECT * 
            FROM tbl_gestion_conserjes
            WHERE Cod_Conserje = _Cod_Conserje;
        END";
        DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO....
    ////CALL SP_SEL_GESTION_CONSERJES (2)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_SEL_GESTION_CONSERJES";
        DB::unprepared($procedimiento);
    }
};
