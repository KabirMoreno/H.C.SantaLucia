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
        $procedimiento = "CREATE PROCEDURE SP_INS_PAGO (IN _Cod_tipo_pago Bigint(20)
			         ,IN _Inte double(10,2)
			         ,IN _Sub Double(10,2)
				 ,IN _Tot Double (10,2)) 
		                 
BEGIN
	INSERT INTO tbl_pagos (Cod_tipo_pago, Inte, Sub, Tot)
                                    
          VALUES  ( _Cod_tipo_pago, 
	                _Inte, 
                    _Sub,
		            _Tot);
                    
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_INS_PAGO (1, 10, 10, 10)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_PAGO ";
        DB::unprepared($procedimiento);
    }
};