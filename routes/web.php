<?php
use App\Http\Controllers\NoteController;

Route::middleware(['auth'])->group(function () {

    // Accessible uniquement aux admins
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('notes', NoteController::class);
    });

    // Exemple : page visible seulement par les professeurs
    Route::get('/dashboard-prof', function () {
        return view('prof.dashboard');
    })->middleware('role:professeur');

    // Exemple : page visible seulement par les étudiants
    Route::get('/dashboard-etudiant', function () {
        return view('etudiant.dashboard');
    })->middleware('role:etudiant');
});
