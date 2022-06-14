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
        $procedimiento = "CREATE PROCEDURE SP_INS_GESTION_LLAMADAS (IN _Cod_Gestion bigint(20), 
         IN _Col varchar(45), IN _Com varchar(255))
        BEGIN
            INSERT INTO tbl_gestion_llamadas (Cod_Gestion, Fec_llamada, Fec_proxima, col, com)
                                            
                  VALUES  (_Cod_Gestion, now(), now(), _Col, _Com);
        END";
        DB::unprepared($procedimiento);

    }
    //// PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_INS_GESTION_LLAMADAS (2, "angela canales", "prueba")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_INS_GESTION_LLAMADAS";
        DB::unprepared($procedimiento);
    }
};
