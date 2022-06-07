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
			         ,IN _Interes double(10,2)
			         ,IN _Subtotal Double(10,2)
				 ,IN _Total Double (10,2)) 
		                 
BEGIN
	INSERT INTO tbl_pagos (Cod_tipo_pago, Interes, Subtotal, Total)
                                    
          VALUES  ( _Cod_tipo_pago, 
	                _Interes, 
                    _Subtotal,
		            _Total);
                    
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_PAGO ";
        DB::unprepared($procedimiento);
    }
};