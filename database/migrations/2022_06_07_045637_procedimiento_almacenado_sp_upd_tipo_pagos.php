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
        $procedimiento ="CREATE PROCEDURE SP_UPD_TIPO_PAGOS (IN _Cod_tipo_pago Bigint(20),
        IN _Tip_credito Enum('T', 'CH', 'E'),
        IN _Descr Varchar(255))
     
BEGIN
UPDATE tbl_tipo_pagos 
Set 
Tip_credito = _Tip_credito,
Descr = _Descr

WHERE Cod_tipo_pago = _Cod_tipo_pago;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO
    ////CALL SP_UPD_TIPO_PAGOS (3, 'CH','ACTUALIZADO')

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_UPD_TIPO_PAGOS";
        DB::unprepared($procedimiento);
    }
};
