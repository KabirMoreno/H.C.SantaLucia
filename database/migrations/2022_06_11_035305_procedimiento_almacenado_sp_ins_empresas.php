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
        $procedimiento = "CREATE PROCEDURE SP_INS_EMPRESAS (IN _Nom_empresa Varchar(255)
        ,IN _Tel_empresa Int(11), IN _Dir_empresa Varchar(255), IN _Con_emperesa Varchar(255))
BEGIN
INSERT INTO tbl_empresas (Nom_empresa, Tel_empresa, Dir_empresa, Con_empresa)
                       
VALUES  ( _Nom_empresa,
	  _Tel_empresa,
	  _Dir_empresa,
	  _Con_empresa
	  );
       
       
END";
                DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCEDIMIENTO ALMACENADO....
    ////CALL SP_INS_EMPRESAS ("CARRION", 22345468, "LA GUADALUPE", "MONICA MENBREÑO")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_EMPRESAS";
        DB::unprepared($procedimiento);
    
    }
};
