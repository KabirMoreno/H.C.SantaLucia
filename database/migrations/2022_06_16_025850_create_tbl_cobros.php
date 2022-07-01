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
            $table->bigIncrements('Cod_Cobro')->comment("Llave Primaria");
            $table->unsignedBigInteger('Cod_Gestion')->comment("Llave Foranea");
            $table->date('Fec_Expiracion')->comment("Fecha de Expiración");
            $table->float('Inte', 10,2)->comment("Interes por cuentas por cobrar");
            $table->float('Sub', 10,2)->comment("Subtotal de la cuenta");
            $table->float('Tot', 10,2)->comment("Total de cuenta por pagar");
            $table->float('Pag', 10,2)->comment("Pagado");
            $table->foreign('Cod_Gestion')->references('Cod_Gestion')->on('tbl_gestion_clientes')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
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
