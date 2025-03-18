@extends('layouts.app')

@section('content')
    <h1>{{ $superheroe->nombre_superheroe }}</h1>
    <p>Nombre real: {{ $superheroe->nombre_real }}</p>
    <img src="{{ $superheroe->foto_url }}" alt="Foto de {{ $superheroe->nombre_superheroe }}" width="200">
    <p>{{ $superheroe->informacion_adicional }}</p>
    <a href="{{ route('superheroes.edit', $superheroe->id) }}">Editar</a>
    <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection