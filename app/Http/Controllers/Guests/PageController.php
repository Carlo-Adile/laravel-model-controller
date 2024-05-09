<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $movie = Movie::all();

        return view('guests.welcome', compact('movie'));
    }
    public function about() {

        return view('guests.about');
    }
    public function contacts() {

        return view('guests.contacts');
    }
}