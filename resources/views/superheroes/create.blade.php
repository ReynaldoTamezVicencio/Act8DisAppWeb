@extends('layouts.app')

@section('content')
    <h1>Registrar Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre_real" placeholder="Nombre real" required>
        <input type="text" name="nombre_superheroe" placeholder="Nombre de superhéroe" required>
        <input type="url" name="foto_url" placeholder="URL de la foto" required>
        <textarea name="informacion_adicional" placeholder="Información adicional"></textarea>
        <button type="submit">Guardar</button>
    </form>
@endsection