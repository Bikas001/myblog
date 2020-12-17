@extends('layouts.publiclayout')

@section('login-check')


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

    @endsection





@section('about')

    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>About Us</h3>
                <p>A group of experienced, young and professional people in the world of web and mobile technology, It is an energetic startup software company engaged in application development software, web development, SAP related solutions, digital marketing, computers and overall branding and technology solutions.

                    <div class="row about-container">

                        <div class="col-lg-6 content order-lg-6 order-2">

                <p>
                    The best place to fulfill the dreams of tech world. you can easily get what you are really searching for the best way to sell yourself in the world of technology with the help of this team.</p>


                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-photo"></i></div>
                    <h4 class="title"><a href="">Our mission</a></h4>
                    <p class="description">
                        Taking your business to a new height
                        We endeavor to come up with ample insights and result-driven aspects by offering competitive edge solutions to our clients, and the economy as a whole. To develop futuristic web and mobile software solutions for businesses ranging from startups to enterprises with satisfaction.</p>
                </div>

                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">Our Vision</a></h4>
                    <p class="description">We are quickly adapting to the latest technologies. Interestingly enough, our UI/UX designers have been working on advanced technologies like Virtual Reality and Augmented Reality mobile app development for long. We believe in the UI/UX design that can transform into the interface of the future. We believe in the UI/UX design that can transform into the interface of the future. Interestingly enough, our UI/UX designers have been working on advanced technologies</p>
                </div>

        </div>

        <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="{{asset('profile/img/about-img.svg')}}" class="img-fluid" alt="">
        </div>
        </div>

        <div class="row about-extra">
            <div class="col-lg-6 wow fadeInUp">
                <img src="{{asset('profile/img/our-values.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                <h4>our values</h4>
                <p>
                    We are quickly adapting to the latest technologies. Interestingly enough, our UI/UX designers have been working on advanced technologies like Virtual Reality and Augmented Reality mobile app development for long. We believe in the UI/UX design that can transform into the interface of the future. We believe in the UI/UX design that can transform into the interface of the future. Interestingly enough, our UI/UX designers have been working on advanced technologies.
                </p>
                <p>
                    We expand on accomplishing performance with business partners including clients, consultants, and stakeholders.
                </p>
            </div>
        </div>

        <div class="row about-extra">
            <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                <img src="{{asset('profile/img/about-extra-2.svg')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                <h4>People rarely succeed unless they have fun in what they are doing</h4>
                <p>
                    We expand to technologies and marketing trends to deliver world-class business solutions to our clients.


                </p>
                <p>
                    We use project management tools for tracking performance and improve on a daily basis for seamless business functions.
                </p>
                <p>
                    We believe in talented resources and we train and update our resources with training and insightful seminars for better future opportunities to tackle them well.
                </p>
            </div>

        </div>

        </div>
    </section>

@endsection

