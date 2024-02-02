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
        Schema::create('tcs_tyre_specifications', function (Blueprint $table) {
            $table->id();
            $table->comment('Подбор по авто: Размеры шин по модели авто');

            $table->foreignId('tcs_car_model_id')->constrained('tcs_car_models')->cascadeOnDelete();
            $table->string('type');
            $table->integer('front_width');
            $table->integer('front_height')->nullable();
            $table->integer('front_diameter');
            $table->integer('back_width')->nullable();
            $table->integer('back_height')->nullable();
            $table->integer('back_diameter')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcs_tyre_specifications');
    }
};
