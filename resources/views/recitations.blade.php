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
                        <div class="col-lg-9 mb-4 col-md-12">
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
                                            <div onclick="handleRepeat({{ $recitation->id }})"
                                                id="repeat-{{ $recitation->id }}" class="iconText"><i
                                                    class="fas fa-redo"></i> <span class="text">Rikthe</span>
                                            </div>
                                            <div class=" iconText"><i class="fas fa-share" "></i> <span
                                                                            class="    text">Shperndaj</span></div>
                                            <a download href="/storage/{{ $recitation->audio }}" class="iconText"><i
                                                    class="fas fa-download" "></i> <span
                                                                            class="    text">Shkarko</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4 mt-md-2 pt-0">

                                        <div class="row">
                                            <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                                <div id="volume-box-{{ $recitation->id }}" class="volume-box d-none flex-row justify-center align-center">
                                                    <span class="volume-up"><i class="fas fa-volume-up"></i></span>
                                                    <input id="volume-{{ $recitation->id }}" type="range" class="d-flex flex-1 ms-3 m-auto volume-range"
                                                        step="0.01" value="1" min="0" max="1"
                                                        oninput="source({{ $recitation->id }}).volume = this.value; audio = this.value">
                                                    {{-- <span class="volume-up"><i class="fas fa-volume-up"></i></span> --}}
                                                </div>
                                            </div>

                                            <div class="col-lg-9 col-md-8">
                                                <div class="music-box d-flex flex-row justify-center align-center">
                                                    <span id="playbtn-{{ $recitation->id }}"
                                                        class="play d-flex justify-center align-center"
                                                        onclick="handlePlay({{ $recitation->id }})">
                                                        <i class="fas fa-play"></i>
                                                    </span>
                                                    <audio id="source-{{ $recitation->id }}"
                                                        ontimeupdate="ontTimeUpdate({{ $recitation->id }})"
                                                        onloadeddata="onSourceLoad({{ $recitation->id }})"
                                                        onended="sourceEnded({{ $recitation->id }})">
                                                        <source src="/storage/{{ $recitation->audio }}" type="audio/mp3">
                                                    </audio>
                                                    <input type="range" step="1" id="seekbar-{{ $recitation->id }}"
                                                        class="mx-3 d-flex flex-1 m-auto" value="0" min="0" max="100"
                                                        oninput="handleSeekBar({{ $recitation->id }})">
                                                    <div class="d-flex m-auto">
                                                        <span class="current-time"
                                                            id="current-time-{{ $recitation->id }}">0:0</span> / <span
                                                            class="duration"
                                                            id="duration-{{ $recitation->id }}">0:0</span>

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
