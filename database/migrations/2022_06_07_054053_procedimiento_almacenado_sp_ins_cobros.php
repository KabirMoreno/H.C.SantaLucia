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
        $procedimiento = "CREATE PROCEDURE SP_INS_COBROS (IN _Cod_Gestion bigint(20), 
                              IN _Interes double(10,2), IN _Subtotal double(10,2), IN _Total double(10,2), IN _Pagado double(10,2))
BEGIN
	INSERT INTO tbl_cobros (Cod_Gestion, Fec_Expiracion, Interes, Subtotal, Total, Pagado)
                                    
          VALUES  (_Cod_Gestion, now(), _Interes, _Subtotal, _Total, _Pagado);
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
        $procedimiento ="DROP PROCEDURE IF EXISTS SP_INS_COBROS";
DB::unprepared($procedimiento);
    }
};
