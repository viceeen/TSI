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
        Schema::create('plantas', function (Blueprint $table) {
            $table->integer('plantaId',10)->primary();
            $table->string('nombre',30);
            $table->string('nombreCientifico',50);
            $table->byte('categoria');
            $table->int('precio');
            $table->smallint('stock');
            $table->string('descripcion',255);

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantas');
    }
};
