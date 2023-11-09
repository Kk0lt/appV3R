<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormAccidentTravailController;
use App\Http\Controllers\FormulairesController;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\AdminController;



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
Route::get('/',
[UsagersController::class, 'formConnexion'])->name('usagers.formConnexion');


/*-----------------------Usagers------------------------*/
Route::get('/formConnexion', 
[UsagersController::class, 'formConnexion'])->name('usagers.formConnexion');


/*-----------------------Formulaires------------------------*/
Route::get('/Formulaires', 
[FormulairesController::class, 'listeForms'])->name('formulaires.listesForm');

Route::get('/Formulaire-Déclaration-d\'Accident-de-Travail', 
[FormulairesController::class, 'formAccidentTravail'])->name('formulaires.formAccidentTravail');

//Route::post('/form-accident-travail', 'FormAccidentTravailController@store')->name('FormAccidentTravail.store');

Route::post('/form-accident-travail',
[FormAccidentTravailController::class, 'store'])->name('FormAccidentTravail.store');

Route::get('/Signalement-d\'une-Situation-Dangereuse', 
[FormulairesController::class, 'formSituationDangereuse'])->name('formulaires.formSituationDangereuse');

Route::get('/Grille-Audit-SST', 
[FormulairesController::class, 'grilleAuditSST'])->name('formulaires.grilleAuditSST');

Route::get('/Rapport-d\'Accident', 
[FormulairesController::class, 'rapportAccident'])->name('formulaires.rapportAccident');


/*-----------------------Employés------------------------*/
Route::get('/accueil', 
[EmployesController::class, 'accueil'])->name('employes.accueil');


/*-----------------------Admin------------------------*/
Route::get('/admin', 
[AdminController::class, 'accueil'])->name('admins.admin');

