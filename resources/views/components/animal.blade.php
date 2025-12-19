<article>
    <a href="{{ route('animals.show', $animal->id) }}">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
    </a>
    <h2>{{ $animal->name }}</h2>
    <p>{{ $animal->species }} – {{ $animal->age }} ans</p>
    <a href="{{ route('animals.update', $animal->id) }}">Modifier</a>
    <a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a>
</article>
