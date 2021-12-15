<x-home-master>
    @section('meta')
    <meta property="og:image" content="<?php echo url('/'); ?>/{{ $lecture->lecturer->image }}" />

    <meta property="og:description" content="{{ $lecture->day->name }}, {{$lecture->place}}" />

    <meta property="og:url"content="<?php echo url('/'); ?>/dersi/{{ $lecture->id }}" />

    <meta property="og:title" content="Dersi '{{ $lecture->title}}' {{ $lecture->status == "0" ? "NUK" : "" }} mbahet me daten {{ $lecture->date}}"  />

    <meta property="og:type" content="lecture" />





    @endsection

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
            </div>
        </section>
        <!--Page Header End-->

        <!--Tours List Start-->
        <section class="popular-tours-two">
            <div class="container">



                    <div class="row">


                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <!--Popular Tours Two Single-->
                                <div class="popular-tours__single">
                                    <div class="popular-tours__img">

                                        <?php $url = url('/')."/dersi/".$lecture->id?>


                                        <img style="object-fit: cover;aspect-ratio:1" src="/storage/{{ $lecture->lecturer->image }}" alt="">
                                        <div class="popular-tours__icon">
                                            <a href="https://www.facebook.com/dialog/share?app_id=678419596863066&display=popup&href=<?php echo $url ?>&redirect_uri=<?php echo $url ?>" target="_blank">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                            <a class="d-none-mobile" href="fb-messenger://share/?link=<?php echo $url ?>&redirect_uri=<?php echo $url ?>&app_id=678419596863066" target="_blank">
                                                <i class="fab fa-facebook-messenger"></i>
                                            </a>
                                            <a href="whatsapp://send?text=<?php echo $url ?>&redirect_uri=<?php echo $url ?>" data-action="share/whatsapp/share" target="_blank">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="https://telegram.me/share/url?url=<?php echo $url ?>&redirect_uri=<?php echo $url ?>" target="_blank">
                                                <i class="fab fa-telegram-plane"></i>
                                            </a>
                                            <a href="javascript:copy_text('<?php echo $url ?>');">
                                                <i class="fas fa-copy"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="popular-tours__content">

                                        <h3 class="popular-tours__title"><a href="{{route('lecture',$lecture->id)}}">{{ $lecture->title }}
                                            </a></h3>
                                        <ul class="footer-widget__about-contact list-unstyled">
                                            <li>
                                                <div class="icon ">
                                                    <i class="fas fa-map"></i>
                                                </div>
                                                <div class="mx-2">
                                                    <a href="{{ $lecture->map }}">{{ $lecture->place }}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon ">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                                <div class="mx-2">
                                                    <a >{{ $lecture->time }}</a>
                                                </div>

                                            </li>

                                            <li>
                                                <div class="icon ">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="mx-2">
                                                    <a>{{ $lecture->allowance }}</a>
                                                </div>

                                            </li>

                                        </ul>
                                        <div class="d-flex mt-3">
                                            <a class="ders ders{{ $lecture->status == "1" ? "--active" : "" }} " >{{ $lecture->status == "1" ? "Mbahet" : "Nuk Mbahet" }}</a>
                                            <a style="font-size: 15px" class="ms-3">{{ $lecture->date }}</a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>

            </div>
        </section>
        <!--Tours List End-->


    @endsection

</x-home-master>
