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
                        <div class="col-lg-9 col-md-12">
                                <div class="player">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <a href="{{ route('reciter', $recitation->reciter->slug) }}">
                                            <div class="reciter__image d-flex justify-center">
                                                <img src="/storage/{{ $recitation->reciter->image }}" alt="Card image cap"
                                                    style="max-width: 90%;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <a href="{{ route('recitations.show', $recitation->id) }}">
                                            <h3 class="card-title mt-5 mt-md-1 mb-0">{{ $recitation->title }}</h3>
                                        </a>
                                        <p class="card-title">{{ $recitation->reciter->name }}</p>
                                        <div class="btn-box">
                                            <span class="iconText"><i class="fas fa-redo"
                                                    onclick="handleRepeat()"></i></span>
                                            <span class="iconText"><i class="fas fa-volume-up"
                                                    onclick="handleVolume()"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4 pt-0">

                                            <div class="row">
                                                <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                                    <div
                                                        class="volume-box active d-flex flex-row justify-center align-center">
                                                        <span class="volume-down"><i
                                                                class="fas fa-volume-up"></i></span>
                                                        <input type="range" class="d-flex flex-1 ms-3 m-auto volume-range"
                                                            step="1" value="80" min="0" max="100"
                                                            oninput="music.volume = this.value/100">
                                                        {{-- <span class="volume-up"><i class="fas fa-volume-up"></i></span> --}}
                                                    </div>
                                                </div>

                                                <div class="col-lg-9 col-md-8">
                                                    <div class="music-box d-flex flex-row justify-center align-center">
                                                        <span class="play d-flex justify-center align-center"
                                                            onclick="handlePlay()">
                                                            <i class="fas fa-play"></i>
                                                        </span>
                                                        <audio class="music-element">
                                                            <source
                                                                src="https://download.tvquran.com/download/selections/315/5cc9f8f83d272.mp3"
                                                                type="audio/mp3">
                                                        </audio>
                                                        <input type="range" step="1"
                                                            class="seekbar mx-3 d-flex flex-1 m-auto" value="0" min="0"
                                                            max="100" oninput="handleSeekBar()">
                                                        <div class="d-flex m-auto">
                                                            <span class="current-time">0:0</span> / <span
                                                                class="duration">0:0</span>

                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
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
