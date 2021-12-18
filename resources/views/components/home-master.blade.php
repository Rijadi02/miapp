<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muslimani Ideal</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assetsFront/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assetsFront/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assetsFront/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assetsFront/images/favicons/site.webmanifest') }}" />



    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assetsFront/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/tevily-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/twentytwenty/twentytwenty.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/player.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.4/dist/simple-notify.min.css" />
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}" />

    <link rel="stylesheet" href="{{ asset('assetsFront/arabic-fonts.css') }}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/tevily.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/css/tevily-responsive.css') }}" />


    @yield('meta')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DC2JT2VD2Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DC2JT2VD2Y');
    </script>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('assetsFront/images/resources/logo-single.png') }}"
            alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__top-left">
                            <ul class="list-unstyled main-header__top-address">
                                {{-- <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <a href= "tel:+92-666-999-0000">+ 92 666 999 0000</a>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="icon">
                                        <span class="icon-at"></span>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:info@muslimani-ideal.org">info@muslimani-ideal.org</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-right-inner">
                                <div class="main-header__top-right-social">
                                    <a href="https://www.youtube.com/c/MuslimaniIdeal"><i
                                            class="fab fa-youtube"></i></a>
                                    <a href="https://www.facebook.com/MuslimaniIdealM/"><i
                                            class="fab fa-facebook"></i></a>
                                    <a href="https://t.me/muslimani_ideal"><i class="fab fa-telegram-plane"></i></a>
                                    <a href="https://www.instagram.com/muslimani_ideal/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="main-header__top-right-btn-box">
                                    <a href="javascript:void(0)"
                                        class="thm-btn search-toggler main-header__top-right-btn">Kontribuoni</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="container clearfix">
                        <div class="main-menu-wrapper-inner clearfix">
                            <div class="main-menu-wrapper__left w-100 clearfix">
                                <div class="main-menu-wrapper__logo">
                                    <a href="{{ route('home') }}"><img style="width: 115px"
                                            src="{{ asset('assetsFront/images/resources/logo.png') }}" alt=""></a>
                                </div>
                                <div class="main-menu-wrapper__main-menu" style="float: right">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li><a href="{{ route('home') }}">Ballina</a></li>
                                        <li><a href="{{ route('blogs') }}">Artikuj</a></li>
                                        <li><a href="{{ route('shield') }}">Mburoja</a></li>
                                        <li><a href="{{ route('recitations') }}">Recitime</a></li>
                                        <li><a href="{{ route('lectures', 'prishtinë') }}">Derse</a></li>
                                        <li><a href="{{ route('academy') }}">Akademia</a></li>
                                        {{-- <li><a href="{{ route('ads') }}">Bizneset</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="main-menu-wrapper__right">
                                <a href="https://www.youtube.com/c/MuslimaniIdeal" class="about-one__btn thm-btn">Dhikri i Mengjesit</a>
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                <a href="#" class="main-menu__user icon-avatar"></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div>

        @yield('content')

        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="index.html"><img style="width: 132px"
                                                src="{{ asset('assetsFront/images/resources/footer-logo.png') }}"
                                                alt=""></a>
                                    </div>
                                    <p class="footer-widget__about-text">Për çdo këshillë, sugjerim apo kritikë, na
                                        kontaktoni.</p>
                                    <ul class="footer-widget__about-contact list-unstyled">
                                        {{-- <li>
                                            <div class="icon">
                                                <i class="fas fa-phone-square-alt"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:+38349133540">+383 49 133 540</a>
                                            </div>
                                        </li> --}}
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:info@muslimani-ideal.org">info@muslimani-ideal.org</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <p>Kosovë, Prishtinë</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__company clearfix">
                                    <h3 class="footer-widget__title">Muslimani Ideal</h3>
                                    <ul class="footer-widget__company-list list-unstyled">
                                        <li><a href="{{ route('home') }}">Ballina</a></li>
                                        <li><a href="{{ route('shield') }}">Mburoja</a></li>
                                        <li><a href="{{ route('blogs') }}">Artikuj</a></li>
                                        <li><a href="{{ route('recitations') }}">Recitime</a></li>
                                        <li><a href="{{ route('lectures', 'Prishtinë') }}">Derse</a></li>
                                        {{-- <li><a href="#">Bizneset</a></li> --}}

                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">One Hadith Web-i dhe Extension</h3>
                                    <form class="footer-widget__newsletter-form mc-form"
                                        data-url="">
                                        <div class="footer-widget__newsletter-input-box">
                                            <a href="https://onehadith.org/" class="about-one__btn thm-btn">One
                                                Hadith Web</a>
                                            <a href="https://chrome.google.com/webstore/detail/one-hadith/kjkmpppbjhcllohbcjeclghdfhbcnkfa"
                                                class="about-one__btn thm-btn mt-3">One Hadith Extension</a>
                                        </div>
                                    </form>
                                    <div class="mc-form__response text-center"></div><!-- /.mc-form__response -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-left">
                                    <div class="footer-widget__social">
                                        <a href="https://www.youtube.com/c/MuslimaniIdeal"><i
                                                class="fab fa-youtube"></i></a>
                                        <a href="https://www.facebook.com/MuslimaniIdealM/"><i
                                                class="fab fa-facebook"></i></a>
                                        <a href="https://t.me/muslimani_ideal"><i class="fab fa-telegram-plane"></i></a>
                                        <a href="https://www.instagram.com/muslimani_ideal/"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="site-footer__bottom-right">
                                    <p>© All Copyright 2021, <a href="#">Muslimani Ideal</a></p>
                                </div>
                                <div class="site-footer__bottom-left-arrow">
                                    <a href="javascript:void(0)" data-target="html"
                                        class="scroll-to-target scroll-to-top"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img style="width: 115px"
                        src="{{ asset('assetsFront/images/resources/logo-2.png') }}" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@muslimani-ideal.org">info@muslimani-ideal.org</a>
                </li>
                {{-- <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="">+383 49 133 540</a>
                </li> --}}
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.youtube.com/c/MuslimaniIdeal" class="fab fa-youtube"></a>
                    <a href="https://www.facebook.com/MuslimaniIdealM/" class="fab fa-facebook-square"></a>
                    <a href="https://t.me/muslimani_ideal" class="fab fa-telegram-plane"></a>
                    <a href="https://www.instagram.com/muslimani_ideal/" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->


    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content p-4 pt-5 p-md-5 card" style="max-width: 1280px; overflow: auto; max-height: 90vh">
            <div class="row ">

                <div class="news-details__content col-lg-6">


                    <h4 class="news-details__title  mb-4">Ndihmoje Muslimanin Ideal!</h4>

                    <div class="mt-4">
                        <p class="mt-3 mb-1">Mos e pij një kafe, jepe n’dawet!</p>

                        <a href="https://www.buymeacoffee.com/muslimani.ideal"><img
                                src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=muslimani.ideal&button_colour=FF5F5F&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>

                        {{-- <p class="mt-3 mb-1">Dorzo në akademinë Ether <a href="tel:+38349133540">(+383 49 133 540)</a>:</p>

                        <iframe
                        style="max-height: 280px;border: 1px solid #00000030;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d366.7236850412683!2d21.170050949227686!3d42.66581636733797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f20d08017f9%3A0xa879d246924d6aea!2sAfrim%20Loxha%2C%20Prishtin%C3%AB!5e0!3m2!1sen!2s!4v1637766434622!5m2!1sen!2s"
                            class="tour-details-two__location-map" loading="lazy" allowfullscreen></iframe> --}}

                    </div>

                </div>
                <div class="col-lg-1"></div>

                <div class="news-details__content col-lg-5 mt-5 mt-lg-0">


                    <h1 class="news-details__title  mb-4">Për gurbetqarët</h1>

                    <div class="gfm-embed" data-url="https://www.gofundme.com/f/muslimani-ideal/widget/large/">
                    </div><script defer src="https://www.gofundme.com/static/js/embed.js"></script>


                </div>
            </div>
        </div>
    </div>

    {{-- <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div> --}}
    <!-- /.search-popup -->


    <script type="text/javascript">
        function copy_text(TextToCopy) {
            var TempText = document.createElement("input");
            TempText.value = TextToCopy;
            document.body.appendChild(TempText);
            TempText.select();

            document.execCommand("copy");
            document.body.removeChild(TempText);

            alert('Linku u kopjua!')
        }
    </script>

    <script src="{{ asset('js/player.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assetsFront/vendors/timepicker/timePicker.js') }}"></script>





    <!-- template js -->
    <script src="{{ asset('assetsFront/js/tevily.js') }}"></script>
</body>

</html>
