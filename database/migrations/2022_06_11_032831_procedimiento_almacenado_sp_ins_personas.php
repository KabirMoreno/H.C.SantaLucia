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
        $procedimiento = "CREATE PROCEDURE SP_INS_PERSONAS (IN _DNI Varchar(255)
        ,IN _Nom Varchar(255), IN _Ape Varchar(255), _Dir Varchar(255), IN _Tip_sexo Enum('M','F'), IN _Tel Int(11), IN _Cel Int(11),  IN _Tip_registro Enum('C','E'))
        BEGIN
        INSERT INTO tbl_personas (DNI, Nom, Ape, Dir, Tip_sexo, Tel, Cel, Tip_registro, Fec_registro)
                       
        VALUES  ( _DNI, 
          _Nom,
	  _Ape,
	  _Dir,
      _Tip_sexo,
	  _Tel,
	  _Cel,
	  _Tip_registro,
      now());
       
       
END";
                DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESOS ALMACENADO.... 
    ////CALL SP_INS_PERSONAS ("0801-2000-00000", "AMBAR", "LOPEZ", "KENNEDY", "F", 222222, 99999, "C")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_PERSONAS";
        DB::unprepared($procedimiento);
    }
};
