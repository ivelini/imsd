<?php

use App\Http\Controllers\Api\Public\TireController;
use Illuminate\Support\Facades\Route;

Route::get('tire', [TireController::class, 'index'])->name('tire');
