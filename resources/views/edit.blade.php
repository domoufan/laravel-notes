@extends('layouts.app')

@section('content')
<h1 class="mb-4">✏️ Modifier la note</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('form')
        </form>
    </div>
</div>
@endsection
