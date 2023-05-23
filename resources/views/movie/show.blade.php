@extends('layout.app')

@section('content')
<section class="container justify-content-center align-items-center text-center mb-3">
    <h1>{{$movies->title}}</h1>
    <p>Voto : {{$movies->vote}} / 10</p>
    <p>E' uscito nelle sale il : {{$movies->date}}</p>
    <p>La lingua di produzione del film è {{$movies->nationality}}, di fatti il titolo originale è {{$movies->original_title}} </p>
    <img class="w-25" src="{{$movies->image}}" alt="{{$movies->title}}">
</section>
@endsection
