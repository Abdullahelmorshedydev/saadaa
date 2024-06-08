<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'venue_id',
        'date',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
