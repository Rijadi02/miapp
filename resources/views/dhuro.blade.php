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

    <meta property="og:image" content="{{ asset('assetsFront/images/mi.jpg') }}" />

    <meta property="og:url" content="<?php echo url('/'); ?>" />

    <meta property="og:title" content="Muslimani Ideal" />

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

    <link rel="stylesheet" href="{{ asset('assetsFront/arabic-fonts.css?v=1.01') }}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/tevily.css?v=1.03') }}" />
    <link rel="stylesheet" href="{{ asset('assetsFront/css/tevily-responsive.css?v=1.01') }}" />


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




    <div class="container mt-4">

        <div class="container mt-4">

            <section class="about-one">
                {{-- <div class="about-one-shape-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="{{ asset('assetsFront/images/shapes/about-one-shape-1.png') }}" alt="">
                </div>
                <div class="about-one-shape-2 float-bob-y"><img
                        src="{{ asset('assetsFront/images/shapes/about-one-shape-2.png') }}" alt="">
                </div> --}}
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-lg-6 px-0 wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="about-one__left">
                                <div class="about-one__img-box">
                                    <div class="about-one__img">
                                        <img src="{{ asset('assetsFront/images/dhuro.jpg') }}" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="about-one__right">
                                <div class="section-title text-left">
                                    {{-- <span class="section-title__tagline">Kush jemi ne?</span> --}}
                                    <h2 class="section-title__title">Përkrah davetin</h2>
                                </div>
                                <p>Të gjitha paratë e mbledhura shkojnë për davet, në projektet e Muslimanit Ideal.</p>
                                <h3 class="sidebar__title mt-4">Kontribo tani</h3>
                                            <p class="mt-3 mb-3">Mos e pi një kafe, jepe n’davet!</p>

                                            <a href="https://www.buymeacoffee.com/muslimani.ideal"><img
                                                    src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=muslimani.ideal&button_colour=FF5F5F&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>

                                                    <h3 class="sidebar__title mt-5 mb-4">Për gurbetqarët</h3>


                    <div class="gfm-embed" data-url="https://www.gofundme.com/f/muslimani-ideal/widget/medium/"></div>
                    <script defer src="https://www.gofundme.com/static/js/embed.js"></script>
                                            <p class="mt-4 mx-1" style="opacity: 0.8">Për metoda të tjera, na kontaktoni
                                                në rrjetet sociale!

                                              <div class="news-details__social-list">

                                                    <a href="https://www.facebook.com/MuslimaniIdealM/"><i class="fab fa-facebook"></i></a>

                                                    <a href="https://www.instagram.com/muslimanii_ideal/"><i class="fab fa-instagram"></i></a>
                                                </div>
                                            </p>

                            </div>
                        </div>
                    </div>
                </div>





            </section>




        </div>



    </div>





    <!-- template js -->
    <script src="{{ asset('assetsFront/js/tevily.js') }}"></script>
</body>

</html>
