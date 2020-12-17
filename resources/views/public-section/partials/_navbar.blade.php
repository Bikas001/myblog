<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">

            <a href="#intro" class="scrollto"><a href="#about">ALPHA</a></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">

            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
                {{--                   @if (Route::has('login'))--}}
                {{--                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
                {{--                            @auth--}}
                {{--                                <li><a href="{{ url('/home') }}" >Home</a></li>--}}
                {{--                            @else--}}
                {{--                                <li> <a href="{{ route('login') }}" >Login</a></li>--}}

                {{--                                @if (Route::has('register'))--}}
                {{--                                    <li> <a href="{{ route('register') }}" >Register</a></li>--}}
                {{--                                @endif--}}
                {{--                            @endauth--}}
                {{--                        </div>--}}
                {{--                @endif--}}


                @yield('login-check')

            </ul>
        </nav><!-- .main-nav -->

    </div>
</header>
