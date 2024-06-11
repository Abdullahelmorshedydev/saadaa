<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Order;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $orders_count = Order::count();
        $events_count = Event::count();
        $venues_count = Venue::count();
        $users_count = User::count();
        return view('admin.index', compact('orders_count', 'events_count', 'venues_count', 'users_count'));
    }
}
