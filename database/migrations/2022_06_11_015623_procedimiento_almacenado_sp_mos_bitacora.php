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
        $procedimiento = "CREATE PROCEDURE SP_MOS_BITACORA ()
        BEGIN
        
        Select b.Cod_bitacora,u.Cod_usuario,u.Nom_Usuario,r.des,b.Nom_reporte,b.Fec_bitacora,b.Tbl_modificada
from tbl_bitacoras b
inner join users u on u.cod_usuario=b.cod_usuario
inner join tbl_roles r on r.cod_rol=b.cod_rol;
COMMIT;

        
        END";
        DB::unprepared($procedimiento);
    }
////PARA LLAMAR AL PROCESO ALMACENADO...
//!CALL SP_MOS_BITACORA ()
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_MOS_BITACORA";
        DB::unprepared($procedimiento);
    }
};
