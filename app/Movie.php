<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use App\Item;

class Movie extends Model
{
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    // public function addItem(Item $id) // !!!
    // public function addItem($id) // !!!
    // {
    //     $this->items()->update(compact('id'));
    // }
}
