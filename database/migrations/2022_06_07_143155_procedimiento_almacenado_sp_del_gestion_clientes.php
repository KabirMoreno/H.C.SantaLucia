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
        $procedimiento = "CREATE PROCEDURE SP_DEL_GESTION_CLIENTES (IN _Cod_Cliente bigint(20))
        BEGIN
              DELETE FROM tbl_gestion_clientes WHERE Cod_Cliente  = _Cod_Cliente;
        END";
        DB::unprepared($procedimiento);

    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    ////CALL SP_DEL_GESTION_CLIENTES (1)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_GESTION_CLIENTES";
        DB::unprepared($procedimiento);
    }
};
