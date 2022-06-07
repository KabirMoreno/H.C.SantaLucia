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
        ,IN _Descripcion Varchar(255))
        
            
BEGIN
INSERT INTO tbl_tipo_pagos (Tip_credito, Descripcion)
                       
VALUES  ( _Tip_credito, 
       _Descripcion );
       
       
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_TIPO_PAGO";
        DB::unprepared($procedimiento);
    }
};
