<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tire_stock', function (Blueprint $table) {
            $table->comment('Сопоставление шины и скада');

            $table->foreignId('tire_id')->constrained('tires')->cascadeOnDelete();
            $table->foreignId('stock_id')->constrained('stocks')->cascadeOnDelete();

            $table->integer('count');
            $table->integer('price');
            $table->integer('minimum_market_price')->nullable();

            $table->unique(['tire_id', 'stock_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tire_stock');
    }
};
