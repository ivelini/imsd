<?php

use App\Http\Controllers\Web\Public\TireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth.basic');

Route::get('/podbor_shin', fn() => redirect('/podbor-shin'));
Route::get('/podbor-shin', function () {
    return view('pages.public.podborShin');
})->middleware('auth.basic');

Route::group(['prefix' => 'catalog', 'middleware' => ['auth.basic']], function () {
    Route::group(['prefix' => 'tires'], function () {
        Route::get('/{vendor:slug}/{tire:slug}', [TireController::class, 'show']);
    });
});
