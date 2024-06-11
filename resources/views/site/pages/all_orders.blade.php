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
                        <td>Event Name</td>
                        <td>Venue Address</td>
                        <td>Items</td>
                    </tr>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->total }}</td>
                            <td>
                                @foreach ($order->items as $item)
                                    {{ $item->venue->event->name . '-' . $item->date }}
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </section>
@endsection
@push('script')
@endpush
