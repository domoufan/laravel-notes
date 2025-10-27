<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('content')
<form action="{{ route('store') }}" method="POST" id="noteForm">
    @csrf

    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required maxlength="255">
        @error('title')
            <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="content">Contenu</label>
        <textarea name="content" id="content" required minlength="5">{{ old('content') }}</textarea>
        @error('content')
            <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Enregistrer</button>
</form>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('noteForm');
    const title = document.getElementById('title');
    const content = document.getElementById('content');

    form.addEventListener('submit', function(e) {
        let valid = true;

        if (title.value.trim() === '' || title.value.length > 255) {
            alert('Le titre est obligatoire et ne doit pas dépasser 255 caractères.');
            valid = false;
        }

        if (content.value.trim() === '' || content.value.length < 5) {
            alert('Le contenu est obligatoire et doit contenir au moins 5 caractères.');
            valid = false;
        }

        if (!valid) e.preventDefault();
    });
});
</script>
@endsection
