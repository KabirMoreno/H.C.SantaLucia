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
        $procedimiento = "CREATE PROCEDURE SP_INS_BITACORAS (IN _Usuario varchar(15)
        ,IN _Modificado datetime, IN _Accion Varchar(50), IN Nom_tabla varchar(50))
BEGIN
INSERT INTO tbl_bitacoras (Usuario, Modificado, Accion, Nom_tabla)
                       
VALUES  ( _Usuario,
          _Modificado,
          _Accion,
          _Nom_tabla);
       
       
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_BITACORAS";
    DB::unprepared($procedimiento);
    }
};
