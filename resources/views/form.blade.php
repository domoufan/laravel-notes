@csrf

<!-- Titre -->
<div class="mb-3">
    <input type="text" name="title" 
           value="{{ old('title', $note->title ?? '') }}" 
           placeholder="Titre" 
           required maxlength="255" 
           class="form-control">
    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Contenu -->
<div class="mb-3">
    <textarea name="content" 
              placeholder="Contenu" 
              required 
              class="form-control">{{ old('content', $note->content ?? '') }}</textarea>
    @error('content')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Bouton -->
<button type="submit" class="btn btn-primary">
    @if(isset($note)) Mettre à jour @else Envoyer @endif
</button>
