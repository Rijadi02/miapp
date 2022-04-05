<x-home-master>
    @section('meta')
        <meta property="og:image" content="{{ asset('assetsFront/images/mi.jpg') }}" />

        <meta property="og:url" content="<?php echo url('/'); ?>" />

        <meta property="og:title" content="Muslimani Ideal" />
    @endsection

    @section('content')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">

        <section class="main-slider">


            <div
                style="height: 50vh; width: 100%;background-repeat: no-repeat; background-size: cover;background-position: center;background-image: url({{ asset('assetsFront/images/backgrounds/header.jpg') }})">
            </div>



        </section>



        <div class="counter-one">
            <div class="counter-one__container py-4 py-lg-5">
                <ul class="list-unstyled counters-one__box pt-4 pb-3 pt-lg-5 pb-lg-4">
                    <li class="counter-one__single wow fadeInUp d-none d-md-inline-block" data-wow-delay="100ms">
                        <h3 class="odometer" data-count="{{ $media->instagram }}">00</h3>
                        <p class="counter-one__text">Instagram</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp d-none d-md-inline-block" data-wow-delay="200ms">
                        <h3 class="odometer" data-count="{{ $media->youtube }}">00</h3>
                        <p class="counter-one__text">Youtube</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp d-none d-md-inline-block" data-wow-delay="300ms">
                        <h3 class="odometer" data-count="{{ $media->telegram }}">00</h3>
                        <p class="counter-one__text">Telegram</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp d-none d-md-inline-block" data-wow-delay="400ms">
                        <h3 class="odometer" data-count="{{ $media->facebook }}">00</h3>
                        <p class="counter-one__text">Facebook</p>
                    </li>
                    <li class="counter-one__single wow fadeInUp d-md-none" data-wow-delay="400ms">
                        <h3 class="odometer"
                            data-count="{{ $media->facebook + $media->telegram + $media->youtube + $media->instagram }}">
                            00</h3>
                        <p class="counter-one__text">Ndjekës në rrjetet sociale</p>
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
                                    <img src="{{ asset('assetsFront/images/resources/about-one-img-2.png') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Kush jemi ne?</span>
                                <h2 class="section-title__title">Mediumi Muslimani Ideal</h2>
                            </div>
                            <p class="about-one__right-text">Muslimani Ideal është medium islam, i cili synim kryesor e ka
                                përhapjen e fesë së Allahut në të gjitha rrjetet sociale. Përmes këtij mediumi tentojmë të
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
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Muslimani Ideal App</span>
                                <h2 class="section-title__title">Shoqëruesi juaj drejt Allahut!</h2>
                            </div>
                           <p class="about-one__right-text mb-4">Një platformë interesante dhe të dobishme për jetën e muslimanëve. Një punë modeste afërsisht njëvjeçare të cilën tashmë do ta keni në duart tuaja. </p> 
                                
                              
                                
                            <ul class="list-unstyled about-two__list mb-4 me-4">
                                
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Kohët e namazit</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Kurani i integruar</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Drejtimi i kibles</p>
                                    </div>
                                </li>
                                
                            </ul>

                            <ul class="list-unstyled about-two__list  mb-4">
                                
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Përkujtime</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Dhikret ditore</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Artikuj, video e të tjera</p>
                                    </div>
                                </li>
                                
                            </ul>
                       
                            <a href="https://www.muslimani-ideal.org/app" class="about-one__btn thm-btn">Shkarko falas</a>
                        </div>
                    </div>

                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('assetsFront/images/phones.png') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-one__container-box clearfix pt-3">
                <ul class="list-unstyled gallery-one__content clearfix pt-0 pt-md-5">
                    <?php $post_index = 0; ?>
                    @foreach ($posts as $post)
                        <?php $post_index++; ?>
                        <a href="{{ $post->link }}">
                            <li class="wow fadeInUp {{ $post_index > 3 ? 'd-none d-md-inline-block' : '' }}"
                                data-wow-delay="100ms">
                                <div class="gallery-one__img-box">
                                    <img src="/storage/{{ $post->image }}" alt="">
                                    <div class="gallery-one__iocn">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </li>
                        </a>
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
                            <h2 class="video-one__title">Muslimani Ideal poston video në Youtube në baza javore</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="video-one__right">
                            <ul class="list-unstyled video-one__four-icon-boxes">
                                <li>
                                    <div class="video-one__icon-box">
                                        {{-- <span class="icon-deer"></span> --}}
                                        <img src="{{ asset('assetsFront/images/icons/chat.svg') }}"></img>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a
                                            href="https://www.youtube.com/c/MuslimaniIdeal">Video <br> Këshilluese</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <img src="{{ asset('assetsFront/images/icons/paper.svg') }}"></img>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a
                                            href="https://www.youtube.com/c/MuslimaniIdeal">Video <br> Motivuese</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <img src="{{ asset('assetsFront/images/icons/pen.svg') }}"></img>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a
                                            href="https://www.youtube.com/c/MuslimaniIdeal">Video <br> Edukative</a></h4>
                                </li>
                                <li>
                                    <div class="video-one__icon-box">
                                        <img src="{{ asset('assetsFront/images/icons/book.svg') }}"></img>
                                    </div>
                                    <h4 class="video-one__icon-box-title"><a
                                            href="https://www.youtube.com/c/MuslimaniIdeal">Bazat e <br> Besimit</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="brand-one">
            <div class="singapore-tour-right-shape"
                style="background-image: url({{ asset('assetsFront/images/shapes/singapore-tour-right-shape.svg') }})">
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
                                    <img src="{{ asset('assetsFront/images/icons/scroll.svg') }}"></img>
                                </div>
                                <h4 class="tour-types__title">Tregime</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8ypzRXJEWxJMXP0YKgYbGei5">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <img src="{{ asset('assetsFront/images/icons/chat.svg') }}"></img>
                                </div>
                                <h4 class="tour-types__title">Këshilluese</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yoxsN0hMBIOsuhn0tOuXPLj">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <img src="{{ asset('assetsFront/images/icons/heart.svg') }}"></img>
                                </div>
                                <h4 class="tour-types__title">Emocionale</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yqDRKnPn6WMdJYgaazMP9Ls">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <img src="{{ asset('assetsFront/images/icons/paper.svg') }}"></img>
                                </div>
                                <h4 class="tour-types__title">Motivuese</h4>
                            </div>
                        </li>
                    </a>

                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yq718YAV47kyCyMxMMV02kb">
                        <li class="tour-types__single wow fadeInUp" data-wow-delay="500ms">
                            <div class="tour-types__content">
                                <div class="tour-types__icon">
                                    <img src="{{ asset('assetsFront/images/icons/challenge.svg') }}"></img>
                                </div>
                                <h4 class="tour-types__title">Sfidat</h4>
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </section> --}}

        <!--News Two Start-->
        <section class="news-two pb-3 pb-lg-5">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="news-two_left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Artikujt & lajmet e fundit —></span>
                                <h2 class="section-title__title">Artikujt e fundit</h2>
                            </div>
                            <p class="news-two__text">Muslimani Ideal poston artikuj si dhe lajme nga më bashkëkohorët.
                                Artikujt janë të përgatitur nga vetë stafi i Muslimanit Ideal, ose nga hoxhallarët.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="news-two__right">
                            <div class="news-two__carousel owl-theme owl-carousel">
                                <!--News One Single-->
                                @foreach ($blogs as $blog)
                                    <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                                        <a href="{{ route('blog', $blog->slug) }}">
                                            <div class="news-one__img">
                                                <img style="object-fit: cover;" src="/storage/{{ $blog->image }}" alt="">
                                                <a href="{{ route('blog', $blog->slug) }}">
                                                    <span class="news-one__plus"></span>
                                                </a>
                                                <div class="news-one__date">
                                                    <p>{{ $blog->updated_at->format('d') }} <br>
                                                        <span>{{ $blog->updated_at->format('M') }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="news-one__content">
                                                <ul class="list-unstyled news-one__meta">
                                                    <li><a href="{{ route('blog', $blog->slug) }}"><i
                                                                class="far fa-user-circle"></i>{{ $blog->author }}</a>
                                                    </li>
                                                    {{-- <li><a href="news-details.html"><i class="far fa-comments"></i>2
                                                    Comments</a>
                                            </li> --}}
                                                </ul>
                                                <h3 class="news-one__title">
                                                    <a href="{{ route('blog', $blog->slug) }}">{{ $blog->title }}</a>
                                                </h3>
                                            </div>
                                        </a>
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
            {{-- <div class="about-two-shape float-bob-y pt-5">
                <img src="{{ asset('assetsFront/images/shapes/about-two-shape.png') }}" alt="">
            </div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-tow__left-img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{ asset('assetsFront/images/donation.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Kontribuo për Muslimanin Ideal </span>
                                <h2 class="section-title__title">Përkrah davetin</h2>
                            </div>
                            <div class="about-two__tour-points">
                                <ul class="list-unstyled about-two__list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Ndihmo në përhapjen e fesë</p>
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
                            <p class="about-two__right-text-1">Jepi Allahut një hua të bukur...</p>
                            <p class="about-two__right-text-2">Kush do t’i japë Allahut një hua të bukur, që Ai t’ia kthejë
                                shpërblimin shumëfish? Allahu e shtrëngon (riskun) dhe e liron; tek Ai do të ktheheni. <a
                                    class="text-decoration-none" href="https://quran.com/2/245"> <br> [2:245] </a></p>
                            <a href="javascript:void(0)" class="thm-btn about-two__btn  search-toggler">Dhuro Sadakë</a>
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
                                <p>Thënje, përkujtime, video</p>
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
                    autoclose: true,
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
