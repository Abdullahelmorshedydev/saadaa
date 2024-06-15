<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Site\AddToCartRequest;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Venue;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = [];
        $cart_total = 0;
        if (auth()->user()->cart) {
            $cartItems = auth()->user()->cart->items;
            $cart_total = auth()->user()->cart->total;
        }
        return view('site.pages.cart', compact('cartItems', 'cart_total'));
    }

    public function addToCart(AddToCartRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        $venue = Venue::where('id', $data['id'])->first();

        $cart = auth()->user()->cart;
        if (!isset($cart)) {
            $cart = Cart::create($data);
        }

        CartItem::create([
            'cart_id' => $cart->id,
            'venue_id' => $data['id'],
            'date' => $data['date'],
        ]);

        $cart->update([
            'total' => $cart->total + $venue->price,
        ]);

        return back();
    }

    public function removeItem(Request $request)
    {
        $cart = auth()->user()->cart;
        $cart_item = CartItem::where('id', $request->id)->first();
        $cart->update([
            'total' => $cart->total - $cart_item->venue->price,
        ]);
        $cart_item->delete();
        return back();
    }
}
