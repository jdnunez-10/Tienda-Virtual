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
        Schema::create('productos', function (Blueprint $table) {
            $table->string('id_producto')->primary();
            $table->string('nombre_producto');
            $table->string('imagen_producto')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('categoria_id'); // clave foránea


            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
