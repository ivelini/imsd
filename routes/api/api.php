<?php

use App\Http\Controllers\Api\Public\Filters\TireFilterController;
use App\Http\Controllers\Api\Public\Filters\VehicleTireFilterController;
use App\Http\Controllers\Api\Public\TireController;
use Illuminate\Support\Facades\Route;

Route::get('tire', [TireController::class, 'index'])->name('tire');
Route::get('tire/{tire}', [TireController::class, 'show'])->name('tire.show');

//Справочники
Route::prefix('list')->name('list.')->group(function () {

    Route::prefix('filter')->name('parameters.')->group(function () {

        Route::get('tire', TireFilterController::class)->name('tire');
        Route::get('vehicle-tire', VehicleTireFilterController::class)->name('vehicle');
    });
});

