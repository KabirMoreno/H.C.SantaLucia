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
        Schema::create('tbl_gestion_cliente', function (Blueprint $table) {
            $table->bigIncrements('Cod_Gestion')->comment("Codigo de Gestion");
            $table->unsignedBigInteger('Cod_Cliente')->comment("Codigo de Cliente");
            $table->date('Fec_Gestion')->comment("Fecha de Gestion");
            $table->date('Fec_Expirado')->comment("Fecha de Expiración");
            $table->date('Fec_Ultimo_Pago')->comment("Fecha del Ultimo Pago");
            $table->string('Num_Cuotas')->comment("Numero de cuotas");
            $table->string('Cuo_Pendiente_Cl')->comment("Cuota pendiente del Cliente");
            $table->integer('Cuo_Pendientes_Lps')->comment("Cuotas pendientes en Lempiras");
            $table->unsignedBigInteger('Cod_Credito')->comment("Codigo de Crédito");
            $table->string('Col_Uno', 45)->comment("Colabodor 1");
            $table->string('Col_Dos', 45)->comment("Colaborador 2");
            $table->foreign('Cod_Cliente')->references('Cod_Cliente')->on('tbl_cliente')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Cod_Credito')->references('Cod_Credito')->on('tbl_creditos')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); ////ESTE LO AGREGUE PARA QUE SE MIRE LA FECHA DE ELIMINACION
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_gestion_cliente');
    }
};
