<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemCategory as Category;
use App\Cart;
use App\Transaction;
use App\TransactionDetail;


class Item extends Model
{
    //
    protected $guard = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function transactions()
    {
        return $this->belongsTo(Transaction::class,TransactionDetail::class);
    }

}
