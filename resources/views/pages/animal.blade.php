@extends('layouts.app')

@section('title', $animal['name'])

@section('content')
    <h1>{{ $animal['name'] }}</h1>

    <img src="{{ asset('images/' . $animal['photo']) }}" width="200">

    <p>Espèce : {{ $animal['species'] }}</p>
    <p>Âge : {{ $animal['age'] }} ans</p>
    <p>{{ $animal['description'] }}</p>
@endsection
