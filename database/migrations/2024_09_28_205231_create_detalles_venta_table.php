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
        Schema::create('detalles_venta', function (Blueprint $table) {
            $table->integer('detallesVentaId',10)->primary()->autoIncrement();
            $table->integer('ventaId',10);
            $table->integer('plantaId',10);
            $table->integer('cantidad',10);
            $table->integer('precioUnitario');
            $table->integer('subtotal');
            $table->foreign('ventaId')->references('ventaId')->on('venta');
            $table->foreign('plantaId')->references('plantaId')->on('plantas');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_venta');
    }
};
