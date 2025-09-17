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
        Schema::create('cart', function (Blueprint $table) {

            $table->string('id_sesion')->primary();
            $table->string('nombre_producto');
            $table->string('imagen_producto')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->decimal('total', 10, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
