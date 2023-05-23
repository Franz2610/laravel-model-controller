@extends('layout.app')

@section('content')
<section class="container">
    <h1>Movie</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{$movie->title}}</li>
        @endforeach
    </ul>
</section>
@endsection
