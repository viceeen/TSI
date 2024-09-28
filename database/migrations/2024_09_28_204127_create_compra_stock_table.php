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
        Schema::create('compra_stock', function (Blueprint $table) {
            $table->integer('compraStockId',10)->primary()->autoIncrement();
            $table->integer('proveedorId',10);
            $table->string('empleadoRut');
            $table->date('fechaCompra');
            $table->integer('costo');
            $table->foreign('proveedorId')->references('proveedoresId')->on('proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_stock');
    }
};
