<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome'); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('etudiants', EtudiantController::class);

Route::resource('demandes', DemandeController::class);

Route::resource('soutenances', SoutenanceController::class);

Route::resource('juries', JuryController::class);

Route::resource('maitres', MaitreStageController::class);

Route::resource('enseignants', EnseignantController::class);

Route::resource('presidents', PresidentController::class);

Route::resource('salles', SalleController::class);

Route::resource('directeurs', DirecteurController::class);

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



