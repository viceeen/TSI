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
        Schema::create('ajuste', function (Blueprint $table) {
            $table->integer('id',10)->primary()->autoIncrement();
            $table->integer('plantaId',10);
            $table->byte('tipo_Ajuste',1);
            $table->string('descripcion',255);
            $table->date('fecha');
            $table->integer('cantidad',10);
            $table->foreign('plantaId')->references('plantaId')->on('plantas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajuste');
    }
};
