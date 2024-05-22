@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1>Home page</h1>
    <section>
        <h2>Best Books</h2>
        <ul>
            @foreach ($books as $book)
            <li>{{$book->title}}</li>
            @endforeach


        </ul>
    </section>
    <section>
        <h2>Best Movie</h2>
        <ul>
            @foreach ($mostPopularMovies as $movie)
            <li>{{$movie->title}}</li>
            @endforeach


        </ul>
    </section>
</main>

@endsection
