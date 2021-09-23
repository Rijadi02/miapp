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
                                        <h2>Muslimani Ideal</h2>
                                        <p>Medium me përmbajtje fetare</p>
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
                                        <h2>Muslimani Ideal</h2>
                                        <p>Medium me përmbajtje fetare</p>
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
                                        <h2>Muslimani Ideal</h2>
                                        <p>Medium me përmbajtje fetare</p>
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
                        <h3 class="odometer" data-count="{{ $media->instagram }}">00</h3>
                        <p class="counter-one__text">Instagram</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <h3 class="odometer" data-count="{{ $media->youtube }}">00</h3>
                        <p class="counter-one__text">Youtube</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                        <h3 class="odometer" data-count="{{ $media->telegram }}">00</h3>
                        <p class="counter-one__text">Telegram</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                        <h3 class="odometer" data-count="{{ $media->facebook }}">00</h3>
                        <p class="counter-one__text">Facebook</p>
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
                                <span class="section-title__tagline">Kush jemi ne?</span>
                                <h2 class="section-title__title">Organizata Muslimani Ideal</h2>
                            </div>
                            <p class="about-one__right-text">Muslimani Ideal është medium islam, i cili synim kryesor e ka
                                përhapjen e fesë së Allahut në të gjitha rrjetet sociale. Përmes këti mediumi tentojmë të
                                hapim pakëz dritë në këtë errësirë të madhe. </p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Video me përmbajtje këshilluese Youtube</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Përkujtime në Facebook, Instagram dhe Telegram</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Davet fizik përmes librave dhe fletushkave</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="https://www.youtube.com/c/MuslimaniIdeal" class="about-one__btn thm-btn">Na ndiqni në
                                Youtube</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-one__container-box clearfix pt-5">
                <ul class="list-unstyled gallery-one__content clearfix pt-5">

                    @foreach ($posts as $post)
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-one__img-box">
                                <img src="/storage/{{ $post->image }}" alt="">
                                <div class="gallery-one__iocn">
                                    <a href="{{ $post->link }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </li>
                    @endforeach
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
                                <a href="https://www.youtube.com/watch?v=gRxS-LWT96M" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="icon-play-button"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <p class="video-one__tagline">Videot e muslimanit ideal</p>
                            <h2 class="video-one__title">Muslimanit Ideal poston video në Youtube në baza javore</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="video-one__right">
                            <ul class="list-unstyled video-one__four-icon-boxes">
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-deer"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Video <br> Këshilluese</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-paragliding"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Video <br> Motivuese</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-flag"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Video <br> Edukative</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <span class="icon-hang-gliding"></span>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a href="#">Bazat e <br> Besimit</a></h4>
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
                    <span class="section-title__tagline text-light">Dëgjo në udhëtim</span>
                    <h2 class="section-title__title text-white">Playlist të Muslimanit Ideal</h2>
                </div>
                <ul class="list-unstyled tour-types_list">
                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yoBQyFtTaynTykCVwAKMy1D">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <span class="icon-deer"></span>
                                </div>
                                <h4 class="tour-types__title">Tregime</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8ypzRXJEWxJMXP0YKgYbGei5">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <span class="icon-paragliding"></span>
                                </div>
                                <h4 class="tour-types__title">Këshilluese</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yoxsN0hMBIOsuhn0tOuXPLj">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <span class="icon-flag"></span>
                                </div>
                                <h4 class="tour-types__title">Emocionale</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yqDRKnPn6WMdJYgaazMP9Ls">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <span class="icon-hang-gliding"></span>
                                </div>
                                <h4 class="tour-types__title">Motivuese</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yq718YAV47kyCyMxMMV02kb">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="500ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <span class="icon-booking"></span>
                                </div>
                                <h4 class="tour-types__title">Sfidat</h4>
                            </div>
                        </li>
                    </a>
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
                                <span class="section-title__tagline">Artikujt & lajmet e fundit —></span>
                                <h2 class="section-title__title">Artikujt e fundit</h2>
                            </div>
                            <p class="news-two__text">Muslimani Ideal poston artikuj si dhe lajme nga më bashkohorët.
                                Artikujt janë të përgaditur nga vetë stafi i Muslimanit Ideal, ose nga hoxhallarët.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="news-two__right">
                            <div class="news-two__carousel owl-theme owl-carousel">
                                <!--News One Single-->
                                @foreach ($blogs as $blog)
                                    <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                                        <div class="news-one__img">
                                            <img style="aspect-ratio: 0.7;object-fit: cover;"
                                                src="/storage/{{ $blog->image }}" alt="">
                                            <a href="news-details.html">
                                                <span class="news-one__plus"></span>
                                            </a>
                                            <div class="news-one__date">
                                                <p>{{ $blog->created_at->format('d') }} <br>
                                                    <span>{{ $blog->created_at->format('M') }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="news-one__content">
                                            <ul class="list-unstyled news-one__meta">
                                                <li><a href="news-details.html"><i
                                                            class="far fa-user-circle"></i>{{ $blog->author }}</a>
                                                </li>
                                                {{-- <li><a href="news-details.html"><i class="far fa-comments"></i>2
                                                    Comments</a>
                                            </li> --}}
                                            </ul>
                                            <h3 class="news-one__title">
                                                <a href="news-details.html">{{ $blog->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Two End-->

        <section class="about-two pt-5">
            <div class="about-two-shape float-bob-y pt-5">
                <img src="{{ asset('assetsFront/images/shapes/about-two-shape.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-tow__left-img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{ asset('assetsFront/images/resources/about-two-img.jpg') }}" alt="">
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
                                <span class="section-title__tagline">Kontribo per Muslimanin Ideal</span>
                                <h2 class="section-title__title">Përkrah davetin</h2>
                            </div>
                            <div class="about-two__tour-points">
                                <ul class="list-unstyled about-two__list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Ndihmo ne perhapjen e fesë</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Bëju hisedar në shpërblime</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-two__list about-two__list-two">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Sadaka rrjedhëse</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Depono për ahiret</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <p class="about-two__right-text-1">Allahu në Kuran thotë:</p>
                            <p class="about-two__right-text-2">Kush do t’i japë Allahut një hua të bukur, që Ai t’ia kthejë
                                shpërblimin shumëfish? Allahu e shtrëngon (riskun) dhe e liron; tek Ai do të ktheheni. <a
                                    class="text-decoration-none" href="https://quran.com/2/245"> <br> [2:245] </a></p>
                            <a href="#" class="thm-btn about-two__btn">Dhuro Sadakë</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Book Now Start-->
        <section class="book-now">
            <div class="book-now-shape"
                style="background-image: url({{ asset('assetsFront/images/shapes/book-now-shape.png') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="book-now__inner">
                            <div class="book-now__left">
                                <p>Thënie, përkujtime, video</p>
                                <h2>Bashkohu me ne në Telegram</h2>
                            </div>
                            <div class="book-now__right">
                                <a href="https://t.me/muslimani_ideal" class="thm-btn book-now__btn">Kanali në Telegram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Book Now End-->
        <script src="{{ asset('js/notify.js') }}"></script>
        <script>
            window.addEventListener('load', (event) => {
                @foreach ($buttons as $button)
                    new Notify({
                    status: 'warning',
                    title: '{{ $button['name'] }}',
                    text: 'Kliko ketu',
                    href: '{{ $button['link'] }}',
                    effect: 'slide',
                    speed: 300,
                    customClass: '',
                    customIcon: '',
                    showIcon: true,
                    showCloseButton: true,
                    autoclose: false,
                    autotimeout: 10000,
                    gap: 10,
                    distance: 10,
                    type: 1,
                    position: 'right bottom'
                    })
                @endforeach
            });
        </script>

    @endsection

</x-home-master>
