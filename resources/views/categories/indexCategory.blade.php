@extends('layouts.app')

@section('content')
<h1>Categories</h1>
<button type="button" class="btn btn-primary">
    <a style="color: white;" href="{{ route('categories.create') }}">Nueva Categoria</a>
</button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td scope="row">{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <button type="button" class="btn btn-primary">
                    <a style="color: white;" href="{{ route('categories.edit', $category->id) }}">Editar</a>
                </button>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection