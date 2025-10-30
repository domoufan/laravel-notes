<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoteRequest;

class NoteController extends Controller
{
    // ✅ Middleware d’authentification
       public function __construct()
{
    $this->middleware('auth');

    // Seuls les admins peuvent créer, modifier ou supprimer
    $this->middleware('role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
}

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
    public function store(StoreNoteRequest $request)
    {
        Note::create($request->validated());
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
    public function update(StoreNoteRequest $request, Note $note)
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



}
