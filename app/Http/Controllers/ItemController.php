<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Movie;

class ItemController extends Controller
{
    public function add()
    {
        return view('add_item');
    }

    public function assign()
    {
        $movies = Movie::all();
        $items = Item::all();
        return view('assign', compact(['movies', 'items']));
    }

    public function assignToMovie(Movie $movie)
    {
        $movie->addItem(request('movie_id'));
        return back();
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        Item::create(request(['name', 'quantity', 'price']));
        return redirect('/add-item');
    }

    public function shows()
    {
        $movies = Movie::all();
        $items = Item::all();
        $shows = \DB::table('shows')->get();
        return view('shows', compact(['movies', 'items', 'shows']));
    }
}
