<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Venue extends Model
{
    use HasFactory;

    const IMG_URL = 'uploads/venues/';

    protected $fillable = [
        'name',
        'address',
        'price',
        'user_id',
        'event_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'morphable');
    }
}
