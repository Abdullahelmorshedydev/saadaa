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
                <li><a href="{{ route('order.all_orders') }}">All Orders</a></li>
                <li><a href="{{ route('cart.index') }}">View Cart</a></li>
                @if (is_admin())
                    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                @endif
                <li><a class="sigin-btn" href="{{ route('logout') }}">sign out</a></li>
            @endauth
        </ul>
    </div>
    <i onclick="showsidebar()" class="fa-solid fa-bars nav-icon" id="NAV-icon"></i>
</nav>
