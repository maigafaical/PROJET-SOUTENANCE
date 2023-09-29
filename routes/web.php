<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DirecteurController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\MaitreStageController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SoutenanceController;

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
    return view('Auth');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('etudiants', EtudiantController::class);
Route::get('supprimer-etudiant/{id}', [EtudiantController::class, 'destroy']);

Route::get('show-etudiant/{id}', [EtudiantController::class, 'show']);

Route::resource('demandes', DemandeController::class);
Route::get('supprimer-demande/{id}', [DemandeController::class, 'destroy']);

Route::resource('soutenances', SoutenanceController::class);
Route::get('supprimer-soutenance/{id}', [SoutenanceController::class, 'destroy']);

Route::resource('juries', JuryController::class);
Route::get('supprimer-jury/{id}', [JuryController::class, 'destroy']);

Route::resource('maitres', MaitreStageController::class);
Route::get('supprimer-maitre/{id}', [MaitreStageController::class, 'destroy']);

Route::resource('enseignants', EnseignantController::class);
Route::get('supprimer-enseignant/{id}', [EnseignantController::class, 'destroy']);

Route::resource('presidents', PresidentController::class);
Route::get('supprimer-president/{id}', [PresidentController::class, 'destroy']);

Route::resource('salles', SalleController::class);
Route::get('supprimer-salle/{id}', [SalleController::class, 'destroy']);

Route::resource('directeurs', DirecteurController::class);
Route::get('supprimer-directeur/{id}', [DirecteurController::class, 'destroy']);

Route::post('/login',[AuthController::class, 'login'] )->name('login');
Route::get('/logout',[AuthController::class, 'logout'] )->name('logout');



