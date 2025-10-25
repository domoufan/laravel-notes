<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Tableau de bord (protégé par authentification et vérification d’email)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes accessibles uniquement si l’utilisateur est connecté
Route::middleware('auth')->group(function () {
    // Page profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Déconnexion (protégée aussi par middleware auth)
    Route::post('/deconnexion', [AuthController::class, 'logout'])->name('logout');
});

// Inclusion des routes d'auth Laravel Breeze (login/register par défaut)
require __DIR__.'/auth.php';

// ✅ Routes publiques (sans authentification)
Route::get('/inscription', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/inscription', [AuthController::class, 'register'])->name('register');

Route::get('/connexion', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/connexion', [AuthController::class, 'login'])->name('login');
