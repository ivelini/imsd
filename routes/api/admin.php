<?php

use App\Http\Controllers\Api\Admin\Auth\RevokeController;
use App\Http\Controllers\Api\Admin\Auth\TokenController;
use App\Http\Controllers\Api\Admin\Import\ImportTiresController;
use App\Http\Controllers\Api\Admin\Import\ImportVehicleController;
use App\Http\Controllers\Api\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::post('auth/token', TokenController::class)->name('token');

//ЛК админа
Route::group(['middleware' => 'auth:admin'], function () {
    Route::post('auth/token/revoke', RevokeController::class)->name('token.revoke');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile');

    Route::group(['prefix' => 'import/'], function () {
        Route::post('tires', ImportTiresController::class)
            ->middleware('only-one-running-job:import-tires')
            ->name('import.tires');

        Route::post('vehicle', ImportVehicleController::class)
            ->middleware('only-one-running-job:import-vehicle')
            ->name('import.vehicle');
    });
});
