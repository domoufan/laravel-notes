@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ $note->title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ $note->content }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('index') }}" class="btn btn-secondary">⬅ Retour</a>
    </div>
</div>
@endsection
