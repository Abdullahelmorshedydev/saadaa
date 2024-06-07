@extends('site.layouts.app')
@section('title', 'SAADA')
@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/birthday.css') }}">
@endpush
@section('content')
    <nav>
        <div class="nav_logo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/nav.jpg') }}" /></a>
        </div>
        <div class="nav_items">
            <ul class="nav">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('index') }}#cards">Events</a></li>
                <li><a href="{{ route('about.index') }}">About us</a></li>
                <li><a href="{{ route('contact.index') }}">Contact us</a></li>
                @guest
                    <li><a class="sigin-btn" href="{{ route('login.index') }}">sign in</a></li>
                @endguest
                @auth
                    @if (is_admin())
                        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    @endif
                    <li><a class="sigin-btn" href="{{ route('logout') }}">sign out</a></li>
                @endauth
            </ul>
        </div>
        <i onclick="showsidebar()" class="fa-solid fa-bars nav-icon" id="NAV-icon"></i>
    </nav>

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
                <div id="engagment indoor1" class="swiper-slide">
                    <img src="{{ asset('assets/images/indoor engagment 1.jpg') }}"
                        class="animate__animated  animate__fadeInLeft" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a animate__animated  animate__fadeInLeft">
                            <h3 class="awlqa3ah1" style="color: #d400ae; ">mona Zaki </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 0105725511
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner </p>
                        </div>
                        <div class="awlqa3a2">
                            <p class="awlqa3a2p animate__animated animate__fadeInUp" style="color: #d400ae;">
                                price:8000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>
                    </div>
                </div>
                <div id="engagment indoor2" class="swiper-slide">
                    <img src="{{ asset('assets/images/indoor engagment 2.jpg') }}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1" style="color: #d400ae;">hossam antika </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01138955903 - 01179385011
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner </p>
                        </div>
                        <div class="awlqa3a2">
                            <p class="awlqa3a2p" style="color: #d400ae;">
                                price:10000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>
                    </div>
                </div>
                <div id="engagment indoor3" class="swiper-slide">
                    <img src="{{ asset('assets/images/indoor engagment 4.jpg') }}" alt="">
                    <div class="awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1" style="color: #d400ae;">ezz yahya </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01092055544 - 01138955903
                            </p>
                            <p class="awlqa3ap2">proffesinal event planner</p>
                        </div>
                        <div class="awlqa3a2">
                            <p class="awlqa3a2p" style="color: #d400ae;">
                                price:15000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>
                    </div>
                </div>
                <div id="engagment indoor4" class="swiper-slide">
                    <img src="{{ asset('assets/images/indoor engagment 3.jpg') }}">
                    <div class=" awlqa3akber">
                        <div class="awlqa3a">
                            <h3 class="awlqa3ah1" style="color: #d400ae;">Bothina amr </h3>
                            <p class="awlqa3ap"> For reservations and inquiries: 01168225789 - 01235793326
                            </p>
                            <p class="awlqa3ap2"> proffesinal event planner</p>
                        </div>
                        <div class="awlqa3a2">
                            <p class="awlqa3a2p" style="color: #d400ae;">
                                price:20000
                            </p>
                            <button class="engagmentindoorbutton"> check out</button>
                        </div>
                    </div>
                </div>
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
