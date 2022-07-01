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
        $procedimiento = "CREATE PROCEDURE SP_UPD_COBROS (IN _Cod_Cobro bigint(20), IN _Cod_Gestion bigint(20), IN _Fec_Expiracion date, 
        IN _Inte double(10,2), IN _Sub double(10,2), IN _Tot double(10,2), IN _Pag double(10,2))
BEGIN
UPDATE tbl_cobros
set  
Cod_gestion = _Cod_gestion, 
Fec_expiracion = now(), 
Inte = _Inte, 
Sub = _Sub, 
Tot = _Tot, 
Pag = _Pag
WHERE Cod_Cobro = _Cod_Cobro;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_UPD_COBROS (1, 1, 1, 1, 1, 1,1)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_COBROS";
        DB::unprepared($procedimiento);
    }
};
