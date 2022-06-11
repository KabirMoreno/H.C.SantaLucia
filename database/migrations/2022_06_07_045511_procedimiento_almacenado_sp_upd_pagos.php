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
           IN _Inte Double(10,2),
           IN _Sub Double(10,2),
        IN _Tot Double(10,2))
BEGIN
UPDATE tbl_pagos 
Set 
Cod_tipo_pagos = _Cod_tipo_pagos,
Inte = _Inte,
Sub = _Sub,
Tot = _Tot
WHERE Cod_pago = _Cod_pago;
END ";
DB::unprepared($procedimiento);

    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_UPD_PAGOS (3, 1, 20, 20, 20)

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
