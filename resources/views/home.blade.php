@extends('layout.app')

@section('content')
<section class="container text-center py-3 bg-primary text-white">
    <h1>Benvenuti, in My Movies</h1>
    <a class="text-white" href="{{route('movie.index')}}">Guarda il catalogo</a>
    <img src="https://tse1.mm.bing.net/th?id=OIP._uMoF_a-q6yrJovJptgv2gAAAA&pid=Api&P=0&h=180" alt="dowload">
</section>
@endsection
