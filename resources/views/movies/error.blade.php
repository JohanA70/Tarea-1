@extends('layouts.app')

@section('content')
    <h1>Error</h1>
    <p>{{ $message }}</p>
    <a href="{{ route('movies.index') }}">Back to Movies</a>
@endsection
