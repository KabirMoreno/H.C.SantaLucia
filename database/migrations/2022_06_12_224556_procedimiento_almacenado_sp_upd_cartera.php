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
        $procedimiento = "CREATE PROCEDURE SP_UPD_CARTERAS (IN _Cod_cartera Bigint(20), IN _Val_acumulado double(10,2)
        ,IN _Sal double(10,2), _Obs Varchar(255))
BEGIN
UPDATE tbl_carteras 
Set 
Val_acumulado = _Val_acumulado,
Sal = _Sal,
Obs = _Obs

WHERE Cod_cartera = _Cod_cartera;
END";
                DB::unprepared($procedimiento);
    }
////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_UPD_CARTERAS (1,2000, 5000, "PRUEBA")
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_CARTERAS;";
        DB::unprepared($procedimiento);
    }
};
