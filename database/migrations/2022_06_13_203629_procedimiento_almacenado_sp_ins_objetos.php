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
        $procedimiento = "CREATE PROCEDURE SP_INS_OBJETO (IN _objeto Varchar(255),IN _tipo_objeto varchar(255), IN _des varchar(255)
        )
BEGIN
INSERT INTO tbl_objetos (objeto,tip_objeto,des )
                       
VALUES  ( _objeto,_tipo_objeto,_des);
END";
DB::unprepared($procedimiento);
       
    }
////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_INS_OBJETO ("Personas","Tabla","tabla donde se guardan las personas")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_OBJETO";
        DB::unprepared($procedimiento);
    }
};
