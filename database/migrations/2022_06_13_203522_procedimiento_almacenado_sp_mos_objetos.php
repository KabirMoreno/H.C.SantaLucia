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
        $procedimiento = "CREATE PROCEDURE SP_MOS_OBJETO ()
        BEGIN
                
                  SELECT * FROM tbl_objetos;
                
                END";
                DB::unprepared($procedimiento);
    }
////PARA LLAMAR AL PROCESO ALMACENADO...
//!CALL SP_MOS_OBJETO()
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_MOS_OBJETO";
        DB::unprepared($procedimiento);
    }
};
    