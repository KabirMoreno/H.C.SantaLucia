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
        $procedimiento = "CREATE PROCEDURE  SP_INS_CLIENTES (IN _Cod_empresa Bigint(20)
        ,IN _Cod_persona Bigint(20), IN _Usr_registro Varchar(255))
BEGIN
INSERT INTO tbl_clientes (Cod_empresa, Cod_persona, Usr_registro)
                       
VALUES  ( _Cod_empresa,
	  _Cod_persona,
	  _Usr_registro
	  );
       
       
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    //!CALL SP_INS_CLIENTES (1, 1, "MARTIN PESCADOR")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_CLIENTES";
        DB::unprepared($procedimiento);

    }
};
