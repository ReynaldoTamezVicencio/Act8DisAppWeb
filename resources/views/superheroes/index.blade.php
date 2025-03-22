@extends('layouts.app')

@section('content')
    <h1>Lista de Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}">Agregar Nuevo Superhéroe</a>

    @foreach ($superheroes as $superheroe)
        @if (!$superheroe->trashed()) 
            <tr>
                <td>{{ $superheroe->nombre_real }}</td>
                <td>{{ $superheroe->nombre_superheroe }}</td>
                <td><img src="{{ asset('storage/' . $superheroe->foto) }}" width="100"></td>
                <td>
                    <a href="{{ route('superheroes.edit', $superheroe->id) }}">Editar</a>
                    <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endif
    @endforeach
    <a href="{{ route('superheroes.deleted') }}">Ver Superhéroes Eliminados</a>
@endsection