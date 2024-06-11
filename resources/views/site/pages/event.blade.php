@extends('site.layouts.app')
@section('title', 'SAADA')
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/birthday.css') }}">
@endpush
@section('content')
    @include('site.includes.navbar')

    <div class="weedingpage">
        <div class="weedingimg">
            <img class="weedingimg1 animate__animated  animate__fadeInRight"
                src="{{ asset('assets/images/indoor engagment logo.jpg') }}" alt="">
        </div>
        <div class="swiper mySwiper">
            <div class="weedinghalls">
                <h3 class="engagmentindoorhallsh3 animate__animated animate__fadeInDown ">Our event planners</h3>
            </div>
            <div class="swiper-wrapper">
                @foreach ($event->venues as $venue)
                    <div id="engagment indoor1" class="swiper-slide">
                        <img src="{{ asset($venue->image ? 'storage/' . $venue->image->image : 'admin/images/morshedy.jpg') }}"
                            class="animate__animated  animate__fadeInLeft" alt="">
                        <div class="awlqa3akber">
                            <div class="awlqa3a animate__animated  animate__fadeInLeft">
                                <h3 class="awlqa3ah1" style="color: #d400ae; ">{{ $venue->name }}</h3>
                                <p class="awlqa3ap"> For reservations and inquiries: {{ $venue->user->phone }}
                                </p>
                                <p class="awlqa3ap2"> {{ $venue->address ?: '' }} </p>
                            </div>
                            <div class="awlqa3a2">
                                <p class="awlqa3a2p animate__animated animate__fadeInUp" style="color: #d400ae;">
                                    price:{{ $venue->price }}
                                </p>
                                @php
                                    $in_cart = false;
                                    if (
                                        auth()->user() &&
                                        auth()->user()->cart &&
                                        isset(
                                            auth()
                                                ->user()
                                                ->cart->items()
                                                ->where('venue_id', $venue->id)
                                                ->first()->id,
                                        )
                                    ) {
                                        $in_cart = true;
                                    }
                                @endphp
                                @if (!$in_cart)
                                    <form action="{{ route('cart.add_to_cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $venue->id }}">
                                        <input type="date" name="date" class="form-conrol col-3 mt-3 mb-3">
                                        <button type="submit" class="engagmentindoorbutton"> Add To Cart</button>
                                    </form>
                                @else
                                    <button class="engagmentindoorbutton" onclick="window.location.href='../cart';"> View
                                        Cart</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>
@endpush
