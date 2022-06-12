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
        $procedimiento = "CREATE PROCEDURE `SP_SEL_USUARIOS`(IN _Cod_usuario bigint(20))
        BEGIN
                
                SELECT *
                FROM tbl_usuarios
                WHERE Cod_usuario = _Cod_usuario;
                
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_SEL_USUARIOS";
        DB::unprepared($procedimiento);
    }
};
