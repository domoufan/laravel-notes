<?php
use App\Http\Controllers\NoteController;

Route::middleware(['auth'])->group(function () {
    Route::resource('notes', NoteController::class);

    // Corbeille
    Route::get('notes-supprimees', [NoteController::class, 'trash'])->name('notes.trash');

    // Restaurer
    Route::post('notes/{id}/restore', [NoteController::class, 'restore'])->name('notes.restore');

    // Supprimer définitivement
    Route::delete('notes/{id}/force-delete', [NoteController::class, 'forceDelete'])->name('notes.forceDelete');
});
