<?php

use App\Http\Controllers\Api\Public\ParametersController;
use App\Http\Controllers\Api\Public\TireController;
use Illuminate\Support\Facades\Route;

Route::get('tire', [TireController::class, 'index'])->name('tire');

//Справочники
Route::prefix('list')->name('list.')->group(function () {

    Route::prefix('parameters')->name('parameters.')->group(function () {

        Route::get('tire', [ParametersController::class, 'tire'])->name('tire');
    });
});

