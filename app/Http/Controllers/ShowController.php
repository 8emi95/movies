<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Item;
use App\Show;

class ShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $movies = Movie::all();
        $items = Item::all();
        $shows = Show::all();
        return view('shows', compact(['movies', 'items', 'shows']));
    }

}
