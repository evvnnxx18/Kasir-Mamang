<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use App\Item;

class TransactionDetail extends Model
{
    //
    protected $guard = [];

    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function items()
    {
        return $this->belongsTo(Item::class);
    }
    
}
