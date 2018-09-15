<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
