@extends('layouts.app')

@section('content')
    <h1>Superhéroes Eliminados</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>Nombre Real</th>
                <th>Nombre de Superhéroe</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superheroe)
                <tr>
                    <td>{{ $superheroe->nombre_real }}</td>
                    <td>{{ $superheroe->nombre_superheroe }}</td>
                    <td>
                        <form action="{{ route('superheroes.restore', $superheroe->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Restaurar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('superheroes.index') }}">Volver a la lista</a>
@endsection