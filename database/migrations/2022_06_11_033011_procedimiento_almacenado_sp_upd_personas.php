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
        $procedimiento = "CREATE PROCEDURE SP_UPD_PERSONAS (IN _Cod_persona Bigint(20), IN _DNI Varchar(255)
        ,IN _Nom Varchar(255), IN _Ape Varchar(255), _Dir Varchar(255), IN _Tip_sexo Enum('M','F'), IN _Tip_registro Enum('C','E'))
BEGIN
UPDATE tbl_personas 
Set 
DNI = _DNI, 
Nom = _Nom,
Ape = _Ape,
Dir = _Dir,
Tip_sexo = _Tip_sexo,
Tip_registro = _Tip_registro,
Fec_registro = now()

WHERE Cod_persona = _Cod_persona;
END";
                DB::unprepared($procedimiento);
    }
    ////PARA LLLAMAR EL PROCEDIMIENTO ALMACENADO
    ////CALL SP_UPD_PERSONAS (3,"0801-2000-00000", "AMBAR", "GUSMA", "KENNEDY", "F", 222222, 99999, "C")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_PERSONAS";
        DB::unprepared($procedimiento);
    }
};
