<x-home-master>
    @section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <meta property="og:image" content="http://mi.tachyonstudio.com/storage/uploads/rLJVbuJtik1DNoTWYcVJDIOr1pZy5so6y9jVirxn.png" />

        <meta property="og:description" content="Coaches share their secrets to success so you can rock 2015. Join us for this inspiring, rejuvenating, motivating look at what secret sauce these coaches use to succeed in their business. This is for coaches of any level that are committed to changing the world. You will be elevated both in your life and your coaching business. Check out the topics below, there is something for everyone." />

        <meta property="og:url"content="http://mi.tachyonstudio.com/artikulli/titulli-i-bllogut-duhet-te-jete-me-i-madh-apo-me-i-vogel-se-123456789-characters-per-te-qene-i-qendrueshem-si-titull" />

        <meta property="og:title" content="Coaches Wisdom Telesummit" />

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
            <div class="container  ps-4 pe-4">

                <div class="row ">
                    @foreach ($recitations as $recitation)

                        {{-- <div class="col-lg-3">
                            <a href="{{ route('reciter', $recitation->reciter->slug) }}">
                                <div class="reciter__image">
                                    <img src="/storage/{{ $recitation->reciter->image }}"
                                        alt="Card image cap">
                                </div>
                            </a>
                        </div>

                        <div class="card ">
                            <h3 class="card-title">{{ $recitation->reciter->name }}</h3>

                            <div class="card-body">

                                <a href="{{ route('recitations.show', $recitation->id) }}">
                                    <h5 class="card-title">{{ $recitation->title }}</h5>
                                </a>
                                <audio style="max-width: 100%;" controls>
                                    <source src="/storage/{{ $recitation->audio }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div> --}}
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="{{ route('reciter', $recitation->reciter->slug) }}">
                                        <div class="reciter__image d-flex justify-center">
                                            <img src="/storage/{{ $recitation->reciter->image }}" alt="Card image cap"
                                                style="max-width: 80%; margin: auto">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-9">
                                    <a href="{{ route('recitations.show', $recitation->id) }}">
                                        <h3 class="card-title mt-1 mt-sm-4 ">{{ $recitation->title }}</h3>
                                    </a>
                                    <p class="card-title mt-1 ">{{ $recitation->reciter->name }}</p>
                                </div>
                                <div class="col-lg-12 mt-0 pt-0 mb-5" style="padding: 1%;">
                                    <audio style="min-width: 100%;" class="mt-5" controls="">
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
