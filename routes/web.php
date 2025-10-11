<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\NoteController;

Route::resource('notes', NoteController::class);


 
// Liste des notes
Route::get('/notes', [NoteController::class, 'index'])->name('index');

// Formulaire création
Route::get('/notes/create', [NoteController::class, 'create'])->name('create');

// Enregistrer une nouvelle note
Route::post('/notes', [NoteController::class, 'store'])->name('store');

// Voir le détail d’une note
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('show');

// Formulaire modification
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('edit');

// Mettre à jour une note
Route::put('/notes/{note}', [NoteController::class, 'update'])->name('update');

// Supprimer une note
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('destroy');
