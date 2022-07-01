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
        $procedimiento = "CREATE PROCEDURE SP_INS_ROLES_OBJETO (IN _rol integer, IN _objeto integer, IN _ins Enum('S', 'N'), IN _eli Enum('S', 'N'), IN _act Enum('S', 'N'), IN _con Enum('S', 'N')
        )
BEGIN
INSERT INTO tbl_roles_objetos (Cod_rol,cod_objeto,Permiso_Insercion,Permiso_Eliminacion,Permiso_Actualización,Permiso_Consultar )
                       
VALUES  ( _rol,_objeto,_ins, _eli, _act, _con);
END";
DB::unprepared($procedimiento);
       
    }
////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_INS_ROLES_OBJETO ("1","1","s","s","s","s")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_ROLES_OBJETO";
        DB::unprepared($procedimiento);
    }
};
