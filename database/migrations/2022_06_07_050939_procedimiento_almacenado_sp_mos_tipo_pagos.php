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
        $procedimiento = "CREATE PROCEDURE SP_MOS_TIPO_PAGOS ()
        BEGIN
        
          SELECT * FROM tbl_tipo_pagos;
        
        END";
        DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALAMACENADO...
    ////CALL SP_MOS_TIPO_PAGOS ()

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_MOS_TIPO_PAGOS";
        DB::unprepared($procedimiento);
    }
};
