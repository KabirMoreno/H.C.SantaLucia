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
        $procedimiento = "CREATE PROCEDURE SP_INS_CONSERJES (IN _Cod_Conserje bigint(20), IN _Cod_Gestion bigint(20), IN _Obs varchar(255), IN _Img varchar(255))
        BEGIN
            INSERT INTO tbl_gestion_conserjes (Cod_Conserje, Cod_Gestion, Obs, Img)
                                            
                  VALUES  ( _Cod_Conserje, _Cod_Gestion, _Obs, _Img);
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
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_INS_CONSERJES";
        DB::unprepared($procedimiento);
    }
};
