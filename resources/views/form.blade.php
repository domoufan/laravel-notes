@csrf
<div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input type="text" name="title" class="form-control"
           value="{{ old('title', $note->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="content" class="form-label">Contenu</label>
    <textarea name="content" class="form-control" rows="5" required>{{ old('content', $note->content ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">💾 Enregistrer</button>
<a href="{{ route('index') }}" class="btn btn-secondary">⬅ Annuler</a>
