<div class="card">
    <a href="{{ route('animals.show', $animal['id']) }}">
        <img src="{{ asset('images/animaux/' . $animal['photo']) }}" alt="{{ $animal['name'] }}">
    </a>

    <h2>{{ $animal['name'] }}</h2>
    <p>Espèce : {{ $animal['species'] }}</p>
    <p>Âge : {{ $animal['age'] }} ans</p>
    <p>{{ $animal['description'] }}</p>

    <div class="actions">
        <a href="{{ route('animals.edit', $animal['id']) }}">Modifier</a>
        <a href="{{ route('animals.delete', $animal['id']) }}">Supprimer</a>
    </div>
</div>
