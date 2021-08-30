<x-home-master>
    @section('content')

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
          },
        "navigation": {
            "nextEl": ".main-slider-button-next",
            "prevEl": ".main-slider-button-prev",
            "clickable": true
        },
        "autoplay": {
            "delay": 5000
        }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(https://images.unsplash.com/photo-1444090695923-48e08781a76a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80)">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2> Travel & Adventures</h2>
                                        <p>Where Would You Like To Go?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(https://images.unsplash.com/photo-1444090695923-48e08781a76a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80)">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2> Travel & Adventures</h2>
                                        <p>Where Would You Like To Go?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(https://images.unsplash.com/photo-1444090695923-48e08781a76a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80)">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2> Travel & Adventures</h2>
                                        <p>Where Would You Like To Go?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-nav">
                    <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                    <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
                </div>
            </div>
        </section>



        <div class="counter-one">
            <div class="counter-one__container">
                <ul class="list-unstyled counters-one__box">
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                        <h3 class="odometer" data-count="7864">00</h3>
                        <p class="counter-one__text">Total Donations</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <h3 class="odometer" data-count="16321">00</h3>
                        <p class="counter-one__text">Campaigns Closed</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <h3 class="odometer" data-count="4561">00</h3>
                        <p class="counter-one__text">Happy People</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                        <h3 class="odometer" data-count="1267">00</h3>
                        <p class="counter-one__text">Our Volunteers</p>
                    </li>
                </ul>
            </div>
        </div>

        <section class="about-one">
            <div class="about-one-shape-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="{{ asset('assetsFront/images/shapes/about-one-shape-1.png') }}" alt="">
            </div>
            <div class="about-one-shape-2 float-bob-y"><img
                    src="{{ asset('assetsFront/images/shapes/about-one-shape-2.png') }}" alt="">
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('assetsFront/images/resources/about-one-img-1.png') }}" alt="">
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="about-one__call-number">
                                        <p>Book Tour Now</p>
                                        <h4><a href="tel:666-888-0000">666 888 0000</a></h4>
                                    </div>
                                </div>
                                <div class="about-one__discount">
                                    <h2>30%</h2>
                                    <h3>Discount</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to know us</span>
                                <h2 class="section-title__title">Plan Your Trip with Trevily</h2>
                            </div>
                            <p class="about-one__right-text">There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected hum randomised words which
                                don't look even slightly.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Invest in your simply neighborhood</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Support people in free text extreme need</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Largest global industrial business community</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="about-one__btn thm-btn">Book with us now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-one__container-box clearfix pt-5">
                <ul class="list-unstyled gallery-one__content clearfix pt-5">
                    <li class="wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img-box">
                            <img src="{{asset('assetsFront/images/gallery/gallery-one-img-1.jpg')}}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup" href="assets/images/gallery/gallery-one-img-1.jpg"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-one__img-box">
                            <img src="{{asset('assetsFront/images/gallery/gallery-one-img-2.jpg')}}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup" href="assets/images/gallery/gallery-one-img-2.jpg"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-one__img-box">
                            <img src="{{asset('assetsFront/images/gallery/gallery-one-img-3.jpg')}}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup" href="assets/images/gallery/gallery-one-img-3.jpg"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-one__img-box">
                            <img src="{{asset('assetsFront/images/gallery/gallery-one-img-4.jpg')}}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup" href="assets/images/gallery/gallery-one-img-4.jpg"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-one__img-box">
                            <img src="{{asset('assetsFront/images/gallery/gallery-one-img-5.jpg')}}" alt="">
                            <div class="gallery-one__iocn">
                                <a class="img-popup" href="assets/images/gallery/gallery-one-img-5.jpg"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>




        <section class="video-one">
            <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('assetsFront/images/backgrounds/video-one-bg.jpg') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="video-one__left">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="icon-play-button"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <p class="video-one__tagline">Are you ready to travel?</p>
                            <h2 class="video-one__title">Tevily is a World Leading Online Tour Booking Platform</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="video-one__right">
                            <ul class="list-unstyled video-one__four-icon-boxes">
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-deer"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Wildlife <br> Tours</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-paragliding"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Paragliding <br> Tours</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-flag"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Adventure <br> Tours</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-hang-gliding"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Hang Gliding <br> Tours</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-one">
            <div class="singapore-tour-right-shape"
                style="background-image: url({{ asset('assetsFront/images/shapes/singapore-tour-right-shape.png') }})">
            </div>
            <div class="container">
                <div class="tour-types-map">
                </div>
                <div class="section-title text-center">
                    <span class="section-title__tagline text-light">Find the best tour</span>
                    <h2 class="section-title__title text-white">Choose Tour Types</h2>
                </div>
                <ul class="list-unstyled tour-types_list">
                    <li class="tour-types__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="tour-types__content">
                            <div class="tour-types__icon">
                                <span class="icon-deer"></span>
                            </div>
                            <h4 class="tour-types__title">Wildlife</h4>
                        </div>
                    </li>
                    <li class="tour-types__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="tour-types__content">
                            <div class="tour-types__icon">
                                <span class="icon-paragliding"></span>
                            </div>
                            <h4 class="tour-types__title">Paragliding</h4>
                        </div>
                    </li>
                    <li class="tour-types__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="tour-types__content">
                            <div class="tour-types__icon">
                                <span class="icon-flag"></span>
                            </div>
                            <h4 class="tour-types__title">Adventure</h4>
                        </div>
                    </li>
                    <li class="tour-types__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="tour-types__content">
                            <div class="tour-types__icon">
                                <span class="icon-hang-gliding"></span>
                            </div>
                            <h4 class="tour-types__title">Hang Gliding</h4>
                        </div>
                    </li>
                    <li class="tour-types__single wow fadeInUp" data-wow-delay="500ms">
                        <div class="tour-types__content">
                            <div class="tour-types__icon">
                                <span class="icon-booking"></span>
                            </div>
                            <h4 class="tour-types__title">Sightseeing</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!--News Two Start-->
        <section class="news-two pb-5">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="news-two_left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">From the blog post</span>
                                <h2 class="section-title__title">Latest News & Articles</h2>
                            </div>
                            <p class="news-two__text">There are many latest variations of passages don’t do available
                                but the majority have suffered alteration in some form, by injected humou or randomised.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="news-two__right">
                            <div class="news-two__carousel owl-theme owl-carousel">
                                <!--News One Single-->
                                <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                                    <div class="news-one__img">
                                        <img src="{{asset('assetsFront/images/blog/news-one-img-1.jpg')}}" alt="">
                                        <a href="news-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                        <div class="news-one__date">
                                            <p>28 <br> <span>Aug</span></p>
                                        </div>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i>Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i>2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title">
                                            <a href="news-details.html">Things to See and Do When Visiting Japan</a>
                                        </h3>
                                    </div>
                                </div>
                                <!--News One Single-->
                                <div class="news-one__single wow fadeInUp" data-wow-delay="200ms">
                                    <div class="news-one__img">
                                        <img src="{{asset('assetsFront/images/blog/news-one-img-2.jpg')}}" alt="">
                                        <a href="news-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                        <div class="news-one__date">
                                            <p>28 <br> <span>Aug</span></p>
                                        </div>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i>Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i>2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title">
                                            <a href="news-details.html">Journeys are Best Measured in New Friends</a>
                                        </h3>
                                    </div>
                                </div>
                                <!--News One Single-->
                                <div class="news-one__single wow fadeInUp" data-wow-delay="300ms">
                                    <div class="news-one__img">
                                        <img src="{{asset('assetsFront/images/blog/news-one-img-3.jpg')}}" alt="">
                                        <a href="news-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                        <div class="news-one__date">
                                            <p>28 <br> <span>Aug</span></p>
                                        </div>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i>Admin</a>
                                            </li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i>2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title">
                                            <a href="news-details.html">Travel the Most Beautiful Places in the
                                                World</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Two End-->

        <section class="about-two pt-5">
            <div class="about-two-shape float-bob-y pt-5">
                <img src="{{asset('assetsFront/images/shapes/about-two-shape.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-tow__left-img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{asset('assetsFront/images/resources/about-two-img.jpg')}}" alt="">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="about-two__video-btn">
                                        <span class="icon-play-button"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to know us</span>
                                <h2 class="section-title__title">We’re Travel Agency</h2>
                            </div>
                            <div class="about-two__tour-points">
                                <ul class="list-unstyled about-two__list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Trust and Safety</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Best Price Guarantee</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-two__list about-two__list-two">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Easy & Quick Booking</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Best Travel Agents</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <p class="about-two__right-text-1">Change your Place to get Fresh Air</p>
                            <p class="about-two__right-text-2">There are many variations of passages of available but
                                the majority have suffered alteration in some form, by injected hum randomised words
                                which don't look even slightly.</p>
                            <a href="#" class="thm-btn about-two__btn">Book with us now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Book Now Start-->
        <section class="book-now">
            <div class="book-now-shape" style="background-image: url({{asset('assetsFront/images/shapes/book-now-shape.png')}})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="book-now__inner">
                            <div class="book-now__left">
                                <p>Plan your trip with us</p>
                                <h2>Ready for an unforgetable tour?</h2>
                            </div>
                            <div class="book-now__right">
                                <a href="#" class="thm-btn book-now__btn">Book tour now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Book Now End-->

    @endsection

</x-home-master>
