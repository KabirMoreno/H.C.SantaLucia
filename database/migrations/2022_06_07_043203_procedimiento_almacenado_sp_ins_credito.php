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
        $procedimiento = "CREATE PROCEDURE SP_INS_CREDITO (IN _Tip_credito Enum('C','M','L')
        ,IN _Dia_credito Int(11)
        ,IN _Des varchar(255)) 
            
BEGIN
INSERT INTO tbl_creditos (Tip_credito, 
                          Dia_credito, 
                           Descr)
                       
VALUES  ( _Tip_credito, 
       _Dia_credito, 
       _Des);
       
END";
DB::unprepared($procedimiento);


    }
    ////PARA LLAMAR AL PROCESO ALMACENADO..
    //!CALL SP_INS_CREDITO ('C',11,'PRUEBA')

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_CREDITO";

        DB::unprepared($procedimiento);
    }
};
