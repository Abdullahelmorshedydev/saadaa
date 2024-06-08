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
    public function checkout()
    {
        return view('web.site.pages.order.checkout');
    }

    public function store(Request $request)
    {
        $data = $request->validated();
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

        return redirect()->route('order.order_success', $order->id)->with('success', __('site/order.success'));
    }

    public function orderSuccess(Order $order)
    {
        return view('web.site.pages.order.success_order', compact('order'));
    }

    public function allOrders()
    {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('updated_at', 'DESC')->paginate();
        return view('web.site.pages.order.all_orders', compact('orders'));
    }
}
