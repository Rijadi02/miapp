<x-home-master>
    @section('content')

    @section('meta')
    <meta property="og:image" content="{{ asset('assetsFront/images/mi.jpg') }}"/>

    <meta property="og:url"content="<?php echo url('/'); ?>/mburoja" />

    <meta property="og:title" content="Mburoja e Muslimanit" />
    @endsection

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg" style="background-image: url({{asset('assetsFront/images/backgrounds/mburoja1.jpg')}})"></div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Mburoja e muslimanit</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/">Ballina</a></li>
                            <li><span>.</span></li>
                            <li class="active">Mburoja e Muslimanit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Destinations One Start-->
        <section class="destinations-one destinations-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">

                        <div  class="destinations-one__single">
                            <a href="{{ route('chapters', 'mëngjes-dhe-mbrëmje') }}" class="destinations-one__img">
                                <img class="mburoja"
                                    src="{{asset('assetsFront/images/mburoja/mengjes.jpg')}}">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'mëngjes-dhe-mbrëmje') }}">Mëngjes dhe
                                            mbrëmje</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">7 kapituj</a>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12 col-md-12">
                                <div class="destinations-one__single">
                                    <a href="{{ route('chapters', 'shtëpia-dhe-familja') }}" class="destinations-one__img">
                                        <img class="mburoja2-2"
                                            src="{{asset('assetsFront/images/mburoja/shtepia.jpg')}}"
                                            alt="">
                                        <div class="destinations-one__content">
                                            {{-- <p class="destinations-one__sub-title">Wildlife</p> --}}
                                            <h2 class="destinations-one__title"><a
                                                    href="{{ route('chapters', 'shtëpia-dhe-familja') }}">Shtëpia dhe
                                                    familja</a>
                                            </h2>
                                        </div>
                                        <div class="destinations-one__button">
                                            <a href="#">14 kapituj</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="destinations-one__single">
                                    <a href="{{ route('chapters', 'udhëtim') }}" class="destinations-one__img">
                                        <img class="mburoja"
                                            src="{{asset('assetsFront/images/mburoja/udhetim.jpg')}}"
                                            alt="">
                                        <div class="destinations-one__content">
                                            <h2 class="destinations-one__title"><a
                                                    href="{{ route('chapters', 'udhëtim') }}">Udhëtim</a>
                                            </h2>
                                        </div>
                                        <div class="destinations-one__button">
                                            <a href="#">11 kapituj</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="destinations-one__single">
                                    <a href="{{ route('chapters', 'ushqim-dhe-pije') }}" class="destinations-one__img">
                                        <img class="mburoja"
                                            src="{{asset('assetsFront/images/mburoja/ushqim.jpg')}}"
                                            alt="">
                                        <div class="destinations-one__content">
                                            <h2 class="destinations-one__title"><a
                                                    href="{{ route('chapters', 'ushqim-dhe-pije') }}">Ushqim dhe pije</a>
                                            </h2>
                                        </div>
                                        <div class="destinations-one__button">
                                            <a href="#">7 kapituj</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'gëzim-dhe-shqetësim') }}" class="destinations-one__img">
                                <img class="mburoja"
                                    src="{{asset('assetsFront/images/mburoja/gezim.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    {{-- <p class="destinations-one__sub-title">Adventure</p> --}}
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'gëzim-dhe-shqetësim') }}">Gëzim dhe shqetësim</a>
                                    </h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">15 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'namazi') }}" class="destinations-one__img">
                                <img class="mburoja3" class="mburoja mburoja-cards"
                                    src="{{asset('assetsFront/images/mburoja/namazi.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    {{-- <p class="destinations-one__sub-title">Adventure</p> --}}
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'namazi') }}">Namazi</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">19 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>






                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'falënderimi-ndaj-Allahut') }}" class="destinations-one__img">
                                <img class="mburoja mburoja-cards"
                                    src="{{asset('assetsFront/images/mburoja/falenderimi.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'falënderimi-ndaj-Allahut') }}">Falënderimi ndaj
                                            Allahut</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">9 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'mirësjellja') }}" class="destinations-one__img">
                                <img class="mburoja2"
                                    src="{{asset('assetsFront/images/mburoja/miresjellja.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'mirësjellja') }}">Mirësjellja</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">20 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'haxh-dhe-umre') }}" class="destinations-one__img">
                                <img class="mburoja mburoja-cards"
                                    src="{{asset('assetsFront/images/mburoja/haxh.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'haxh-dhe-umre') }}">Haxh dhe Umre</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">8 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'natyra') }}" class="destinations-one__img">
                                <img class="mburoja2"
                                    src="{{asset('assetsFront/images/mburoja/natyra.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'natyra') }}">Natyra</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">10 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="destinations-one__single">
                            <a href="{{ route('chapters', 'sëmundja-dhe-vdekja') }}" class="destinations-one__img">
                                <img class="mburoja2"
                                    src="{{asset('assetsFront/images/mburoja/semundja.jpg')}}"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'sëmundja-dhe-vdekja') }}">Sëmundja dhe vdekja</a>
                                    </h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">13 kapituj</a>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Destinations One End-->

        <script>
            function myFunction(x) {
                const elements = document.getElementsByClassName('mburoja');
                eLength = elements.length;
                if (x.matches) {
                    for (let i = 0; i < eLength; i++) {
                        elements[i].className = 'mburoja'
                    }
                } else {
                    for (let i = 0; i < eLength; i++) {
                        elements[i].className = 'mburoja mburoja-cards'

                    }
                }
            }

            var x = window.matchMedia("(max-width: 700px)")
            myFunction(x) // Call listener function at run time
            x.addListener(myFunction) // Attach listener function on state changes
        </script>

    @endsection

</x-home-master>
