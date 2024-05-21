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
        Schema::create('articulos', function (Blueprint $table) {
            $table->smallIncrement('id');
            $table->string('nombre', 150)->required();
            $table->string('descripcion', 255);
            $table->string('codigo_barras', 64)->required();
            $table->decimal('precio_compra', total: 8, places: 2);
            $table->decimal('precio_venta', total: 8, places: 2);
            $table->smallInteger('stock');
            $$table->boolean('activo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
