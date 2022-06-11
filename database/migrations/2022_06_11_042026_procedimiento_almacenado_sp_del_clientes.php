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
        $procedimiento = "CREATE PROCEDURE SP_DEL_CLIENTES (IN _Cod_cliente bigint(20))
        BEGIN
                      DELETE FROM tbl_clientes WHERE Cod_cliente  = _Cod_cliente;
                END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_DEL_CLIENTES (3)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_CLIENTES";
        DB::unprepared($procedimiento);
    }
};
