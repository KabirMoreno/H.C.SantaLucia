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
        $procedimiento = "CREATE PROCEDURE SP_UPD_EMPRESAS (IN _Cod_empresa Bigint(20), IN _Nom_empresa Varchar(255),
        IN _Tel_empresa Int(11), IN _Dir_empresa Varchar(255), IN _Con_empresa Varchar(255))
BEGIN
UPDATE tbl_empresas 
Set 
Nom_empresa = _Nom_empresa,
Tel_empresa = _Tel_empresa,
Dir_empresa = _Dir_empresa,
Con_empresa = _Con_empresa

WHERE Cod_empresa = _Cod_empresa;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO.....
    ////CALL SP_UPD_EMPRESAS (3,"CARRION", 22345468, "LA GUADALUPE", "MONICA VALLE")

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_EMPRESAS";
        DB::unprepared($procedimiento);
    
    }
};
