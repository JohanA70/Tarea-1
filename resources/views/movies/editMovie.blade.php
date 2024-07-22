@extends('layouts.app')

@section('content')
<div style="width: 80%; margin-left: 5%;">
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titulo:</label>
            <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="text" id="title" name="title" value="{{ old('title', $movie->title) }}" required>
        </div>
        <div>
            <label for="year">Año:</label>
            <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="number" id="year" name="year" value="{{ old('year', $movie->year) }}" required>
        </div>
        <div>
            <label for="studio">Estudio:</label>
            <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="text" id="studio" name="studio" value="{{ old('studio', $movie->studio) }}" required>
        </div>
        <div>
            <label for="category_id">Categoria:</label>
            <select style="width: 40%; margin-bottom: 30px;" class="form-select" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $movie->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Actualizar Pelicula</button>
            <button type="button" class="btn btn-primary">
                <a href="{{ route('movies.index') }}" style="color: white;">Cerrar</a>
            </button>
        </div>
    </form>
</div>
@endsection