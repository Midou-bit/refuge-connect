<article>
    <h2>{{ $animal->nom }}</h2>

    <img 
        src="{{ asset('images/animaux/' . $animal->photo) }}" 
        alt="{{ $animal->nom }}"
        width="200"
    >

    <p><strong>Espèce :</strong> {{ $animal->espece }}</p>
    <p><strong>Âge :</strong> {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>

    <a href="{{ route('animals.show', $animal->id) }}">Voir la fiche</a>

    <br><br>

    <a href="{{ route('animals.edit', $animal->id) }}">Modifier</a> |
    <a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a>
</article>
