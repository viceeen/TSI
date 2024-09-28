<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalles_compra', function (Blueprint $table) {
            $table->integer('compraStockId',10);
            $table->integer('plantaId',10);
            $table->integer('cantidadTotal',10);
            $table->integer('precioUnitario');
            $table->integer('subTotal');
            $table->foreign('compraStockId')->references('compraStockId')->on('compra_stock');
            $table->foreign('plantaId')->references('plantaId')->on('plantas');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_compra');
    }
};
