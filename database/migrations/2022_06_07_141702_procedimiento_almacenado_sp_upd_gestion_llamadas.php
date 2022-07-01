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
        $procedimiento = "CREATE PROCEDURE SP_UPD_LLAMADAS (IN _Cod_Llamada bigint(20), IN _Cod_Gestion bigint(20), 
         IN _Col varchar(45), IN _Com varchar(255))
BEGIN
UPDATE tbl_gestion_llamadas
set Cod_Gestion = _Cod_Gestion, 
Fec_Llamada = now(), 
Fec_Proxima = now(), 
Col = _Col, Com = _Com
WHERE Cod_Llamada = _Cod_Llamada;
END";
DB::unprepared($procedimiento);

    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_UPD_LLAMADAS (1,2, "angela canales", "prueba");

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_LLAMADAS";
        DB::unprepared($procedimiento);
    }
};
