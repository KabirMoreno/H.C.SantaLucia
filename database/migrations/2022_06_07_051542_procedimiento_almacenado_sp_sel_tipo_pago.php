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
        $procedimiento = "CREATE PROCEDURE SP_SEL_TIP_PAGO (IN _Cod_tipo_pago bigint(20))

        BEGIN
        
        SELECT *
        FROM tbl_tipo_pagos
        WHERE Cod_tipo_pago = _Cod_tipo_pago;
        
        END ";
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
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_SEL_TIP_PAGO";
        DB::unprepared($procedimiento);
    }
};
