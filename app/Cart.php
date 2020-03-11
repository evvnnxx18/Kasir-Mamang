<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Cart extends Model
{
    //
    protected $guard = [];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
