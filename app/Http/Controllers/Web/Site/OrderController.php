<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data['user_id'] = auth()->user()->id;
        $data['total'] = auth()->user()->cart->total;

        $order = Order::create($data);

        $cartItems = CartItem::where('cart_id', auth()->user()->cart->id)->get();
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'venue_id' => $cartItem->venue_id,
                'date' => $cartItem->date,
            ]);
        }

        Cart::where('id', auth()->user()->cart->id)->delete();

        return redirect()->route('order.all_orders')->with('success', 'Order Checked out successfully');
    }

    public function allOrders()
    {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('updated_at', 'DESC')->get();
        return view('site.pages.all_orders', compact('orders'));
    }
}
