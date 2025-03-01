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
        Schema::create('carrito_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrito_id');
            $table->foreign('carrito_id')->references('id')->on('carrito')->onDelete('cascade');
            $table->unsignedBigInteger('producto_id'); // Agrega la columna producto_id
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade'); // Clave foránea a productos
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2);
            $table->dateTime('fecha_adicion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_productos');
    }
};