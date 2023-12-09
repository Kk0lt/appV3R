<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsagersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormAccidentTravailController;
use App\Http\Controllers\FormSituationDangereuseController;
use App\Http\Controllers\GrilleAuditSstController;
use App\Http\Controllers\RapportAccidentController;

use App\Http\Controllers\FormulairesController;

use App\Http\Controllers\EmployesController;




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

Route::get('formConnexion', 
[UsagersController::class, 'formConnexion'])->name('usagers.formConnexion');

Route::post('connexion',
[UsagersController::class, 'connexion'])->name('usagers.connexion');

// // ENVOIE DE FORMULAIRE
// Route::post('connexion',
// [UsagersController::class, 'login'])->name('usagers.login');

// ROUTE DECONNEXION
Route::get('logout',
[UsagersController::class, 'logout'])->name('logout');

//  modif pwd
Route::patch('/usagers',
[UsagersController::class, 'update'])->name('usagers.update');



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


//GRILLE AUDIT SST
Route::get('/Grille-Audit-SST', 
[FormulairesController::class, 'grilleAuditSST'])->name('formulaires.grilleAuditSST');

Route::post('/GrilleAuditSST/store',
[GrilleAuditSstController::class, 'store'])->name('GrilleAuditSST.store');

//RAPPORT D'ACCIDENT
Route::get('/Rapport-d\'Accident', 
[FormulairesController::class, 'rapportAccident'])->name('formulaires.rapportAccident');


Route::post('/Rapport-d\'Accident/store',
[RapportAccidentController::class, 'store'])->name('RapportAccident.store');

/*-----------------------Employés------------------------*/
Route::get('/accueil', 
[EmployesController::class, 'accueil'])->name('employes.accueil');

Route::get('/documents', 
[EmployesController::class, 'documents'])->name('employes.documents');

/*-----------------------Superieurs------------------------*/

Route::post('/mark-notification-as-read/{formId}', 
[EmployesController::class, 'markNotificationAsRead'])->name('mark-notification-as-read');

// Route pour le formulaire de Situation Dangereuse
Route::get('/formulaire-situation-dangereuse-superieur/{id}', 
[EmployesController::class, 'showFormulaireSituationDangereuse'])->name('situation-dangereuse.superieur.show');

// Route pour le formulaire d'Accident de Travail
Route::get('/formulaire-accident-travail-superieur/{id}', 
[EmployesController::class, 'showFormulaireAccidentTravail'])->name('accident-travail.superieur.show');

// Route pour le formulaire Grille Audit Sst
Route::get('/grille-audit-sst-superieur/{id}', 
[EmployesController::class, 'showGrilleAuditSst'])->name('grille-audit-sst.superieur.show');

// Route pour le rapport accident
Route::get('/rapport-accident-superieur/{id}', 
[EmployesController::class, 'showRapportAccident'])->name('rapport-accident.superieur.show');

/*-----------------------Admin------------------------*/
Route::get('/admin', 
[AdminController::class, 'accueil'])->name('admins.admin');

Route::get('/admin', [AdminController::class, 'accueil'])->name('admins.admin');

//statut admin =  lu
Route::post('/mark-notification-as-read-by-admin/{formId}', 
[AdminController::class, 'markAsReadByAdmin'])->name('mark-notification-as-read-by-admin');

// Route pour le formulaire de Situation Dangereuse
Route::get('/formulaire-situation-dangereuse/{id}', 
[AdminController::class, 'showFormulaireSituationDangereuse'])->name('situation-dangereuse.show');

// Route pour le formulaire d'Accident de Travail
Route::get('/formulaire-accident-travail/{id}', 
[AdminController::class, 'showFormulaireAccidentTravail'])->name('accident-travail.show');

// Route pour le formulaire Grille Audit Sst
Route::get('/grille-audit-sst/{id}', 
[AdminController::class, 'showGrilleAuditSst'])->name('grille-audit-sst.show');

// Route pour le rapport accident
Route::get('/rapport-accident/{id}', 
[AdminController::class, 'showRapportAccident'])->name('rapport-accident.show');
