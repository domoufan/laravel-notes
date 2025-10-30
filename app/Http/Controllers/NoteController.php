<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoteRequest; // ✅ à ajouter

class NoteController extends Controller
{
    // 📌 Liste des notes
    public function index()
    {
        $notes = Note::paginate(10);
        return view('index', compact('notes'));
    }

    // 📌 Formulaire création
    public function create()
    {
        return view('create');
    }

    // 📌 Enregistrer une note
    public function store(StoreNoteRequest $request) // ✅ on utilise la classe de validation
    {
        Note::create($request->validated()); // ✅ seules les données validées sont utilisées

        return redirect()->route('index')->with('success', 'Note créée avec succès !');
    }

    // 📌 Voir le détail
    public function show(Note $note)
    {
        return view('show', compact('note'));
    }

    // 📌 Formulaire modification
    public function edit(Note $note)
    {
        return view('edit', compact('note'));
    }

    // 📌 Mettre à jour
    public function update(StoreNoteRequest $request, Note $note) // ✅ réutilisation de la validation
    {
        $note->update($request->validated());

        return redirect()->route('index')->with('success', 'Note mise à jour avec succès !');
    }

    // 📌 Supprimer
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('index')->with('success', 'Note supprimée avec succès !');
    }
    use App\Http\Controllers\NoteController;


public function __construct()
{
    $this->middleware('auth');
}
}

