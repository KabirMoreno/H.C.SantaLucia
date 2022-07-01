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
        $procedimiento = "CREATE PROCEDURE SP_UPD_BITACORAS (IN _Cod_bitacora bigint(20), IN _Usuario varchar(15)
        ,IN _Modificado datetime, IN _Accion Varchar(50), IN Nom_tabla varchar(50))
BEGIN
UPDATE tbl_bitacoras
SET
Usuario = _Usuario,
Modificado = _Modificado,
Accion = _Accion,
Nom_tabla = Nom_tabla
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_BITACORAS";
    DB::unprepared($procedimiento);
    }
};
