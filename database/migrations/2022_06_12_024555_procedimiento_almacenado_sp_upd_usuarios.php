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
        $procedimiento = "CREATE PROCEDURE SP_UPD_USUARIOS (IN _Cod_Usuario bigint (20), IN _Nom_Usuario bigint (20), IN _Correo_Electronico Varchar(255)
        ,IN _Contraseña Varchar(255)
        ,IN _Cod_Estado_Usuario Bigint (20)
	,IN _Cod_Role Bigint(20)
	,IN _Cod_Personas Bigint(20))
BEGIN
UPDATE tbl_usuarios 
Set 
Nom_Usuario = _Nom_Usuario, 
Correo_Electronico = _Correo_Electronico ,
Contraseña = _Contraseña,
Cod_Estado_Usuario = _Cod_Estado_Usuario, 
Cod_Role =  _Cod_Role,
Cod_Persona = _Cod_Personas
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_USUARIOS";
        DB::unprepared($procedimiento);
    }
};
