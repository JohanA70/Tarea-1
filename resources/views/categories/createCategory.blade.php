@extends('layouts.app')

@section('content')
<h1>Nueva Categoria</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nombre:</label>
        <input style="width: 40%; margin-bottom: 10px;" class="form-control" type="text" id="name" name="name" required>
    </div>
    <div>
        <button class="btn btn-primary" style="margin-top: 20px;" type="submit">Añadir Categoria</button>
        <button style="margin-top: 20px;" type="button" class="btn btn-primary">
            <a href="{{ route('categories.index') }}" style="color: white;">Cerrar</a>
        </button>
    </div>
</form>
@endsection