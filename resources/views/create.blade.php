@extends('layouts.app')

@section('content')
<h1 class="mb-4">➕ Nouvelle note</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('store') }}" method="POST">
            @include('form')
        </form>
    </div>
</div>
@endsection
