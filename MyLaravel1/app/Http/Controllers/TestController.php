<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function home(){

        $movie1 = new Movie("Django","La vendetta di uno schiavo");
        $movie2 = new Movie("Forrest Gump", "corri");
        $movie1string = $movie1 -> getString();

        dd($movie1string);

        return view("home");
    }
}

class Movie {
    public $title;
    public $description;

    public function __construct($titolo, $descrizione = "bel film")
    {
        $this -> title = $titolo;
        $this -> description = $descrizione;
    }
    public function getString(){
        
        return "titolo: " . $this -> title . " descrizione: " . $this -> description;
    }
}
