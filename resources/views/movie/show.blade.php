@extends('layout.app')

@section('content')
<section>
    <h1>{{$movies->title}}</h1>
    <p>  {{$movies->vote}}</p>
    <img src="{{$movies->image}}" alt="{{$movies->title}}">
</section>
@endsection
