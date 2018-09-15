<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public $timestamps = false;

    public function movie1()
    {
        return $this->belongsTo(Movie::class);
    }

    public function movie2()
    {
        return $this->belongsTo(Movie::class);
    }
}
