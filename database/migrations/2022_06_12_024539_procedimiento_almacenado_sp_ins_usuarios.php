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
        $procedimiento = "CREATE PROCEDURE  SP_INS_USUARIOS (IN _Nom_Usuario varchar(255), IN _Correo_Electronico Varchar(255)
        ,IN _Contraseña Varchar(255)
        ,IN _Tip_Estado Enum('A','B','N') 
	,IN _Cod_Persona Bigint(20)
	,IN _Cod_Rol Bigint(20))
BEGIN
INSERT INTO users  (Nom_Usuario, 
                         Correo_Electronico,
                         Contraseña,
			 Tip_Estado, 
			 Fec_Cambio,
			 Cod_Persona,
			 Cod_Rol )

                       
VALUES  (_Nom_Usuario, 
                         _Correo_Electronico,
                         _Contraseña,
			 _Tip_Estado,
   			 now(),
			 _Cod_Persona,
			 _Cod_Rol );
       
END";
                DB::unprepared($procedimiento);
    }
////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO...
//!CALL SP_INS_USUARIOS ('Marta', 'Marta@gmail.com' ,'laotra','A',1,1 )

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
