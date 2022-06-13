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
        $procedimiento = "CREATE PROCEDURE SP_INS_TIPO_PAGO (IN _Tip_credito Enum('T','CH','E')
        ,IN _Descr Varchar(255))
        
            
BEGIN
INSERT INTO tbl_tipo_pagos (Tip_credito, Descr)
                       
VALUES  ( _Tip_credito, 
          _Descr );
       
       
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_INS_TIPO_PAGO ('T', 'PRUEBA')

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_TIPO_PAGO";
        DB::unprepared($procedimiento);
    }
};
