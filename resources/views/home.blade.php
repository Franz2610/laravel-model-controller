@extends('layout.app')

@section('content')
<section class="container text-center py-3">
    <h1>Benvenuti, in My Movies</h1>
    <h6>Primo sito legale per scaricare i film migliori di sempre</h6>
    <a class="text-uppercase text-black-50" href="{{route('movie.index')}}">Guarda il catalogo</a>
    <img class="justify-content-center py-3" src="https://tse1.mm.bing.net/th?id=OIP._uMoF_a-q6yrJovJptgv2gAAAA&pid=Api&P=0&h=180" alt="dowload">
</section>
@endsection
