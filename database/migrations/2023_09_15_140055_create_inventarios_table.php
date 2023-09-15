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
        Schema::create('entrada_salidas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('detalle');
            $table->integer('entrada_fisica');
            $table->integer('salida_fisica');
            $table->integer('saldo_fisico');
            $table->float('costo_unit');
            $table->float('entrada_boliviano');
            $table->float('salida_boliviano');
            $table->float('saldo_boliviano'); 
            $table->unsignedBigInteger('producto_id');          
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrada_salidas');
    }
};