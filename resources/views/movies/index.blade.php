@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="container">
    <h1>All Movies</h1>
    <div class="row">
        @foreach ($movies as $item)
        <div class="col-12 col-md-4 col-lg-3">
            @include('partials.card')
        </div>
        @endforeach
    </div>


    {{-- <li><a href="{{route('movies.show', $movie->id)}}">{{ $movie->title }}</a></li> --}}


</ul>

</main>

@endsection
