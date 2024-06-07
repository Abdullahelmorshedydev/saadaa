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

    <div class="feedbacksection1">
        <div class="feedbacksection1divkbera ">
            <div class="feedbacksection1divkbera1">
                <h1 class="feedbacksection1divkbera1h1 wow animate__animated animate__fadeInLeft"> Meet Our</h1>
            </div>
            <div class="feedbacksection1divkbera2">
                <h1 class="feedbacksection1divkbera2h1 wow animate__animated animate__fadeInRight"> SAA'DA Team</h1>
            </div>
        </div>
        <div class="feedbacksection1div2">
            <p class="feedbacksection1div2p wow animate__animated animate__fadeInUp">Our plans and events coordination
                services are designed for Any Sized
                budget, meaning anyone. Our teams and our awesome services will satisfy all your needs.</p>
        </div>
    </div>

    <div class="our-team">
        <div class="ourteam1">
            <div class="sabrina">
                <div class="sabrinaimg">
                    <img class="sabrinaimg1 wow animate__animated animate__backInDown"
                        src="{{ asset('assets/images/ezz.jpg') }}" alt="">
                </div>
                <div class="sabrinacontact wow animate__animated animate__bounceInUp">
                    <h2 class="sabrinacontacth2"> Ezz-Eldin Yahya</h2>
                    <p class="sabrinacontactp">front-end developer </p>
                    <div class="Sabrinaicon">
                        <i class="fa-brands fa-facebook  sabrinaface"
                            onclick="window.location.assign('https://www.facebook.com/ezz.yahya.74/')"></i>
                        <i class="fa-brands fa-instagram sabrinainsta "
                            onclick="window.location.assign('https://www.instagram.com/ezzz_yahya?igsh=MTdnMXAzZzh2azUxaQ==')"></i>
                        <i class="fa-solid fa-envelope sabrinax "
                            onclick="window.location.href = 'mailto:ezzyahya96@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <div class="hashem">
                <div class="hashemimg">
                    <img class="hashemimg1 wow animate__animated animate__backInDown"
                        src="{{ asset('assets/images/hashem.jpg') }}" alt="">
                </div>
                <div class="hashemcontact wow animate__animated animate__bounceInUp">
                    <h2 class="hashemcontacth2"> Hashem Mohamed </h2>
                    <p class="hashemcontactp">Front-end developer </p>
                    <div class="hashemicon">
                        <i class="fa-brands fa-facebook hashemfacebook"
                            onclick="window.location.assign('https://www.facebook.com/hashem.mohamed2002')"></i>
                        <i class="fa-brands fa-instagram hasheminsta"
                            onclick="window.location.assign('https://www.instagram.com/hashem7mohamed?igsh=ZXQ1bDB2YXRxZDdt&utm_source=qr')"></i>
                        <i class="fa-solid fa-envelope hashemx"
                            onclick="window.location.href = 'mailto:zal77166@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <div class="sabrina">
                <div class="sabrinaimg">
                    <img class="sabrinaimg1 wow animate__animated animate__backInDown"
                        src="{{ asset('assets/images/yasmin.jpg') }}" alt="">
                </div>
                <div class="sabrinacontact wow animate__animated animate__bounceInUp">
                    <h2 class="sabrinacontacth2"> Abd-ELrahman Ehab </h2>
                    <p class="sabrinacontactp">Back-end developer </p>
                    <div class="Sabrinaicon">
                        <i class="fa-brands fa-facebook  sabrinaface"
                            onclick="window.location.assign('https://www.facebook.com/abdalrahman.ehab.52')"></i>
                        <i class="fa-brands fa-instagram sabrinainsta "
                            onclick="window.location.assign('https://www.instagram.com/abdalrahman_678?igsh=cmV1eTVhM2s0bzJ4')"></i>
                        <i class="fa-solid fa-envelope sabrinax "
                            onclick="window.location.href = 'mailto:abdalrahmanehab76@gmail.com'"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=" ourteam1">
            <div class="may">
                <div class="mayimg wow animate__animated animate__bounceInDown">
                    <img class="mayimg1" src="{{ asset('assets/images/sabrina2.jpg') }}" alt="">
                </div>
                <div class="maycontact wow animate__animated animate__backInUp" style="background-color: #ff92ed;">
                    <h2 class="maycontacth2">Sabrina Hesham</h2>
                    <p class="maycontactp">back-end developer </p>
                    <div class="mayicon">
                        <i class="fa-brands fa-facebook  mayface"
                            onclick="window.location.assign('https://www.facebook.com/profile.php?id=100008529072400&sk=about')"></i>
                        <i class="fa-brands fa-instagram mayinsta"
                            onclick="window.location.assign('https://www.instagram.com/sabrina_hisham75?igsh=bmN1OXdxeHgwZ3Rj')"></i>
                        <i class="fa-solid fa-envelope mayx"
                            onclick="window.location.href='mailto:sabrinahesham578@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <div class="may">
                <div class="mayimg">
                    <img class="mayimg1 wow animate__animated animate__backInDown"
                        src="{{ asset('assets/images/may.jpg') }}" alt="">
                </div>
                <div class="maycontact  wow animate__animated animate__bounceInUp" style="background-color: #ff92ed;">
                    <h2 class="maycontacth2">May Mahmoud</h2>
                    <p class="maycontactp">Front-end developer </p>
                    <div class="mayicon">
                        <i class="fa-brands fa-facebook  mayface"
                            onclick="window.location.assign('https://www.facebook.com/profile.php?id=100011643663980')"></i>
                        <i class="fa-brands fa-instagram mayinsta"
                            onclick="window.location.assign('https://www.instagram.com/maaaymahmoud?igsh=YWVpdHV5c2piZ3Zl')"></i>
                        <i class="fa-solid fa-envelope mayx "
                            onclick="window.location.href='mailto:yasminsaadhassan@gmail.com'"></i>
                    </div>
                </div>
            </div>
            <div class="hashem">
                <div class="hashemimg wow animate__animated animate__backInDown">
                    <img class="hashemimg1" src="{{ asset('assets/images/yasmin.jpg') }}" alt="">
                </div>
                <div class="hashemcontact wow animate__animated animate__bounceInUp" style="background-color: #ff92ed;">
                    <h2 class="hashemcontacth2"> Yassmen Saad </h2>
                    <p class="hashemcontactp">business </p>
                    <div class="hashemicon">
                        <i class="fa-brands fa-facebook hashemfacebook"
                            onclick="window.location.assign('https://www.facebook.com/profile.php?id=100009307208405')"></i>
                        <i class="fa-brands fa-instagram hasheminsta"
                            onclick="window.location.assign('https://www.instagram.com/yasminsaad13?igsh=YjMwamg4ZjZnbmhs')"></i>
                        <i class="fa-solid fa-envelope hashemx"
                            onclick="window.location.href='mailto:yasminsaadhassan@gmail.com'""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=" section100">
        <div class="div1section100">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.77448154454!2d31.2237049256424!3d30.07199816726684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840fc1158defb%3A0xc53ffe335f9d6297!2sPBIS%20BIS%20Faculty%20of%20Commerce%20and%20Business%20Administration!5e0!3m2!1sar!2seg!4v1714510834416!5m2!1sar!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="section81">
        <div class="div1section81 wow animate__animated animate__rotateInDownLeft">Get
            <span>10%-Off</span> Your <br> First
            Visit
        </div>
        <div class="div2section81 wow animate__animated animate__rotateInUpRight">The goal of
            SAA'DA is
            Spending
            less time selecting your planner for your event andmore time enjoying an amazing
            event . </span>
        </div>
        <div class="div3section81">
            <button class="last-section-btn wow animate__animated animate__rotateIn ">Book
                Now</button>
        </div>
    </section>
@endsection
@push('script')
    <script src="{{ asset('assets/js/showcard.js') }}"></script>
@endpush
