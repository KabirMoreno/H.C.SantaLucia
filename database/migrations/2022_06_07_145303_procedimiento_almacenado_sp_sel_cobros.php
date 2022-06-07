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
        $procedimiento = "CREATE PROCEDURE SP_SEL_COBROS(IN _Cod_Cobro bigint(20))
        BEGIN
            SELECT * 
            FROM tbl_cobros
            WHERE Cod_Cobro = _Cod_Cobro;
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_SEL_COBROS";
        DB::unprepared($procedimiento);
    }
};
