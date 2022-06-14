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
        $procedimiento = "CREATE PROCEDURE SP_UPD_ROL (IN _Cod_Rol Bigint(20),IN _des Varchar(255))
BEGIN
UPDATE tbl_roles 
Set 
des = _des

WHERE Cod_Rol = _Cod_Rol;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_UPD_ROL ("AUXILIAR")


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_ROL";
        DB::unprepared($procedimiento);
    }
};
