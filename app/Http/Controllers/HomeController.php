<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        //$movies = Movie::where('vote', '>', 9)->get();
        $mostPopularMovies = Movie::select('title', 'id')->where('vote', '>', 9)->get();
        $books = Book::orderBy('title', 'asc')->limit(3)->get();
        $data = [
            'mostPopularMovies' => $mostPopularMovies,
            'books' => $books
        ];

        return view('home', $data);
    }

}
