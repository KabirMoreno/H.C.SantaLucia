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
        $procedimiento = "CREATE PROCEDURE SP_INS_CONSERJES (IN _Cod_Gestion bigint(20), IN _Obs varchar(255), IN _Img varchar(255))
        BEGIN
            INSERT INTO tbl_gestion_conserjes (Cod_Gestion, Obs, Img)
                                            
                  VALUES  (_Cod_Gestion, _Obs, _Img);
        END";
         DB::unprepared($procedimiento);

    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_INS_CONSERJES(1, "TODO BIEN", "AQUI IMAGEN")

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
