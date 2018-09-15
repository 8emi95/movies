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

    public function assignToMovie(Movie $movie)
    // public function assignToMovie(Request $request)
    {
        // $movie->addItem(request('movie_id'));

        // $movie_id = $request->get('value');
        // $item = Item::find(substr($request->get('name'), -1));
        // $item->movie_id = $movie_id;
        // $item->save();

        $movie_id = request('value');
        $item = request(substr('name', -1));
        $item->movie_id = $movie_id;
        $item->save();

        // $item = Item::all();
        // $item_id = $request->input('name');
        // $movie_id = $request->get($item_id);
        // $item->movie_id = $movie_id;
        // $movie_id = $request->get('name');
        // $movie = Movie::find($movie_id);
        // $item->movie_id = $movie;
        // $item->save();

        // Item::where('id', $id)->update(array('movie_id' => $movie->id)); // $id???

        // $item = Item::find($id);
        // $item->movie_id = $movie->id;
        // $item->save();

        return back();
    }

}
