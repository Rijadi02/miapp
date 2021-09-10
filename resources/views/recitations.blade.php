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

                <div class="row">
                    @foreach ($recitations as $recitation)

                        <div class="col-lg-4">
                            <div class="card mb-5" style="width: 18rem;">
                                <a href="{{ route('reciter', $recitation->reciter->slug) }}">
                                    <img class="card-img-top" src="/storage/{{ $recitation->reciter->image }}"
                                        alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $recitation->reciter->name }}</h5>
                                    <a href="{{ route('recitations.show', $recitation->id) }}">
                                        <h5 class="card-title">{{ $recitation->title }}</h5>
                                    </a>
                                    <audio style="max-width: 100%;" controls>
                                        <source src="/storage/{{ $recitation->audio }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!--Tours List End-->


    @endsection

</x-home-master>
