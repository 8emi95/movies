<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
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

    public function check(Request $request)
    {
        $this->validate(request(), [
            'first' => 'required|different:second',
            'second' => 'required'
        ]);

        $id = \DB::table('shows')->insertGetId([
            'movie1_id' => $request->get('first'),
            'movie2_id' => $request->get('second')
        ]);

        return redirect('/combine');
    }

}
