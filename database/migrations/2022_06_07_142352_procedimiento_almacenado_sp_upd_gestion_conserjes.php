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
        $procedimiento = "CREATE PROCEDURE SP_UPD_GESTION_CONSERJES (IN _Cod_Conserje bigint(20), IN _Cod_Gestion bigint(20), IN _Obs varchar(255), IN _Img varchar(255))
        BEGIN
            UPDATE tbl_gestion_conserjes
            set  Cod_Gestion = _Cod_Gestion, Obs = _Obs, Img = _Img
                 WHERE Cod_Conserje = _Cod_Conserje;
        END";
         DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_UPD_GESTION_CONSERJES (1,1, "ACTUALIZACION", "OTRA IMAGEN")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_GESTION_CONSERJES";
        DB::unprepared($procedimiento);
    }
};
