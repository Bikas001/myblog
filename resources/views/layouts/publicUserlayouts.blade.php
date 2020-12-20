

@include('public-section.partials._header')
<body>

<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">

            <a href="#intro" class="scrollto"><a href="{{url('/')}}">ALPHA</a></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">

            <ul>
                <li class="active"><a href="{{url('/')}}">Home</a></li>


                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/dashboard')}}">
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="{{url('/userprofile')}}">Profile</a>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </nav><!-- .main-nav -->

    </div>
</header>

@yield('content')


@include('public-section.partials._footerContactSection')

@include('public-section.partials._footer')
