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
        $procedimiento = "CREATE PROCEDURE SP_SEL_BITACORAS (IN _Cod_bitacoras bigint(20))
        BEGIN
                
                SELECT *
                FROM tbl_bitacoras
                WHERE Cod_bitacora = _Cod_bitacora;
                
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_SEL_BITACORAS";
        DB::unprepared($procedimiento);
    }
};
