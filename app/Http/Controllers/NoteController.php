<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // 📌 Liste des notes
    public function index()
{
    // Mauvais : $notes = Note::all();
    $notes = Note::paginate(10); // 10 notes par page
    return view('index', compact('notes'));
}


    // 📌 Formulaire création
    public function create()
    {
        return view('create');
    }

    // 📌 Enregistrer une note
    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required|max:255',  // règles de validation
            'content' => 'required',
        ], [
            // messages d’erreur personnalisés
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'content.required' => 'Le contenu de la note est obligatoire.',
        ]);

        Note::create($request->all());

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
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|max:255',  // règles de validation
            'content' => 'required',
        ], [
            // messages d’erreur personnalisés
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'content.required' => 'Le contenu de la note est obligatoire.',
        ]);

        $note->update($request->all());

        return redirect()->route('index')->with('success', 'Note mise à jour !');
    }

    // 📌 Supprimer
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('index')->with('success', 'Note supprimée !');
    }
}
