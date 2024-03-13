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
        Schema::create('tcs_wheel_specifications', function (Blueprint $table) {
            $table->id();
            $table->comment('Подбор по авто: Размеры дисков по модели авто');

            $table->foreignId('tcs_car_model_id')->constrained('tcs_car_models')->cascadeOnDelete();
            $table->string('type');
            $table->string('front_width');
            $table->string('front_diameter');
            $table->string('front_et');
            $table->string('back_width')->nullable();
            $table->string('back_diameter')->nullable();
            $table->string('back_et')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcs_wheel_specifications');
    }
};
