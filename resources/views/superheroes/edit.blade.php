@extends('layouts.app')

@section('content')
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nombre_real" value="{{ $superheroe->nombre_real }}" required>
        <input type="text" name="nombre_superheroe" value="{{ $superheroe->nombre_superheroe }}" required>
        <input type="url" name="foto_url" value="{{ $superheroe->foto_url }}" required>
        <textarea name="informacion_adicional">{{ $superheroe->informacion_adicional }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
@endsection