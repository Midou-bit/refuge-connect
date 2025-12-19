@extends('layouts.app')

@section('title', 'Page non trouvée')

@section('content')
    <h2>Page non trouvée</h2>
    <a href="{{ route('home') }}">Retour à l’accueil</a>
@endsection
