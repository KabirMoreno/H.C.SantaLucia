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
        $procedimiento ="CREATE PROCEDURE SP_UPD_CREDITOS (IN _Cod_credito Bigint(20),
        IN _Tip_credito Enum('C', 'M', 'L'),
           IN _Dia_credito Int(11),
           IN _Descr Varchar(255))
BEGIN
UPDATE tbl_creditos 
Set 
Tip_credito = _Tip_credito,
Dia_credito = _Dia_credito,
Descr = _Descr
WHERE Cod_credito = _Cod_credito;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
    ////CALL SP_UPD_CREDITOS (3,'M',80,'ACTUALIZADO')

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_CREDITOS";
        DB::unprepared($procedimiento);
    }
};
