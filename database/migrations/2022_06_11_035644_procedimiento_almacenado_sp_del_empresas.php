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
        $procedimiento = "CREATE PROCEDURE SP_DEL_EMPRESAS (IN _Cod_empresa bigint(20))
        BEGIN
                      DELETE FROM tbl_empresas WHERE Cod_empresa  = _Cod_empresa;
                END;";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESOS ALMACENADO...
    ////CALL SP_DEL_EMPRESAS (3)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_EMPRESAS";
        DB::unprepared($procedimiento);
    }
};
