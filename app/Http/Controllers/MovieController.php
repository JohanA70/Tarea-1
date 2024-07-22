<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('category')->get();
        return view('movies.indexMovie', compact('movies'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('movies.createMovie', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer',
            'studio' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        Movie::create($request->all());
        return redirect()->route('movies.index');
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required|integer',
            'studio' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $movie->update($request->all());
        return redirect()->route('movies.index');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }

    public function edit(Movie $movie)
    {
        $categories = Category::all();
        return view('movies.editMovie', compact('movie', 'categories'));
    }


    public function showByGenre($genre)
    {
        $movies = Movie::whereHas('category', function ($query) use ($genre) {
            $query->where('name', $genre);
        })->get();

        if ($movies->isEmpty()) {
            return view('movies.error', ['message' => 'No movies found for this genre']);
        }

        return view('movies.showByGenre', compact('genre', 'movies'));
    }
}
