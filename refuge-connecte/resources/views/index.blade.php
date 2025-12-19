@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <a href="{{ route('animals.add') }}">Ajouter</a>

    @foreach ($animals as $animal)
        <x-animal :animal="$animal" />
    @endforeach
@endsection
