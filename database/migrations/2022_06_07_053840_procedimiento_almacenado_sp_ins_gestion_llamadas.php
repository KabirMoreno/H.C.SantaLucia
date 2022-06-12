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
            INSERT INTO tbl_gestion_conserjes (Cod_Gestion, Fec_llamada, Fec_proxima, col, com)
                                            
                  VALUES  (_Cod_Gestion, now(), now(), _Col, _Com);
        END";
        DB::unprepared($procedimiento);

    }
    ////FALTA HACER ESTE PROCESO //*HACERLO 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_INS_CONSERJE";
        DB::unprepared($procedimiento);
    }
};
