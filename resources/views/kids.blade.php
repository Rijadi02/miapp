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

    <style>
        :root {
            --thm-font: 'DM Sans', sans-serif;
            --thm-reey-font: 'reeyregular';
            --thm-gray: #595870;
            --thm-gray-rgb: 120, 119, 128;
            --thm-primary: #E03655;
            --thm-primary-rgb: 232, 96, 76;
            --thm-black: #1e2440;
            --thm-black-rgb: 49, 48, 65;
            --thm-base: #ffffff;
            --thm-base-rgb: 255, 255, 255;
            --thm-clr-extra: #e3e3e3;
            --thm-border-radius: 8px;
            --thm-letter-spacing: -0.02em;
        }

    </style>
</head>

<body>




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
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('assetsFront/images/mi-kids.jpg') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                {{-- <span class="section-title__tagline">Kush jemi ne?</span> --}}
                                <h2 class="section-title__title">MI Kids</h2>
                            </div>
                            <p class="about-one__right-text">Muslimani Ideal, ka filluar me lejen e Allahut një projekt
                                madhështor i cili inshaAllah <b>do të kontriboj shumë në rritjen e davetit në shtresën
                                    më
                                    të ndjeshme të shoqërisë.</b></p>
                            <p class="about-one__right-text my-5">Me këtë projekt synojmë që përmes prodhimit të filmave
                                të
                                animuar me inspirim nga mësimet fetare të hoxhallarëve tanë, t’i mbjellim mësimet e
                                besimit të pastër Islam tek fëmijët tanë dhe t’i largojmë ata prej filmave të prodhuar
                                nga jomuslimanët të cilët kanë tenenca të ndryshme për t’ua normalizuar fëmijëve tanë
                                moralin e keq, gjynahet e mëdha e në veçanti shirkun ndaj Allahut të lartësuar.</p>

                            <a href="#kontribo" class="about-one__btn mb-3 thm-btn">Kontribo Tani</a>
                            <a href="#meshume" style="background-color: var(--thm-base);color: var(--thm-primary);"
                                class="about-one__btn mb-3 px-3 px-md-4 thm-btn">Më shumë për projektin</a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="news-details pt-5 mt-3 mt-lg-5">
                <div class="container">
                    <div class="row">
                        <div id="meshume" class="col-xl-7 col-lg-6 just-random-thing">
                            <div class="news-details__left">

                                <div class="news-details__content">


                                    <h1 class="news-details__title mt-1 mb-4">Më shumë për projektin</h1>

                                    <img src="{{ asset('assetsFront/images/kids-1.jpg') }}" alt="">

                                    <h2 class="news-details__title mt-1 mb-4">E nesërmja e artë</h2>
                                    <p><i>Me emrin e Allahut, Mëshiruesit, Mëshirëbërësit.</i></p>
                                    <p>Po të flas ty duke i folur edhe vetes! <strong>A e din se ka ardhur afati i
                                            borxhit që duhet paguar SOT.</strong></p>

                                    <p>Koha ka afruar e pritja e zgjatur në këtë çështje do të thotë zullum më i gjatë
                                        ndaj nesh.</p>

                                    <p>• Deri kur do të presim që të zgjohemi ashtu siç na ka hije?</p>
                                    <p>• A jemi ne pasardhësit e denjë të muslimanëve të parë?</p>

                                    <p>• Çfarë pasardhës do kemi pas nesh?</p>
                                    <p>• Me çka i mësuam ne fëmijët tanë?</p>
                                    <p>• A kemi parasysh përgjegjësinë para Allahut për fëmijët tanë?</p>
                                    <p>• Deri kur do të lejojmë humbjen e rinisë tonë në të kotën?</p>
                                    <p>Fëmijët si pjesa më e rëndësishme, e ardhmja e ummetit duhet të jenë të mirë
                                        edukuar me Islamin e pastër. Këtë duhet ta kemi kujdes e të punojmë për ta
                                        arritur në çdo formë.</p>
                                    <p>Fëmijët tanë po devijojnë duke mbjellur dyshime në zemrat e tyre, duke u
                                        shoqëruar me të kotën larg hajrit e të vërtetës përmes lloj-lloj videosh e
                                        kanalesh të ndryshme të filmave për fëmijë.</p>
                                    <p>Duke parë problemet që ballafaqohen prindërit në edukimin e fëmijëve u bë obligim
                                        për ne marrja e iniciativës për krijimin e Muslimani Ideal Kids.</p>
                                    <p>Ne jemi dëshmitarë të një degradimi moral brenda të rinjëve në shoqëritë tona.
                                        Largimi prej mësimeve islame fillon qysh në moshën e hershme përmes ndikimeve të
                                        mësimeve jomuslimane që vijnë tek fëmijët në forma të ndryshme. </p>
                                    <p>Arma kryesore me të cilën sulmohet imani i fëmijëve tanë janë mediat e huaja (jo
                                        islame). Andaj mburoja jonë duhet të jetë media islame e pastër nga turpet e
                                        qafirëve, e mbushur me mësime kuranore e duke u bazuar në sunnetin e Pejgamberit
                                        tonë ﷺ.</p>
                                    <p>Ne do të punojmë fortë në mbledhjen e materialit që bazohet tek hoxhallarët tanë
                                        të ndershëm i cili do ta krijoj mburojën mediale tek fëmijët tanë.</p>
                                    <p>Le ti shërbejmë fëmijëve tanë duke i mbuluar me petkun e devotshmërisë larg
                                        humbjes e larg zullumit të tyre ndaj vetvetes. </p>
                                    <p>Synimi është i kjartë aq sa mesazhi i përcjellur: Fëmijë me iman sot për një
                                        ummet të fuqishëm nesër! Kërkojmë vetëm një gjë nga secili prej jush:
                                        <strong>T'i thërrasim mendjes e të bashkohemi për të nesërmen e artë!</strong>
                                    </p>
                                    <p><i>Falënderimet dhe lavdërimet i takojnë vetëm Allahut, Zotit të Botëve.</i></p>


                                    <img src="{{ asset('assetsFront/images/kids-2.jpg') }}" alt="">

                                    <h2 class="news-details__title mt-1 mb-4">Projekti MI Kids</h2>
                                    <p><i>Me emrin e Allahut, Mëshiruesit, Mëshirëbërësit.</i></p>
                                    <p>Muslimani Ideal, ka filluar me lejen e Allahut një projekt madhështor i cili
                                        inshaAllah do të kontriboj shumë <strong>në rritjen e davetit në shtresën më të
                                            ndjeshme të shoqërisë. </strong></p>

                                    <p>Është fjala për projektin <strong>“MI KIDS”</strong> i cili do të jetë ajka e
                                        projekteve të Muslimanit Ideal, ngase për qëllim kryesor e ka t’i ndihmojë
                                        prindërit në rritjen e fëmijëve në frymën islame. </p>

                                    <p>Në këto kohëra ku fokusi i devijantëve është që fëmijët t’i largojnë nga
                                        natyrshmëria e pastër në të cilën i ka krijuar Allahu, është obligim i yni që
                                        fëmijëve tanë t’u ofrojmë mësimet e islamit dhe t’i edukojmë ashtu siç na ka
                                        mësuar krijesa më e dashur, ﷺ! </p>
                                    <p>
                                        Me këtë projekt synojmë që përmes prodhimit të filmave të animuar me inspirim
                                        nga mësimet fetare të hoxhallarëve tanë, t’i mbjellim mësimet e besimit të
                                        pastër Islam tek fëmijët tanë dhe t’i largojmë ata prej filmave të prodhuar nga
                                        jomuslimanët të cilët kanë tenenca të ndryshme për t’ua normalizuar fëmijëve
                                        tanë moralin e keq, gjynahet e mëdha e në veçanti shirkun ndaj Allahut të
                                        lartësuar.</p>

                                    <p>Si çdo projekt tjetër, as ky projekt nuk mund të realizohet pa sakrifikuar diçka.
                                        Nevoja më e madhe është ajo materiale pasi që për prodhimin e këtyre
                                        video-animacioneve nevojiten pajise profesionale të cilat e mundësojnë
                                        realizimin e këtyre filmave të animuar.</p>

                                    <a href="#kontribo" class="about-one__btn mt-3 thm-btn">Kontribo Tani</a>

                                </div>









                            </div>
                        </div>

                        <div class="col-xl-5 ml-0 ml-lg-4 col-lg-6">
                            <div class="sidebar">

                                <div id="kontribo" class="sidebar__single py-4 py-lg-5 sidebar__post">
                                    <p>Paisjet për projektin:</p>
                                    <dic class="row">
                                        <div class="col-8">
                                            <p>Kompjuter</br>

                                                Monitor</br>

                                                Sistem zërimi</br>

                                                Server i të dhënave</br>
                                                Tablet grafik</br>
                                                Laptop 2x</p>
                                            <p>Totali</p>
                                        </div>
                                        <div class="col-4">
                                            <p><strong>2200€</br>

                                                    300€</br>

                                                    520€</br>

                                                    480€</br>
                                                    400€</br>
                                                    3100€</strong></p>
                                            <p><strong>7000€</strong></p>
                                        </div>
                                        <hr style="margin-top:5px; opacity:0.1">
                                        </hr>
                                        <h3 class="sidebar__title mt-3">Kontribo tani</h3>
                                        <p class="mt-3 mb-3">Mos e pij një kafe, jepe n’dawet!</p>

                                        <a href="https://www.buymeacoffee.com/muslimani.ideal"><img
                                                src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=muslimani.ideal&button_colour=FF5F5F&font_colour=ffffff&font_family=Lato&outline_colour=000000&coffee_colour=FFDD00"></a>
                                        
                                                <h3 class="sidebar__title mt-5 mb-4">Për gurbetqarët</h3>
                                                

                <div class="gfm-embed" data-url="https://www.gofundme.com/f/muslimani-ideal/widget/medium/"></div>
                <script defer src="https://www.gofundme.com/static/js/embed.js"></script>
                                        <p class="mt-4 mx-1" style="opacity: 0.8">Për metoda tjera, na kontaktoni
                                            në rrjetet sociale!

                                          <div class="news-details__social-list">
                                         
                                                <a href="https://www.facebook.com/MuslimaniIdealM/"><i class="fab fa-facebook"></i></a>
                                               
                                                <a href="https://www.instagram.com/muslimani_ideal/"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>




        </section>




    </div>





    <!-- template js -->
    <script src="{{ asset('assetsFront/js/tevily.js') }}"></script>
</body>

</html>
