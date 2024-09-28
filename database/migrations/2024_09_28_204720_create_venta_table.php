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
        Schema::create('venta', function (Blueprint $table) {
            $table->integer('ventaId',10)->primary()->autoIncrement();
            $table->string('rut',9);
            $table->string('empleadoRut',9);
            $table->date('fechaVenta');
            $table->integer('montoTotal');
            $table->foreign('rut')->references('rut')->on('cliente');
            $table->foreign('empleadoRut')->references('empleadoRut')->on('empleado');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
