@extends('layouts.app')

@section('content')
<div style="width: 80%; margin-left: 5%;">
    <h1>Nueva Pelicula</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titulo:</label>
            <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="year">Año:</label>
            <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="number" id="year" name="year" required>
        </div>
        <div>
            <label for="studio">Estudio:</label>
            <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="text" id="studio" name="studio" required>
        </div>
        <div>
            <label for="category_id">Categoria:</label>
            <select style="width: 40%; margin-bottom: 30px;" class="form-select" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Añadir Pelicula</button>
            <button type="button" class="btn btn-primary">
                <a href="{{ route('movies.index') }}" style="color: white;">Cerrar</a>
            </button>
        </div>
    </form>
</div>
@endsection