<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'acceuil'])->name('acceuil');


Route::get('/inscription', [AuthController::class, 'inscriptionForm'])->name('inscription.form');
Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::get('/connexion', [AuthController::class, 'connexionForm'])->name('connexion.form');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');


Route::middleware(['auth'])->group(function () {
    // Routes nécessitant une authentification
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

