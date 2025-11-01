<?php 
use App\Http\Controllers\Api\NoteApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/notes', [NoteApiController::class, 'index']);
    Route::get('/notes-deleted', [NoteApiController::class, 'trash']);
    Route::post('/notes', [NoteApiController::class, 'store']);
    Route::get('/notes/{id}', [NoteApiController::class, 'show']);
    Route::put('/notes/{id}', [NoteApiController::class, 'update']);
    Route::delete('/notes/{id}', [NoteApiController::class, 'destroy']);
    Route::post('/notes/{id}/restore', [NoteApiController::class, 'restore']);
    Route::delete('/notes/{id}/force', [NoteApiController::class, 'forceDelete']);
});
