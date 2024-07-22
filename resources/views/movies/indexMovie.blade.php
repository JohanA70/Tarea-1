@extends('layouts.app')

@section('content')

<div style="width: 80%; margin-left: 5%;">
    <h1>Movies</h1>
    <button class="btn btn-primary" style="margin-bottom: 20px;">
        <a href="{{ route('movies.create') }}" style="color: white;">Nueva Pelicula</a>
    </button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Año</th>
                <th scope="col">Estudio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td scope="row">{{ $movie->title }}</td>
                <td>{{ $movie->year }}</td>
                <td>{{ $movie->studio }}</td>
                <td>{{ $movie->category ? $movie->category->name : 'No category' }}</td>
                <td>
                    <button type="button" class="btn btn-primary">
                        <a style="color: white;" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                    </button>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection