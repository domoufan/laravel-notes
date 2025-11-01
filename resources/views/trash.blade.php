@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🗑️ Notes supprimées</h2>

    <a href="{{ route('index') }}" class="btn btn-primary mb-3">⬅️ Retour aux notes</a>

    @foreach ($notes as $note)
        <div class="card mb-3 p-3">
            <h5>{{ $note->title }}</h5>
            <p>{{ $note->content }}</p>

            <div class="d-flex gap-2">
                <form action="{{ route('restore', $note->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-success btn-sm">Restaurer</button>
                </form>

                <form action="{{ route('forceDelete', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer définitivement ?')">
                        Supprimer définitivement
                    </button>
                </form>
            </div>
        </div>
    @endforeach

    {{ $notes->links() }}
</div>
@endsection
