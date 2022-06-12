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
        $procedimiento = "CREATE PROCEDURE `SP_INS_USUARIOS`(IN _Nom_Usuario bigint (20), IN _Correo_Electronico Varchar(255)
        ,IN _Contraseña Varchar(255)
        ,IN _Cod_Estado_Usuario Bigint (20)
	,IN _Cod_Role Bigint(20)
	,IN _Cod_Personas Bigint(20))
BEGIN
INSERT INTO tbl_creditos  (Nom_Usuario, 
                         Correo_Electronico ,
                         Contraseña,
			             Cod_Estado_Usuario, 
			            Cod_Role,
			            Cod_Personas )

                       
VALUES  (_Nom_Usuario, 
                         _Correo_Electronico ,
                         _Contraseña,
			             _Cod_Estado_Usuario, 
			             _Cod_Role,
			            _Cod_Personas );
       
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_USUARIOS";
        DB::unprepared($procedimiento);
    }
};
