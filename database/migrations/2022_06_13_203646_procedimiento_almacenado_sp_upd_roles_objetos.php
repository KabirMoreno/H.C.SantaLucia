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
        $procedimiento = "CREATE PROCEDURE SP_UPD_ROLES_OBJETO (IN _Cod_objeto integer, IN _ins Enum('S', 'N'), IN _eli Enum('S', 'N'), IN _act Enum('S', 'N'), IN _con Enum('S', 'N'))
BEGIN
UPDATE tbl_roles_objetos
Set 
Cod_objeto = _Cod_objeto,
Permiso_Insercion = _ins,
Permiso_Eliminacion = _eli,
Permiso_Actualización = _act,
Permiso_Consultar = _con

WHERE Cod_objeto = _Cod_objeto;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_UPD_ROLES_OBJETO (1,"S","S","S","N")


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_ROLES_OBJETO";
        DB::unprepared($procedimiento);
    }
};
