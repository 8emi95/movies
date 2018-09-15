<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Movie;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('add_item');
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

    public function assign()
    {
        $movies = Movie::all();
        $items = Item::all();
        return view('assign', compact(['movies', 'items']));
    }

    public function assignToMovie(Request $request)
    {

        foreach ($request->except('_token') as $name => $value)
        {
            $item_id = substr($name, 4);
            $movie_id = $value;
            Item::where('id', $item_id)->update(['movie_id' => $movie_id]);
        }

        return back();
    }

}
