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
                              IN _Inte double(10,2), IN _Sub double(10,2), IN _Tot double(10,2), IN _Pag double(10,2))
BEGIN
	INSERT INTO tbl_cobros (Cod_Gestion, Fec_Expiracion, Inte, Sub, Tot, Pagado)
                                    
          VALUES  (_Cod_Gestion, now(), _Inte, _Sub, _Tot, _Pag);
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
