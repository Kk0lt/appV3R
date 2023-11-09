<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormAccidentTravailController;
use App\Http\Controllers\FormSituationDangereuseController;
use App\Http\Controllers\FormulairesController;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GrilleAuditSstController;




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


// ACCIDENT DE TRAVAIL
Route::get('/Formulaire-Déclaration-d\'Accident-de-Travail', 
[FormulairesController::class, 'formAccidentTravail'])->name('formulaires.formAccidentTravail');

//Route::post('/form-accident-travail', 'FormAccidentTravailController@store')->name('FormAccidentTravail.store');

Route::post('/form-accident-travail',
[FormAccidentTravailController::class, 'store'])->name('FormAccidentTravail.store');


//SITUATION DANGEREUSE
Route::get('/Signalement-d\'une-Situation-Dangereuse', 
[FormulairesController::class, 'formSituationDangereuse'])->name('formulaires.formSituationDangereuse');

Route::post('/Signalement-d\'une-Situation-Dangereuse/store',
[FormSituationDangereuseController::class, 'store'])->name('FormSituationDangereuse.store');


//FORM AUDIT SST
Route::post('/GrilleAuditSST/store',
[GrilleAuditSstController::class, 'store'])->name('GrilleAuditSST.store');

Route::get('/Grille-Audit-SST', 
[FormulairesController::class, 'grilleAuditSST'])->name('formulaires.grilleAuditSST');

Route::get('/Rapport-d\'Accident', 
[FormulairesController::class, 'rapportAccident'])->name('formulaires.rapportAccident');

/*-----------------------Employés------------------------*/
Route::get('/accueil', 
[EmployesController::class, 'accueil'])->name('employes.accueil');

Route::get('/documents', 
[EmployesController::class, 'documents'])->name('employes.documents');


/*-----------------------Admin------------------------*/
Route::get('/admin', 
[AdminController::class, 'accueil'])->name('admins.admin');

