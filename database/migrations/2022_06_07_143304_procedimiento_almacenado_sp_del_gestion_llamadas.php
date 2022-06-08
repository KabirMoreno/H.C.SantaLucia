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
        $procedimiento = "CREATE PROCEDURE SP_DEL_GESTION_LLAMADAS (IN _Cod_Llamada bigint(20))
        BEGIN
              DELETE FROM tbl_gestion_llamadas WHERE Cod_Llamada  = _Cod_Llamada;
        END";
        DB::unprepared($procedimiento);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_GESTION_LLAMADAS";
        DB::unprepared($procedimiento);
    }
};
