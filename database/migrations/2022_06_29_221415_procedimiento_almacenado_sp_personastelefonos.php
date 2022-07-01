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
        $procedimiento = "CREATE  PROCEDURE SP_INS_PERSONAS_TELEFONO(
            IN _DNI VARCHAR(255),
                IN _Nom VARCHAR(255),
                IN _Ape VARCHAR(255),
                IN _Dir VARCHAR(255),
                IN _Tip_sexo enum('M', 'F'),
                IN _Tip_registro enum('C', 'E'),
                IN _Descr VARCHAR (255),
                IN _Num double(11,2),
                IN _Tip_telefono enum('F', 'C')
                
            )
            BEGIN
            START TRANSACTION;
            -- Insertando en la tabla personas 
            INSERT INTO tbl_personas (
                DNI,
                Nom,
                Ape,
                Dir,
                Tip_sexo,
                Tip_registro,
                Fec_registro
               
            ) VALUES (
            
            _DNI,
            _Nom,
            _Ape,
            _Dir,
            _Tip_sexo,
            _Tip_registro,
            now() 
            );
            -- SELECCIONAR EL MAXIMO DE LA TABLA PERSONAS
            SELECT @COD_PERSONA := MAX(Cod_persona) FROM tbl_personas;
            -- INSERTANDO EN LA TABLA TELEFONOS
            INSERT INTO tbl_telefonos(
            Descr,
            Num,
            Tip_telefono 
            ) VALUES (
            _Descr,
            _Num,
            _Tip_telefono 
            );
            -- Seleccionar el maximo insertado en la tabla telefonos.
            SELECT @COD_TELEFONO := MAX(Cod_telefono ) FROM  tbl_telefonos;
            
            -- Insertar en la tabla relacional entre personas y telefonos.
            INSERT INTO tbl_rel_pertel(
              Cod_persona
              ,Cod_telefono
            ) VALUES (
               @COD_PERSONA,
               @COD_TELEFONO
            );
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
        $procedimiento = "DROP PROCEDURE IF EXISTS SP_INS_PERSONAS_TELEFONO";
        DB::unprepared($procedimiento);
    }
};
