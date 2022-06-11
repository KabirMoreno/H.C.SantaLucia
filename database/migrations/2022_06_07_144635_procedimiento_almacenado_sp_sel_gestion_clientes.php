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
        $procedimiento ="CREATE PROCEDURE SP_SEL_GESTION_CLIENTES(IN _Cod_Gestion bigint (20))
							    
        BEGIN
            SELECT * 
            FROM tbl_gestion_clientes
            WHERE Cod_gestion = _Cod_gestion;
        END";
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO....
   //// CALL SP_SEL_GESTION_CLIENTES (2)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_SEL_GESTION_CLIENTES";
        DB::unprepared($procedimiento);
    }
};
