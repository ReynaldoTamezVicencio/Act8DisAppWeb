@extends('layouts.app')

@section('content')
    <h1>Lista de Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}">Agregar Nuevo Superhéroe</a>

    @foreach ($superheroes as $superheroe)
        <div>
            <h2>{{ $superheroe->nombre_superheroe }}</h2>
            <p>Nombre Real: {{ $superheroe->nombre_real }}</p>
            <img src="{{ $superheroe->foto_url }}" alt="{{ $superheroe->nombre_superheroe }}" width="150">
            <p>{{ $superheroe->informacion_adicional }}</p>
            <a href="{{ route('superheroes.show', $superheroe->id) }}">Ver Detalles</a>
            <a href="{{ route('superheroes.show', $superheroe->id) }}">Editar</a>
            <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
@endsection