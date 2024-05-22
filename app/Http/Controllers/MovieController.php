<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //@dd($movies);
        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        //codice per recuperare il filme dal database
        // $movie = Movie::find($id);
        // if ($movie) {
        //     return view('movies.show', compact('movie'));
        // } else {
        //     abort(404);
        // }
        //$movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

}
