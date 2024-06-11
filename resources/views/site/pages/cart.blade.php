@extends('site.layouts.app')
@section('title', 'SAADA')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/link pic.jpg') }}">
@endpush
@section('content')
    @include('site.includes.navbar')

    <section class="whole-cart">
        <section class="add-cart">
            <table class="cart-table">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Event Name</td>
                        <td>Venue Address</td>
                        <td>Price</td>
                        <td>Date</td>
                        <td>Action</td>
                    </tr>
                    @if (!empty($cartItems))
                        @foreach ($cartItems as $cartItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($cartItem->venue->image ? 'storage/' . $cartItem->venue->image->image : 'admin/images/morshedy.jpg') }}"
                                        width="50px" alt="">
                                </td>
                                <td>{{ $cartItem->venue->event->name }}</td>
                                <td>{{ $cartItem->venue->address }}</td>
                                <td>{{ $cartItem->venue->price }}</td>
                                <td>{{ $cartItem->date }}</td>
                                <td>
                                    <form action="{{ route('cart.delete_item') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $cartItem->id }}">
                                        <button class="cart-btn" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            </p> <br>
            <h2> Shopping Cart </h2>
            <p id="demo2"></p>
            <h2>Grand Total:</h2>
            <p id="demo3">{{ $cart_total }}</p>
            @if (!empty($cartItems))
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                    <button class="cart-btn" type="submit">
                        Checkout
                    </button>
                </form>
            @endif
        </section>
    </section>
@endsection
@push('script')
@endpush
