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
        $procedimiento = "CREATE PROCEDURE SP_INS_FACTURAS (IN _Num_factura Varchar(255), IN _Cod_cartera Bigint(20), 
        IN _Cod_cliente Bigint(20),IN _Cod_credito Bigint(20), IN _Int_crediticio Double(10,2))
BEGIN
INSERT INTO tbl_facturas (Num_factura, Cod_cartera, Cod_cliente, Cod_credito, Fec, Fec_expiracion, Int_crediticio)
                       
VALUES  ( _Num_factura, 
          _Cod_cartera,
          _Cod_cliente,
	  _Cod_credito,
	  now(),
	  now(),
	  _Int_crediticio );
       
       
END";
                DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO....
    //!CALL SP_INS_FACTURAS ("FOC12",1,1,1,5)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_FACTURAS";
        DB::unprepared($procedimiento);
    }
};
