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
        $procedimiento = "CREATE PROCEDURE Delete_Cobros (IN _Cod_Cobro bigint(20))
        BEGIN
              DELETE FROM tbl_cobros WHERE Cod_Cobro  = _Cod_Cobro;
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
        $procedimiento = "DROP PROCEDURE IF EXISTS Delete_Cobros";
        DB::unprepared($procedimiento);
    }
};
