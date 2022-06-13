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
        $procedimiento = "CREATE PROCEDURE SP_UPD_FACTURAS (IN _Cod_factura Bigint(20), IN _Cod_cartera Bigint(20), IN _Num_factura Varchar(255),
        IN _Cod_cliente Bigint(20), IN _Cod_credito Bigint(20), IN _Int_crediticio Double(10,2), IN _Cod_estado Bigint(20))
BEGIN
UPDATE tbl_facturas
Set 
Num_factura = _Num_factura, 
Cod_cartera = _Cod_cartera,
Cod_credito = _Cod_credito,
Fec = now(),
Fec_expiracion = now(),
Int_crediticio = _Int_crediticio,
Cod_estado = _Cod_estado 

WHERE Cod_factura = _Cod_factura;
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_FACTURAS";
        DB::unprepared($procedimiento);
    }
};
