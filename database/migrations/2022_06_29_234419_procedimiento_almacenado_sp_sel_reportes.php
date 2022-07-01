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
        $procedimiento = "CREATE  PROCEDURE SP_SEL_REPORTES(
            IN _OPCION VARCHAR(2)
                  
            )
            BEGIN
            START TRANSACTION;
            
-- Reporte personas
IF _OPCION = 1 THEN
SELECT 
P.DNI, 
P.Nom, 
P.Ape, 
T.Num, 
T.Tip_telefono 
FROM tbl_personas P
JOIN tbl_telefonos T;

-- Reporte gestion
ELSEIF _OPCION = 2 THEN
SELECT 
C.Cod_cliente,
G.Fec_gestion, 
G.Fec_expirado, 
G.Fec_ultimo_pago, 
G.Col_uno,
G.Col_dos
FROM tbl_gestion_clientes G
JOIN tbl_clientes C;

-- Reporte de creditos
ELSEIF _OPCION = 3 THEN
SELECT 
Cl.Cod_cliente,
C.Tip_credito, 
C.Dia_credito, 
C.Descr
FROM tbl_creditos C
JOIN tbl_clientes Cl;

-- Reporte de facturas
ELSEIF _OPCION = 4 THEN
SELECT 
C.Cod_cliente,
F.Num_factura, 
F.Cod_cartera, 
cd.Cod_credito, 
F.Fec,
F.Fec_expiracion,
F.int_crediticio
FROM tbl_facturas F
JOIN tbl_clientes C, tbl_creditos cd;

-- Reporte de llamadas
ELSEIF _OPCION = 5 THEN
SELECT 
ll.Cod_llamada,
C.cod_cliente, 
ll.Fec_llamada, 
ll.Fec_proxima, 
ll.col,
ll.com
FROM tbl_gestion_llamadas ll
JOIN tbl_clientes C;

-- Reporte de conserje
ELSEIF _OPCION = 6 THEN
SELECT 
J.Cod_conserje,
C.Cod_cliente,
G.Cod_gestion, 
J.Obs, 
J.Img
FROM tbl_gestion_conserjes J
JOIN tbl_clientes C, tbl_gestion_clientes G;

-- Reporte de empresas
ELSEIF _OPCION = 7 THEN
SELECT 
C.Cod_cliente,
P.Nom,
P.Ape,
E.Nom_empresa, 
E.Tel_empresa, 
E.Dir_empresa,
E.Con_empresa
FROM tbl_empresas E
JOIN tbl_clientes C, tbl_personas P;

-- Reporte de clientes
ELSEIF _OPCION = 8 THEN
SELECT 
C.Cod_cliente,
P.DNI,
P.Nom,
P.Ape,
P.Dir,
T.Num,
T.Descr,
P.Fec_registro
FROM tbl_clientes C
JOIN tbl_personas P, tbl_telefonos T;

END IF;
COMMIT;
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
    $procedimiento = "DROP PROCEDURE IF EXISTS SP_SEL_REPORTES";
    DB::unprepared($procedimiento);
}
};
