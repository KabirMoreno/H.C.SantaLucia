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
        $procedimiento = "CREATE PROCEDURE SP_INS_GESTION_CLIENTE (IN _Cod_Cliente bigint (20),
							  IN _Num_Cuotas int (11), IN _Cuo_Pendiente_Cl varchar (255),
                              IN _Cuo_Pendientes_Lps int (11), IN _Cod_Credito bigint (20), IN _Col_Uno varchar (45),
							  IN _Col_Dos varchar (45))
BEGIN
	INSERT INTO tbl_gestion_clientes (Cod_Cliente, Fec_Gestion, Fec_Expirado, Fec_Ultimo_Pago, Num_Cuotas,
                                    Cuo_Pendiente_Cl, Cuo_Pendientes_Lps, Cod_Credito, Col_Uno, Col_Dos)
                                    
          VALUES  ( _Cod_Cliente, now(), now(), now(), _Num_Cuotas,
                   _Cuo_Pendiente_Cl, _Cuo_Pendientes_Lps, _Cod_Credito, _Col_Uno, _Col_Dos);
END";
DB::unprepared($procedimiento);
    }
    ////PARA LLAMAR AL PROCESO ALMACENADO...
    //!CALL SP_INS_GESTION_CLIENTE (2, 'cinco','diez' , 20000, 2, 'MORENO', 'LICONA')

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_INS_GESTION_CLIENTE";
        DB::unprepared($procedimiento);
    }
};
