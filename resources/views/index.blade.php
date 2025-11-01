@extends('layouts.app')

@section('content')
<div class="container">
    <h2>📝 Liste des notes</h2>

    <a href="{{ route('trash') }}" class="btn btn-secondary mb-3">🗑️ Voir la corbeille</a>

    @foreach ($notes as $note)
        <div class="card mb-3 p-3">
            <h5>{{ $note->title }}</h5>
            <p>{{ $note->content }}</p>

            <div class="d-flex gap-2">
                <a href="{{ route('show', $note) }}" class="btn btn-info btn-sm">Voir</a>
                <a href="{{ route('edit', $note) }}" class="btn btn-warning btn-sm">Modifier</a>

                <form action="{{ route('destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cette note ?')">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    @endforeach

    {{ $notes->links() }}
</div>
@endsection
