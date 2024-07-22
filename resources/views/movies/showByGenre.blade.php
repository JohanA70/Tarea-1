@extends('layouts.app')

@section('content')
    <h1>Movies in Genre: {{ $genre }}</h1>
    <a href="{{ route('movies.index') }}">Back to Movies</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Studio</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->studio }}</td>
                    <td>{{ $movie->category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
