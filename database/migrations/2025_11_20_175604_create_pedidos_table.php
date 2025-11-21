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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('numero_pedido')->unique();
            
            // Información de envío
            $table->string('nombre_completo');
            $table->string('telefono', 20);
            $table->text('direccion');
            $table->string('ciudad', 100);
            $table->string('codigo_postal', 10)->nullable();
            $table->text('notas')->nullable();
            
            // Información de pago
            $table->enum('metodo_pago', ['tarjeta', 'paypal']);
            $table->string('ultimos_4_digitos', 4)->nullable();
            $table->string('nombre_titular')->nullable();
            $table->string('paypal_email')->nullable();
            
            // Montos
            $table->decimal('subtotal', 10, 2);
            $table->decimal('impuestos', 10, 2);
            $table->decimal('total', 10, 2);
            
            // Estado del pedido
            $table->enum('estado', ['pendiente', 'procesando', 'enviado', 'entregado', 'cancelado'])
                  ->default('pendiente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
