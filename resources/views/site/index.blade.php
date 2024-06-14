@extends('site.layouts.app')
@section('title', 'SAADA')
@push('style')
@endpush
@section('content')
    <section class="hello-sec">
        @include('site.includes.navbar')

        <div class="filter">
            <div class="home-sec">
                <h1 class="wow animate__animated animate__backInLeft">welcome to SAA'DA</h1>
                <p class="wow animate__animated animate__backInRight">your dreams come true with us</p>
            </div>
        </div>
    </section>

    <section id="cards">
        <div class="what-we-do">
            <div class="what-we-do-para">
                <h1 class="wow animate__animated animate__backInDown">what events we make? </h1>
                <p class="wow animate__animated animate__backInUp">
                    We “SAA'DA” create your special event the best way
                    you
                    like as possible as we could to make u
                    remember
                    this event happily with every detail of the day and make you memorize everything so we create all
                    kinds of events ( birthday,anniversary,prom…etc) ao whatever the next event is … we
                    can do it for you
                </p>
            </div>

            <div class="what-we-do-cards">
                <div class="wow first-card animate__animated animate__backInLeft">
                    <h1>we make indoor events.</h1>
                    <p>
                        We provide you with all the essentials you need like (stage ,sound system,light
                        system,photographer and videographer to cover all the event , cakes and corners with all you can
                        eat) and all of this to make you satisfaction reaches the sky.
                    </p>
                    <div class="what-we-do-btn" id="what-we-do-inbtn">
                        <button class="what-we-do-btn2" onclick="showindoor()">In-Door</button>
                        <button class="what-we-do-btn3" onclick="hideindoor()"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </div>

                <div class="second-card wow animate__animated animate__backInRight">
                    <h1>we make outdoor events.</h1>
                    <p>
                        Outdoor we provide you with Secure Reliable location with all you need from a to z (lightning
                        system,experienced photographers , Well-trained staff help you with what you need
                        ,chairs,food
                        corners and so on…)you are in the right place with us
                    </p>
                    <div class="what-we-do-btn" id="what-we-do-outbtn">
                        <button class="what-we-do-btn2" onclick="showoutdoor()">Out-Door</button>
                        <button class="what-we-do-btn4" onclick="hideoutdoor()"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </div>
            </div>

            <div class="indoor">
                <div class="indoor-cust">
                    <div class="divv2">
                        @foreach ($indoorEvents as $event)
                            <div class="div01" onclick="window.location.href='event/' + {{ $event->id }};">
                                <img class="birthdayimg" src="{{ asset($event->image ? 'storage/' . $event->image->image : 'admin/images/morshedy.jpg') }}" alt=""
                                    srcset="" />
                                <div class="div010">
                                    <button class="div0100">{{ $event->name }}</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="outdoor">
                <div class="outdoor-cust">
                    <div class="divv2">
                        @foreach ($outdoorEvents as $event)
                        <div class="div01" onclick="window.location.href='event/' + {{ $event->id }};">
                            <img class="birthdayimg" src="{{ asset($event->image ? 'storage/' . $event->image->image : 'admin/images/morshedy.jpg') }}" alt=""
                                srcset="" />
                            <div class="div010">
                                <button class="div0100">{{ $event->name }}</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>

    <section class="choose-sec">
        <div class="choose-para">
            <h1>why choose <span>us?</span></h1>
            <p>everyday we work hard to make life of our clients better and happier. </p>
        </div>

        <div class="choose-cards">
            <div class="card1 wow animate__animated animate__fadeInLeft">
                <h3>Attention to <span>Detail</span></h3>
                <hr class="cards-hr">
                <p>
                    Emphasize your meticulous attention to detail. Clients want assurance that every aspect of their
                    event will be flawlessly executed, from venue selection to catering to decorations.
                    Demonstrating your commitment to perfection can set you apart from competitors.
                </p>
            </div>

            <div class="card2 wow animate__animated animate__fadeInUpBig">
                <h3> WE CARE ABOUT YOUR EVENT</h3>
                <hr class="cards-hr">
                <p>
                    Choosing SAA'DA is an investment in your event because we value and care for each and every one of
                    our clients, With our knowledgeable staff, we ensure the success of your event, which is why we
                    make sure that everything you see and receive far exceeds your wildest expectations.
                </p>
            </div>

            <div class="card3 wow animate__animated animate__fadeInRight">
                <h3>A TEAM WITH EXPERIENCE</h3>
                <hr class="cards-hr">
                <p>
                    We will oversee and run the entire event from start to finish, leaving you free to enjoy your event
                    and play special host to your guests. We create the ambiance in your venue, whether be it a hotel, a
                    stately home or a marquee.
                </p>
            </div>
        </div>
    </section>

    <div class="header">
        <h1>lorem</h1>
        <hr>
    </div>
    <section class="home-sec4">
        <div class="first-desc">
            <div class="desc-img-div">
                <img class="desc-img" src="{{ asset('assets/images/home sec4.1.jpg') }}" alt="">
            </div>

            <div class="desc-content ">
                <h2>lorem</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique velit totam unde, nobis
                    placeat
                    fugit recusandae magni quo veniam alias aliquam facilis vero dignissimos eligendi quas vel
                    possimus,
                    aspernatur nam!
                </p>
            </div>
        </div>

        <div class="sec-desc">
            <div class="desc-img-div2">
                <img class="desc-img-2" src="{{ asset('assets/images/dress.jpg') }}" alt="">
            </div>

            <div class="desc-content-2 ">
                <h2>lorem</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique velit totam unde, nobis
                    placeat
                    fugit recusandae magni quo veniam alias aliquam facilis vero dignissimos eligendi quas vel
                    possimus,
                    aspernatur nam!
                </p>
            </div>
        </div>
    </section>

    <section class="fifth-sec">
        <div class="fifth-sec-content">
            <h1>INFINITE & ETERNAL LOVE</h1>
            <p>THE ART OF LOVERS</p>
        </div>

        <div class="fifth-sec-img1">
            <img src="{{ asset('assets/images/bride.jpg') }}" alt="">
        </div>

        <div class="fifth-sec-img2">
            <div class="img2"><img src="{{ asset('assets/images/sec-5-img2.jpg') }}" alt=""></div>
            <div class="img3"><img src="{{ asset('assets/images/sec-5-img3.jpg') }}" alt=""></div>
            <div class="img4"><img src="{{ asset('assets/images/sec-5-img4.jpg') }}" alt=""></div>
            <div class="img5"><img src="{{ asset('assets/images/sec-5-img5.jpg') }}" alt=""></div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        sessionStorage.clear();
    </script>
@endpush
