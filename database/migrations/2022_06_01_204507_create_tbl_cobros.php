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
        Schema::create('tbl_cobros', function (Blueprint $table) {
            $table->bigIncrements('Cod_Cobro')->comment("Código de Cobro");
            $table->unsignedBigInteger('Cod_Gestion')->comment("Código de Gestión");
            $table->date('Fec_Expiracion')->comment("Fecha de Expiración");
            $table->float('Interes', 10,2)->comment("Interes por cuentas por cobrar");
            $table->float('Subtotal', 10,2)->comment("Subtotal de la cuenta");
            $table->float('Total', 10,2)->comment("Total de cuenta por pagar");
            $table->float('Pagado', 10,2)->comment("Pagado");
            $table->foreign('Cod_Gestion')->references('Cod_Gestion')->on('tbl_gestion_cliente')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_cobros');
    }
};
