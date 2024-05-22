@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main class="container">
    <h1>{{ $book->title }}</h1>
    <p>{{$book->plot}}</p>

</main>

@endsection
