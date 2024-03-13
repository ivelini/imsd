<?php

use App\Http\Controllers\Api\Public\Filters\TireFilterController;
use App\Http\Controllers\Api\Public\Filters\Vehicle\VehicleTireInfoFilterController;
use App\Http\Controllers\Api\Public\Filters\Vehicle\VehicleTireSpecificationsFilterController;
use App\Http\Controllers\Api\Public\TireController;
use Illuminate\Support\Facades\Route;

Route::get('tire', [TireController::class, 'index'])->name('tire');
Route::get('tire/{tire}', [TireController::class, 'show'])->name('tire.show');
Route::get('vehicle/tire', [TireController::class, 'indexToVehicleParameters'])->name('vehicle.tire');

//Справочники
Route::prefix('list')->name('list.')->group(function () {

    Route::prefix('filter')->name('filter.')->group(function () {

        Route::get('tire', TireFilterController::class)->name('tire');
        Route::get('vehicle/tire/info', VehicleTireInfoFilterController::class)->name('vehicle.tire.info');
        Route::get('vehicle/tire/specifications', VehicleTireSpecificationsFilterController::class)->name('vehicle.tire.spec');
    });
});

