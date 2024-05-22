@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="container">
    <h1>All Books</h1>
{{-- <ul> --}}
    <div class="row">
        @foreach ($books as $item)
        <div class="col-12 col-md-4 col-lg-3">
            @include('partials.card')
        </div>
        {{-- <li><a href="{{route('books.show', $book->id)}}">{{ $book->title }}</a></li> --}}

        @endforeach
    </div>

{{-- </ul> --}}

</main>

@endsection
