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
        $procedimiento = "CREATE PROCEDURE SP_INS_ROL (IN _des Varchar(255)
        )
BEGIN
INSERT INTO tbl_roles (des )
                       
VALUES  ( _des);
END";
DB::unprepared($procedimiento);
       
    }
////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_INS_ROL ("Auxiliar")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_ROL";
        DB::unprepared($procedimiento);
    }
};
