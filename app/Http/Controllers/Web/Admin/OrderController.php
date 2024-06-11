<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate();
        return view('admin.pages.order.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.pages.order.show', compact('order'));
    }
}
