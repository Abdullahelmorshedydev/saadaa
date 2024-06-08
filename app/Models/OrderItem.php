<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'venue_id',
        'date',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
