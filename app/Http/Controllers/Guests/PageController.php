<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Hat;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('guests.welcome', compact('movies'));
    }
    public function movie($id) {


        $movie = Movie::findOrFail($id);

        return view('guests.movie', compact('movie'));
    }
    public function hat() {

        $hats = Hat::all();

        return view('guests.hat', compact('hats'));
    }
}
