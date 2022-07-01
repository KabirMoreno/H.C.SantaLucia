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
        $procedimiento = "CREATE PROCEDURE SP_UPD_GESTION_CLIENTE (IN _Cod_Gestion bigint (20), IN _Cod_Cliente bigint (20),
        IN _Num_Cuotas varchar(255), IN _Cuo_Pendiente_Cl varchar (255),
        IN _Cuo_Pendientes_Lps int (11), IN _Cod_Credito bigint (20), IN _Col_Uno varchar (45),
        IN _Col_Dos varchar (45))
BEGIN
UPDATE tbl_gestion_clientes
set Cod_Gestion = _Cod_Gestion, Fec_Gestion = now(), Fec_Expirado = now(), 
Fec_Ultimo_Pago = now(), Num_Cuotas = _Num_Cuotas, Cuo_Pendiente_Cl = _Cuo_Pendiente_Cl, 
Cuo_Pendientes_Lps = Cuo_Pendientes_Lps, Cod_Credito = _Cod_Credito, Col_Uno = _Col_Uno, Col_Dos = _Col_Dos
WHERE Cod_Gestion = _Cod_Gestion;
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_UPD_GESTION_CLIENTE (1, 1, "Num", "Cu", 9999, 1, "ELLA", "EL");

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_UPD_GESTION_CLIENTE";
        DB::unprepared($procedimiento);
    }
};
