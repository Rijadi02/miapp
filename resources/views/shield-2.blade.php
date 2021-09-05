<x-home-master>
    @section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
               <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)"></div>
               <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Mburoja e Muslimanit</h2>
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
                <div class="row masonary-layout">
                    @foreach ($books as $book)
                    <div class="col-xl-3 col-lg-3">
                        <div class="destinations-one__single">
                            <div class="destinations-one__img">
                                <img  src="/storage/{{ $book->image }}" alt="">
                                <div class="destinations-one__content">
                                    <h2 class="destinations-one__title"><a href="destinations-details.html">{{$book->name}}</a></h2>
                                </div>
                                <div class="destinations-one__button">
                                    <a href="#">{{$book->chapters->count()}} Kapituj</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!--Destinations One End-->


    @endsection

</x-home-master>
