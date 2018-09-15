<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function addItem($id) // !!!
    {
        $this->items()->create(compact('id'));
    }
}
