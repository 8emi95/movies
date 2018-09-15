<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Show;
use App\Item;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('add_movie');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);

        Movie::create(request(['title']));

        return redirect('/add-movie');
    }

    public function combine()
    {
        $movies = Movie::all();
        return view('combine', compact('movies'));
    }

    public function combineMovies(Request $request)
    {
        $this->validate(request(), [
            'first' => 'required|different:second',
            'second' => 'required'
        ]);

        Show::create(['movie1_id' => $request->get('first'), 'movie2_id' => $request->get('second')]);

        return redirect('/combine');
    }

    // public function assign(Item $item)
    public function assign(Request $request)
    {
        // $movie->addItem(request('movie_id'));

        // $movie_id = $request->input('movie_id')
        // $item = Item::find()
        // $movie_id = Movie::find()
        // $u 

        // $item_id = 'item' . $item->id;
        // $movie_id = $request->get($item_id);
        // $item->movie_id = $movie_id;
        // $item->save();

        $movie_id = $request->get($request->input('name'));
        $item->movie_id = $movie_id;
        // $movie = Movie::find($movie_id);
        // $item->movie_id = $movie;
        $item->save();

        // Item::where('id', $id)->update(array('movie_id' => $movie->id)); // $id???

        // $item = Item::find($id);
        // $item->movie_id = $movie->id;
        // $item->save();

        return back();
    }

}
