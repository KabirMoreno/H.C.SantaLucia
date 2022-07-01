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
        $procedimiento = "CREATE PROCEDURE SP_DEL_ROLES_OBJETO (IN _Cod_Objeto int)
        BEGIN
                      DELETE FROM tbl_Objetos WHERE Cod_Objeto  = _Cod_Objeto;
                END";
                DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_DEL_ROLES_OBJETO(1)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_DEL_ROLES_OBJETO";
        DB::unprepared($procedimiento);
    }
};
