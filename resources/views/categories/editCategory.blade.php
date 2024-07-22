@extends('layouts.app')

@section('content')
<h1>Editar Categoria</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nombre:</label>
        <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>
    </div>
    <div>
        <button style="margin-top: 20px;" class="btn btn-primary" type="submit">Actualizar Categoria</button>
        <button style="margin-top: 20px;" type="button" class="btn btn-primary">
            <a href="{{ route('categories.index') }}" style="color: white;">Cerrar</a>
        </button>
    </div>
</form>
@endsection