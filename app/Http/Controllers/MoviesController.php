<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function show(Movie $movie){
        
        return view('movies.show', [
            'movie' => $movie,
        ]);

    }
}