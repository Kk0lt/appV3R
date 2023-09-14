<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormulairesController;

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
});

/*-----------------------Usagers------------------------*/

Route::get('/formConnexion', 
[UsagersController::class, 'formConnexion'])->name('usagers.formConnexion');


/*-----------------------Formulaires------------------------*/
Route::get('/Formulaire-Déclaration-d\'Accident-de-Travail', 
[FormulairesController::class, 'formAccidentTravail'])->name('formulaires.formAccidentTravail');
