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
        Schema::create('tcs_car_models', function (Blueprint $table) {
            $table->id();
            $table->comment('Подбор по авто: Модели авто');

            $table->string('vendor');
            $table->string('model');
            $table->string('year');
            $table->string('modification');
            $table->integer('lz')->nullable();
            $table->float('pcd')->nullable();
            $table->float('dia')->nullable();
            $table->string('bolt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcs_car_models');
    }
};
