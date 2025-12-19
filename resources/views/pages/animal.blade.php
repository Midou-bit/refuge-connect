@extends('layouts.app')

@section('title', $animal->name)

@section('content')
<section>
    <h2>{{ $animal->name }}</h2>
    <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
    <p>{{ $animal->species }} – {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
    <p><a href="{{ route('home') }}">Retour</a></p>
</section>
@endsection
