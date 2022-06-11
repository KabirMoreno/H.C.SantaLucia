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
        $procedimiento = "CREATE PROCEDURE SP_SEL_PAGO (IN _Cod_pago bigint(20))

        BEGIN
        
        SELECT *
        FROM tbl_pagos
        WHERE Cod_pago = _Cod_pago;
        
        END";
        DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_SEL_PAGO (1)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_SEL_PAGO";
        DB::unprepared($procedimiento);
    }
};
