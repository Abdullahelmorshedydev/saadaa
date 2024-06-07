<?php

namespace App\Http\Controllers\Web\Site;

use App\Enums\EventTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $outdoorEvents = Event::where('type', EventTypeEnum::OUTDOOR->value)->get();
        $indoorEvents = Event::where('type', EventTypeEnum::INDOOR->value)->get();
        return view('site.index', compact('outdoorEvents', 'indoorEvents'));
    }
}
