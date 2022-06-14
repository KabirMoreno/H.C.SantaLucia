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
        $procedimiento = "CREATE PROCEDURE SP_MOS_ROL ()
        BEGIN
                
                  SELECT * FROM tbl_roles;
                
                END";
                DB::unprepared($procedimiento);
    }
////PARA LLAMAR AL PROCESO ALMACENADO...
//!CALL SP_MOS_ROL()
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_MOS_ROL";
        DB::unprepared($procedimiento);
    }
};
