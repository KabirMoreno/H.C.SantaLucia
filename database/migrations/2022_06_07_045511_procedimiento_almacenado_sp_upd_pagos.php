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
        $procedimiento = "CREATE PROCEDURE SP_UPD_PAGOS (IN _Cod_pago Bigint(20),
        IN _Cod_tipo_pagos Bigint(20),
           IN _Interes Double(10,2),
           IN _Subtotal Double(10,2),
        IN _Total Double(10,2))
BEGIN
UPDATE tbl_pagos 
Set 
Tip_credito = _Cod_tipo_pagos,
Interes = _Interes,
Subtotal = _Subtotal,
Total = _Total
WHERE Cod_pago = _Cod_pago;
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
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_UPD_PAGOS";
        DB::unprepared($procedimiento);
    }
};
