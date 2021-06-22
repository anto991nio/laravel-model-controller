<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    public function index(){
        $datiMovies = Movie::all();

        $datiView = [
            "moviesList" => $datiMovies
        ];
        return view("home", $datiView);
    }
}
