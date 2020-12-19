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
                <a class="dropdown-item" href="{{url('/dashboard')}}">
                    Dashboard
                </a>
                <a class="dropdown-item" href="#">Profile</a>


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





@section('content')


    <!--==========================
  Intro Section
============================-->

    <section id="intro" class="clearfix">
        <div class="container">

            <div class="intro-img">
                <img src="{{asset('profile/img/bg-2.jpg')}}" alt="" class="img-fluid">
            </div>

            <div class="intro-info">
                <h2>We are<br><span>here</span><br>to help you!</h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto"> about us</a>
                    <a href="#services" class="btn-services scrollto"> Our services</a>
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
          About Us Section
        ============================-->

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


        <!-- #about -->

        <!--==========================
          Services Section
        ============================-->
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Services</h3>
                    <p>We help companies create and scale teams & products to set and achieve ambitious business goals. With an experienced team & a process infused with DevOps and flexibility, we will work with you to find the best ways to help your business grow.</p>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <!--<div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>-->
                            <h4 class="title"><a href="">web application</a></h4>
                            <p class="description">Our team of developers, full-stack specialists, & test engineers help develop highly customized applications built to precisely address your needs and work seamlessly between different touch-points.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <!--<div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>-->
                            <h4 class="title"><a href="">mobile application</a></h4>
                            <p class="description">
                                We provide unparalleled mobility solutions to drive impact through design thinking & superior app performances. We have all the expertise you need to produce a full-featured, stable, and scalable mobile application.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <!--<div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>-->
                            <h4 class="title"><a href=""> logo design</a></h4>
                            <p class="description">Enterprise Digital Transformation
                                We help Enterprises leverage the best of technology, starting from application development to modernization & maintenance.
                                Get Started
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <!-- <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>-->
                            <h4 class="title"><a href="">Customer software development</a></h4>
                            <p class="description">Custom software Development
                                Analyzing your specific requirements and building custom software solutions is the promise of Classic Informatics, a leading custom software development company.
                                Get Started</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <!--<div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>-->
                            <h4 class="title"><a href="">Digital Ecommerce</a></h4>
                            <p class="description">Intuitive eCommerce Stores Helping You Convert Digital Buyers.
                                With our eCommerce development services, build an easy-to-manage e-store that attracts more traffic, converts them into buyers, and in turn, boosts your online sales. We help you set up, manage, and maintain custom B2B/B2C eCommerce engines that delight customers at each digital touchpoint.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <!-- <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>-->
                            <h4 class="title"><a href="">Product Development</a></h4>
                            <p class="description">Get A Market-Ready Product With Our 360° Development Approach
                                Join hands with experienced product development engineers to build power-packed digital products. From conceptualization, MVP development to launch and optimization, we do it all with our product development services.i</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
          Why Us Section
        ============================-->
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>Why choose us?</h3>
                    <p>At Alpha, we have the experience and staying power you’re looking for in a web development partner. Unlike others, we don’t just say, we deliver.</p>
                </header>

                <div class="row row-eq-height justify-content-center">

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-diamond"></i>
                            <div class="card-body">
                                <h5 class="card-title">Supreme quality</h5>
                                <p class="card-text">Each product we deliver goes through strict quality control. You don’t have to worry about quality, ever.</p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-language"></i>
                            <div class="card-body">
                                <h5 class="card-title">communication</h5>
                                <p class="card-text">Our team members are open, collaborative & accessible. We make sure to address your queries fast, regardless of the time-zone.</p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-object-group"></i>
                            <div class="card-body">
                                <h5 class="card-title">Transparency and accountability</h5>
                                <p class="card-text">We keep it transparent with our clients. You'll get a clear insight into all aspects of the work, scope & beyond. </p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section>

        <!--==========================
          Portfolio Section
        ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 2</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 2</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 3</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 1</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="{{asset('profile/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="{{asset('profile/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->

        <!--==========================
          Clients Section
        ============================-->
        <section id="testimonials" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="owl-carousel testimonials-carousel wow fadeInUp">

                            <div class="testimonial-item">
                                <img src="{{asset('profile/img/team-a.jpg')}}" class="testimonial-img" alt="">
                                <h3>Mayor Inna Lama Gurung</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('profile/img/team-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Priti Yadav</h3>
                                <h4>Designer</h4>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('profile/img/team-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Bikash Chaudhary</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('profile/img/team-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Dhiraj Shah</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('profile/img/testimonial-img.jpg')}}" class="testimonial-img" alt="">
                                <h3>Nischal shrestha</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('profile/img/team-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Love Jaiswal</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </section><!-- #testimonials -->

        <!--==========================
          Team Section
        ============================-->
        <section id="team">
            <div class="container">
                <div class="section-header">
                    <h3>Team</h3>
                    <h4>Dedicated agile teams</h4>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{asset('profile/img/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Love Jaiswal</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{asset('profile/img/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nischal shrestha</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{asset('profile/img/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Bikash chaudhary</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{asset('profile/img/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Dhiraj shah</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #team -->

        <!--==========================
          Clients Section
        ============================-->
        <section id="clients" class="section-bg">

            <div class="container">

                <div class="section-header">
                    <h2>clients</h2>
                    <h3>Trusted by 100+ clients</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome nida.</p>
                </div>


                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-1.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-2.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-3.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-4.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-5.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-6.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-7.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{asset('profile/img/clients/client-8.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!--==========================
          Contact Section
        ============================-->
        <section id="contact">
            <div class="container-fluid">

                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

                <div class="row wow fadeInUp">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.836139050827!2d85.33278008033736!3d27.69538647495239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1600268136258!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="ion-ios-location-outline"></i>
                                <p> Naya baneswor Kathmandu nepal</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="ion-ios-email-outline"></i>
                                <p>info@example.com</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="ion-ios-telephone-outline"></i>
                                <p>9876789056</p>
                            </div>
                        </div>

                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

@endsection

