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
              DELETE FROM tbl_gestion_clientes WHERE Cod_Cliente  = _Cod_Ciente;
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_GESTION_CLIENTES";
        DB::unprepared($procedimiento);
    }
};
