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
        $procedimiento ="CREATE PROCEDURE SP_DEL_CREDITO (IN _Cod_credito bigint(20))
        BEGIN
              DELETE FROM tbl_creditos WHERE Cod_credito  = _Cod_credito;
        END";
        DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_DEL_CREDITO (3)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_CREDITO";
        DB::unprepared($procedimiento);
    }
};
