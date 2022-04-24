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


    <nav class="main-menu clearfix ms-4 ms-lg-5">
        <div class="main-menu-wrapper__logo">
            <a href="{{ route('home') }}"><img style="width: 115px"
                    src="{{ asset('assetsFront/images/resources/logo.png') }}" alt=""></a>
        </div>
    </nav>

    <div class="container mt-4">

        <div class="row">

            <div class="news-details__content col-lg-6">


                <h4 class="news-details__title  mb-4">Ndihmoje Muslimanin Ideal!</h4>

                <div class="mt-4">
                    <p class="mt-3 mb-3">Mos e pij një kafe, jepe n’dawet!</p>

                    <a href="https://www.buymeacoffee.com/muslimani.ideal"><img
                            src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=muslimani.ideal&button_colour=FF5F5F&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>
                    <p class="mt-4" style="opacity: 0.8">Për metoda tjera, na kontaktoni në rrjetet sociale!
                    </p>
                    {{-- <p class="mt-3 mb-1">Dorzo në akademinë Ether <a href="tel:+38349133540">(+383 49 133 540)</a>:</p>

                        <iframe
                        style="max-height: 280px;border: 1px solid #00000030;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d366.7236850412683!2d21.170050949227686!3d42.66581636733797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f20d08017f9%3A0xa879d246924d6aea!2sAfrim%20Loxha%2C%20Prishtin%C3%AB!5e0!3m2!1sen!2s!4v1637766434622!5m2!1sen!2s"
                            class="tour-details-two__location-map" loading="lazy" allowfullscreen></iframe> --}}

                </div>

            </div>
            <div class="col-lg-1"></div>

            <div class="news-details__content col-lg-5 mt-4 mt-lg-0 pb-5">


                <h1 class="news-details__title  mb-4">Për gurbetqarët</h1>

                <div class="gfm-embed" data-url="https://www.gofundme.com/f/muslimani-ideal/widget/large/"></div>
                <script defer src="https://www.gofundme.com/static/js/embed.js"></script>



            </div>

        </div>



    </div>




   
    <!-- template js -->
    <script src="{{ asset('assetsFront/js/tevily.js') }}"></script>
</body>

</html>
