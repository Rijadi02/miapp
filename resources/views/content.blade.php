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
                        <h2>Destinations Details</h2>
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

        <!--Destinations Details Start-->
        <section class="destinations-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="destinations-details__left">

                            <div class="destinations-details__faq">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                                    @foreach ($contents as $content)
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Why are your Tours so Expensive?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p dir="rtl">{!!$content->arabic!!}</p>
                                                <p>{!!$content->transliteration!!}</p>
                                                <p><b>{!!$content->content!!}</b></p>
                                                <p>{!!$content->reference!!}</p>


                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="destinations-details__right">
                            <div class="tour-details-two__last-minute tour-details-two__last-minute-2">
                                <h3 class="tour-details-two__sidebar-title">Më të shpeshta</h3>
                                <ul class="tour-details-two__last-minute-list list-unstyled">
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-1.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h5>Dhikri i Mbjremjes</h5>
                                            <p>Mengjesi dhe Mbremja</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-2.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h5>Dhikri i Mengjesit</h5>
                                            <p>Mengjesi dhe Mbremja</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-3.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h5>Surja Kehf</h5>
                                            <p>Kuran</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="destinations-details__discount">
                                <img src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="">
                                <div class="destinations-details__discount-content">
                                    <h4> Artikulli i <br> Fundit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Destinations Details End-->


    @endsection

</x-home-master>
