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
        Schema::create('manufacture_countries', function (Blueprint $table) {
            $table->comment('Страны производства');

            $table->foreignId('country_id')->constrained('countries')->cascadeOnDelete();
            $table->foreignId('tire_id')->constrained('tires')->cascadeOnDelete();

            $table->unique(['country_id', 'tire_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacture_countries');
    }
};
