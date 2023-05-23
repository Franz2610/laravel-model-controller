<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movie.index', compact('movies'));
    }

    public function show($id){
        $movies = Movie::find($id);
        return view('movie.show', compact('movies'));

    }
}
