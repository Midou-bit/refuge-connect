@extends('layouts.app')

@section('title', $animal['name'])

@section('content')
    <h1>{{ $animal['name'] }}</h1>

    <div class="animal-show">
        <img
            src="{{ asset('images/animaux/' . $animal['photo']) }}"
            alt="{{ $animal['name'] }}"
        >

        <div class="animal-info">
            <p><strong>Espèce :</strong> {{ $animal['species'] }}</p>
            <p><strong>Âge :</strong> {{ $animal['age'] }} ans</p>
            <p>{{ $animal['description'] }}</p>
        </div>
    </div>
@endsection
