<?php

use App\Http\Controllers\CentreServicesScolaireController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\PosteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('postes')
    ->controller(PosteController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/{poste}', 'show');
        Route::delete('/{poste}', 'destroy');
    });

Route::prefix('ecoles')
    ->controller(EcoleController::class)
    ->group(function() {
        Route::get('/', 'index');
        Route::get('/{ecole}', 'show');
        Route::get('/{ecole}/postes', 'showschoolPost');
    });

Route::prefix('centres')
    ->controller(CentreServicesScolaireController::class)
    ->group(function() {
       Route::get('/{centre}', 'show');
    });
