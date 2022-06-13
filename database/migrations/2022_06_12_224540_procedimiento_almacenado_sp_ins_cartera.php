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
        $procedimiento = "CREATE PROCEDURE SP_INS_CARTERAS (IN _Val_acumulado double(10,2)
        ,IN _Sal double(10,2), _Obs Varchar(255))
BEGIN
INSERT INTO tbl_carteras (Val_acumulado, Sal, Obs)
                       
VALUES  ( _Val_acumulado, 
          _Sal,
	  _Obs );
       
       
END";
                DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO....
    //!CALL SP_INS_CARTERAS (1000, 5000, "PRUEBA")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_CARTERAS";
        DB::unprepared($procedimiento);
    }
};
