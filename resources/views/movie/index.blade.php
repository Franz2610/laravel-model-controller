@extends('layout.app')

@section('content')
<section class="container">
    <h1>Movie</h1>
    <ul>
        @foreach ($movies as $movie)
        <li><a href="{{route('movie.show', ['id'=>$movie->id])}}">{{$movie->title}}</a></li>
        @endforeach
    </ul>
</section>
@endsection
