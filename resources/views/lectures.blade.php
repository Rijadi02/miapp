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
                        <h2>Tours List</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>.</span></li>
                            <li class="active">Tours</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Tours List Start-->
        <section class="popular-tours-two">
            <div class="container">

                @foreach ($days as $day)
                    <h2 class="section-title__title mb-3">{{ $day->name }}</h2>
                    <div class="row">
                        <?php $lectures = $day->lectures->where('city_id', $city); ?>
                        @if ($lectures->count() == 0)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <!--Popular Tours Two Single-->
                                <div class="popular-tours__single">
                                    <div class="popular-tours__content" style="border-top: 1px solid #ebe6de">
                                        <h3 class="popular-tours__title"><a style="text-decoration: none" >Nuk ka derse të regjistruara</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @foreach ($lectures as $lecture)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <!--Popular Tours Two Single-->
                                <div class="popular-tours__single">
                                    <div class="popular-tours__img">
                                        <img style="object-fit: cover;aspect-ratio:1" src="/storage/{{ $lecture->lecturer->image }}" alt="">
                                        <div class="popular-tours__icon">
                                            <a href="tour-details.html">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-tours__content">

                                        <h3 class="popular-tours__title"><a href="tour-details.html">{{ $lecture->title }}
                                            </a></h3>
                                        <ul class="footer-widget__about-contact list-unstyled">
                                            <li>
                                                <div class="icon ">
                                                    <i class="fas fa-map"></i>
                                                </div>
                                                <div class="mx-2">
                                                    <a href="tel:+92-666-888-0000">{{ $lecture->place }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon ">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                                <div class="mx-2">
                                                    <a href="tel:+92-666-888-0000">{{ $lecture->time }}</a>
                                                </div>

                                            </li>

                                            <li>
                                                <div class="icon ">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="mx-2">
                                                    <a href="tel:+92-666-888-0000">{{ $lecture->allowance }}</a>
                                                </div>

                                            </li>

                                        </ul>
                                        <div class="d-flex mt-3">
                                            <a class="ders ders{{ $lecture->status == "1" ? "--active" : "" }} " href="tour-details.html">{{ $lecture->status == "1" ? "Mbahet" : "Nuk Mbahet" }}</a>
                                            <a style="font-size: 15px" class="ms-3" href="tour-details.html">{{ $lecture->date }}</a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
        <!--Tours List End-->


    @endsection

</x-home-master>
