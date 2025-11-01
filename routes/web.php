<?php 
use App\Http\Controllers\NoteController;

Route::middleware(['auth'])->group(function () {
    Route::resource('notes', NoteController::class);

    // Routes pour la corbeille
    Route::get('notes-supprimees', [NoteController::class, 'trash'])->name('notes.trash');
    Route::post('notes/{id}/restore', [NoteController::class, 'restore'])->name('notes.restore');
    Route::delete('notes/{id}/force-delete', [NoteController::class, 'forceDelete'])->name('notes.forceDelete');
});
