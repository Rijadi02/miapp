<x-home-master>

    @section('meta')
    <meta property="og:image" content="{{ asset('assetsFront/images/thumbs-plan.jpg') }}"/>

    <meta property="og:url" content="<?php echo url('/'); ?>" />

    <meta property="og:title" content="Muslimani Ideal - Ramadan Planner" />
    @endsection
    @section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg"
                    style="background-image: url({{ asset('assetsFront/images/mock-plan.jpg') }})"></div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Planifikuesi për Ramazan</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home')}}">Ballina</a></li>
                            <li><span>.</span></li>
                            <li class="active">Planifikuesi për Ramazan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Tours List Start-->


                <div class="row ">
                    {{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdk4YUC1XsA4WgtiN8XAYYoCCOke58mxxk-oFgp6z7ryA2Cqg/viewform?embedded=true" width="640" height="1022" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> --}}
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdk4YUC1XsA4WgtiN8XAYYoCCOke58mxxk-oFgp6z7ryA2Cqg/viewform?embedded=true" style="width: 100%; height:100vh; padding-top: 50px" frameborder="0" marginheight="0" marginwidth="0">Duke u ngarkuar...</iframe>
                </div>






        {{-- <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <?php $url = url('/') . '/recitime/' . $recitation->id; ?>
                <div class="news-details__bottom">
                    <div class="news-details__social-list">
                        <a href="https://www.facebook.com/dialog/share?app_id=678419596863066&display=popup&href=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a class="d-none-mobile" href="fb-messenger://share/?link=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>&app_id=678419596863066"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="whatsapp://send?text=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>" data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp "></i></a>
                        <a href="https://telegram.me/share/url?url=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        <a href="javascript:copy_text('<?php echo $url; ?>');"><i class="fas fa-copy"></i></a>
                    </div>
                </div>


            </div>
        </div> --}}
        <!--Tours List End-->


    @endsection

</x-home-master>