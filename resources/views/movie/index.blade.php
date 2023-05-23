@extends('layout.app')

@section('content')
<section class="container justify-content-center">
    <h1 class="text-center">Movie</h1>
    <ul class="d-flex flex-wrap">
        @foreach ($movies as $movie)
        <li class="w-50 justify-content-center align-items-center py-3"><a class="text-black" href="{{route('movie.show', ['id'=>$movie->id])}}">{{$movie->title}}</a></li>
        @endforeach
    </ul>
</section>
@endsection
