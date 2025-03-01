<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function titles() {

        $movies = Movie::all();
        
        $data = [
            "movies" => $movies 
        ];

        return view('titles', $data);
    }

    public function home() {

        return view('home');
    }
}
