@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Nos animaux</h1>

    <div class="animals-wrapper">
        <div class="animals">
            @foreach ($animals as $animal)
                <x-animal-card :animal="$animal" />
            @endforeach
        </div>
    </div>
@endsection
