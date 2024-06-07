@extends('site.layouts.app')
@section('title', 'SAADA')
@push('style')
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

    <div class="firstdivcontactus">
        <h1 class="firstdivcontactush1 wow animate__animated animate__backInLeft">
            Pop in, Drop Us a Line or <br><span class="firstdivcontactush1span"> Book Now</span>
        </h1>
        <br>
        <p class="firstdivcontactusp wow animate__animated animate__backInRight">
            Thank you for your interest in working with us! Please fill our digital form and we will contact you as
            soon
            as possible.
        </p>
    </div>

    <div class="seconddivcontactus">
        <div class="seconddivcontactus1 wow animate__animated animate__zoomInLeft animate__delay-1s">
            <h1 class="seconddivcontactus1h1 ">
                Drop us a Line
            </h1>
            <form action="{{ route('contact.store') }}" method="POST" class="form1" style="padding: 0px;" onsubmit="return validateForm()">
                @csrf
                <h3 class="seconddiv1contactus1h3">Your Name</h3>
                <input class="input1" type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div id="nameError" class="error">{{ $message }}</div>
                @enderror

                <h3 class="seconddiv2contactus1h3">Your Email</h3>
                <input class="input2" type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <div id="emailError" class="error">{{ $message }}</div>
                @enderror

                <h3 class="seconddiv3contactus1h3">Your Feedback</h3>
                <input class="input3" type="text" id="feedback" name="feedback" value="{{ old('feedback') }}">
                @error('feedback')
                <div id="feedbackError" class="error">{{ $message }}</div>
                @enderror

                <button type="submit" class="seconddivcontactusbutton">Submit</button>
        </div>

        <img class="sorafunday wow animate__animated animate__zoomInRight animate__delay-1s"
            src="{{ asset('assets/images/far7.jpg') }}">
    </div>

    <section class="section3 wow animate__animated animate__lightSpeedInRight">
        <div class="div1section3 wow animate__animated">
            <i class="fa-solid fa-phone"></i>
            <p>800-275-8777</p>
        </div>
        <div class="div2section3">
            <i class="fa-brands fa-skype"></i>
            <p>SAA'DA Skype</p>
        </div>
        <div class="div3section3">
            <i class="fa-solid fa-message"></i>
            <p>SAA'DA@info.com</p>
        </div>
    </section>

    <section class="section4 wow animate__animated animate__lightSpeedInLeft">
        <div class="div1section4">
            <h1>How to Find <br><span> Our SAA'DA </span> </h1>
        </div>
        <div class="div2section4">
            <p>works with different organizations of all shapes, sizes and locations across all industries to give
                our
                clients an unmatched experience that stands out.</p>
        </div>
    </section>

    <section class="section5">
        <div class="div1section5 wow animate__animated animate__fadeInBottomLeft">
            <iframe class="map2"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.77448154454!2d31.2237049256424!3d30.07199816726684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840fc1158defb%3A0xc53ffe335f9d6297!2sPBIS%20BIS%20Faculty%20of%20Commerce%20and%20Business%20Administration!5e0!3m2!1sar!2seg!4v1714510834416!5m2!1sar!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="div2section5 wow animate__animated animate__fadeInBottomRight">
            <h1 class="div2section5a">Opening Times</h1>
            <p class="div2section5p1">Monday – Friday: 9:00 – 18:00</p>
            <p class="div2section5p2">Closed Staurday, Sunday and public holidays</p>
            <br>
            <br>
            <br>
            <br>
            <h1 class="div2section5h2">Address</h1>
            <p class="div2section5p3">43 Abu Fida,, cairo, 4271184.</p>
            <p class="div2section5p4">Muhammad Mazhar, Zamalek, Cairo Governorate</p>
        </div>
    </section>
@endsection
@push('script')
    <script src="{{ asset('assets/js/showcard.js') }}"></script>
@endpush
