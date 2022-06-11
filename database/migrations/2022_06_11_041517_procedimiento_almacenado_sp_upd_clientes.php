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
        $procedimiento = "CREATE PROCEDURE SP_UPD_CLIENTES (IN _Cod_cliente Bigint (20), IN _Cod_empresa Bigint(20)
        ,IN _Cod_persona Bigint(20), IN _Usr_registro Varchar(255))
BEGIN
UPDATE tbl_clientes
Set 
Cod_empresa = _Cod_empresa,
Cod_cliente = _Cod_persona,
Usr_registro = _Usr_registro
	  

WHERE Cod_cliente = _Cod_cliente;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_UPD_CLIENTES (1, 1, 1, "MARLON PESCADOR")


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_CLIENTES";
        DB::unprepared($procedimiento);

    }
};
