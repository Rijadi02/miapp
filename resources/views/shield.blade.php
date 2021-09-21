<x-home-master>
    @section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
                </div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Destinations</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>.</span></li>
                            <li class="active">Destinations</li>
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja"
                                    src="https://images.unsplash.com/photo-1536373766806-c56c9acd7fd5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a
                                            href="{{ route('chapters', 'sjelljet-e-mira') }}">Mëngjes dhe mbrëmje</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">13 kapituj</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="destinations-one__single">
                                    <div class="destinations-one__img">
                                        <img class="mburoja2"
                                            src="https://images.unsplash.com/photo-1574259392081-dbe3c19cd15e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=776&q=80"
                                            alt="">
                                        <div class="destinations-one__content">
                                            {{-- <p class="destinations-one__sub-title">Wildlife</p> --}}
                                            <h2 class="destinations-one__title"><a
                                                    href="destinations-details.html">Shtëpia dhe familja</a>
                                            </h2>
                                        </div>
                                        <div class="destinations-one__button">
                                            <a href="#">6 tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="destinations-one__single">
                                    <div class="destinations-one__img">
                                        <img class="mburoja"
                                            src="https://images.unsplash.com/photo-1469286663112-f58a16c6f075?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                                            alt="">
                                        <div class="destinations-one__content">
                                            <h2 class="destinations-one__title"><a
                                                    href="destinations-details.html">Udhëtim</a>
                                            </h2>
                                        </div>
                                        <div class="destinations-one__button">
                                            <a href="#">6 tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="destinations-one__single">
                                    <div class="destinations-one__img">
                                        <img class="mburoja"
                                            src="https://images.unsplash.com/photo-1566698629409-787a68fc5724?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1100&q=80"
                                            alt="">
                                        <div class="destinations-one__content">
                                            <h2 class="destinations-one__title"><a
                                                    href="destinations-details.html">Ushqim dhe pije</a></h2>
                                        </div>
                                        <div class="destinations-one__button">
                                            <a href="#">6 tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja"
                                    src="https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    {{-- <p class="destinations-one__sub-title">Adventure</p> --}}
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Gëzim dhe shqetësim</a>
                                    </h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja3" class="mburoja mburoja-cards"
                                    src="https://images.unsplash.com/photo-1589495180659-8bcc1c5d4908?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    {{-- <p class="destinations-one__sub-title">Adventure</p> --}}
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Namazi</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-xl-3 col-lg-3">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja mburoja-cards"
                                    src="https://images.unsplash.com/photo-1554230333-6fee16f4a12b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    <p class="destinations-one__sub-title">Tours</p>
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Falënderimi ndaj Allahut</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja2" src="https://images.unsplash.com/photo-1510022079733-8b58aca7c4a9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Mirësjellja</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja mburoja-cards"
                                    src="https://images.unsplash.com/photo-1592326871020-04f58c1a52f3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    <p class="destinations-one__sub-title">Tours</p>
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Haxh de Umre</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja2"
                                    src="https://images.unsplash.com/photo-1625472603517-1b0dc72846ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Natyra</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img class="mburoja2"
                                    src="https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1100&q=80"
                                    alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">Sëmundja dhe vdekja</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">6 tours</a>
                                </div>
                            </div>
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
