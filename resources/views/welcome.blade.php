<h1>Nos animaux</h1>

@foreach ($animals as $animal)
    <div>
        <h2>{{ $animal['name'] }}</h2>
        <p>{{ $animal['species'] }} – {{ $animal['age'] }} ans</p>
        <p>{{ $animal['description'] }}</p>

        <img 
            src="{{ asset('images/' . $animal['photo']) }}" 
            alt="{{ $animal['name'] }}"
            width="200"
        >
    </div>
@endforeach
