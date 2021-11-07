<x-home-master>
    @section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg" style="background-image: url({{asset('assetsFront/images/backgrounds/kabba.jpg')}})">
                </div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>{{$book->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/mburoja">Mburoja e Muslimanit</a></li>
                            <li><span>.</span></li>
                            <li class="active">{{$book->name}}</li>
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
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    @foreach ($chapters as $chapter)
                                        <div class="accrodion active">
                                            <a style="text-decoration:none" href="{{route('content',$chapter->slug)}}">
                                                <div class="accrodion-title" style="background-color:#faf5ee">
                                                    <h4>{{ $chapter->number }} . {{ $chapter->name }}</h4>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="destinations-details__right">
                            <div class="destinations-details__discount" style="margin-top:0px;margin-bottom:30px">
                                <a href="{{route('content','dhikri-i-mengjesit')}}">
                                    <img style="max-height:170px;object-fit:cover" src="{{asset('assetsFront/images/backgrounds/mengjes.jpg')}}" alt="">
                                    <div class="destinations-details__discount-content">
                                        <h4> Dhikri i <br> Mëngjesit</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="destinations-details__discount">
                                <a href="{{route('content','dhikri-i-mbremjes')}}">
                                    <img style="max-height:170px;object-fit:cover" src="{{asset('assetsFront/images/backgrounds/mbremje.jpg')}}" alt="">
                                    <div class="destinations-details__discount-content">
                                        <h4> Dhikri i <br> Mbrëmjes</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="destinations-details__discount">
                                <a href="https://quran.com/18/1-110?translations=88&locale=sq">
                                    <img style="max-height:170px;object-fit:cover" src="{{asset('assetsFront/images/backgrounds/kehf.jpg')}}" alt="">
                                    <div class="destinations-details__discount-content">
                                        <h4> Surja <br> Kehf</h4>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Destinations Details End-->


    @endsection

</x-home-master>
