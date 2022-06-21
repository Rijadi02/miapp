<x-home-master>





    @section('content')
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg"
                    style="background-image: url({{ asset('assetsFront/images/backgrounds/recitimet.jpg') }})"></div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Playlista për udhëtim</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home') }}">Ballina</a></li>
                            <li><span>.</span></li>
                            <li class="active">Playlista për udhëtim</li>
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


                    <div class="col-lg-9 mb-4 col-md-12">
                        <div class="player">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yqDRKnPn6WMdJYgaazMP9Ls">
                                        <div class="reciter__image d-flex justify-center">
                                            <img class="reciter-img"
                                                src="{{ asset('assetsFront/Playlists/Motivuese.jpg')}}"
                                                alt="Card image cap">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <h3 class="card-title mt-5 mt-md-1 mb-0">Playlista e shkeputjeve Motivuese</h3>
                                    <p class="card-title">Muslimani Ideal</p>
                                    <div class="btn-box">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a download="Emocionale - Muslimani Ideal.mp3"
                                                    href="{{ asset('assetsFront/Playlists/Motivuese.mp3') }}"
                                                    class="iconText"><i class="fas fa-download"></i> <span
                                                        class="text">Shkarko</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 mt-md-2 pt-0">
                                    <div class="row">
                                        <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                            <div id="volume-box-1"
                                                class="volume-box d-none flex-row justify-center align-center">
                                                <span class="volume-up"><i class="fas fa-volume-up"></i></span>
                                                <input id="volume-1" type="range"
                                                    class="d-flex flex-1 ms-3 m-auto volume-range" step="0.01"
                                                    value="1" min="0" max="1"
                                                    oninput="source(1).volume = this.value; audio = this.value">
                                                {{-- <span class="volume-up"><i class="fas fa-volume-up"></i></span> --}}
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-8">
                                            <div class="music-box d-flex flex-row justify-center align-center">
                                                <span id="playbtn-1" class="play d-flex justify-center align-center"
                                                    onclick="handlePlay(1)">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                                <audio id="source-1" ontimeupdate="ontTimeUpdate(1)"
                                                    onloadeddata="onSourceLoad(1)" onended="sourceEnded(1)"
                                                    data-index="1" data-num="1">
                                                    <source src="{{ asset('assetsFront/Playlists/Motivuese.mp3') }}"
                                                        type="audio/mp3">
                                                </audio>
                                                <input type="range" step="1" id="seekbar-1"
                                                    class="mx-3 d-flex flex-1 m-auto" value="0" min="0"
                                                    max="100" oninput="handleSeekBar(1)">
                                                <div class="d-flex m-auto">
                                                    <span class="current-time" id="current-time-1">0:00</span> / <span
                                                        class="duration" id="duration-1">0:00</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-lg-9 mb-4 col-md-12">
                        <div class="player">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yoxsN0hMBIOsuhn0tOuXPLj">
                                        <div class="reciter__image d-flex justify-center">
                                            <img class="reciter-img"
                                                  src="{{ asset('assetsFront/Playlists/Emocionale.jpg')}}"
                                                alt="Card image cap">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <h3 class="card-title mt-5 mt-md-1 mb-0">Playlista e shkeputjeve Emocionale</h3>
                                    <p class="card-title">Muslimani Ideal</p>
                                    <div class="btn-box">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a download="Motivuese - Muslimani Ideal.mp3"
                                                    href="{{ asset('assetsFront/Playlists/Emocionale.mp3') }}"
                                                    class="iconText"><i class="fas fa-download"></i> <span
                                                        class="text">Shkarko</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 mt-md-2 pt-0">
                                    <div class="row">
                                        <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                            <div id="volume-box-2"
                                                class="volume-box d-none flex-row justify-center align-center">
                                                <span class="volume-up"><i class="fas fa-volume-up"></i></span>
                                                <input id="volume-2" type="range"
                                                    class="d-flex flex-1 ms-3 m-auto volume-range" step="0.01"
                                                    value="1" min="0" max="1"
                                                    oninput="source(1).volume = this.value; audio = this.value">
                                                {{-- <span class="volume-up"><i class="fas fa-volume-up"></i></span> --}}
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-8">
                                            <div class="music-box d-flex flex-row justify-center align-center">
                                                <span id="playbtn-2" class="play d-flex justify-center align-center"
                                                    onclick="handlePlay(2)">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                                <audio id="source-2" ontimeupdate="ontTimeUpdate(2)"
                                                    onloadeddata="onSourceLoad(2)" onended="sourceEnded(2)"
                                                    data-index="2" data-num="2">
                                                    <source src="{{ asset('assetsFront/Playlists/Emocionale.mp3') }}"
                                                        type="audio/mp3">
                                                </audio>
                                                <input type="range" step="1" id="seekbar-2"
                                                    class="mx-3 d-flex flex-1 m-auto" min="0"
                                                    max="100" oninput="handleSeekBar(2)">
                                                <div class="d-flex m-auto">
                                                    <span class="current-time" id="current-time-2">0:00</span> / <span
                                                        class="duration" id="duration-2">0:00</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-9 mb-4 col-md-12">
                        <div class="player">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8ypzRXJEWxJMXP0YKgYbGei5">
                                        <div class="reciter__image d-flex justify-center">
                                            <img class="reciter-img"
                                                  src="{{ asset('assetsFront/Playlists/Keshilluese.jpg')}}"
                                                alt="Card image cap">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <h3 class="card-title mt-5 mt-md-1 mb-0">Playlista e shkeputjeve Keshilluese</h3>
                                    <p class="card-title">Muslimani Ideal</p>
                                    <div class="btn-box">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a download="Motivuese - Muslimani Ideal.mp3"
                                                    href="{{ asset('assetsFront/Playlists/Keshilluese.mp3') }}"
                                                    class="iconText"><i class="fas fa-download"></i> <span
                                                        class="text">Shkarko</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 mt-md-2 pt-0">
                                    <div class="row">
                                        <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                            <div id="volume-box-3"
                                                class="volume-box d-none flex-row justify-center align-center">
                                                <span class="volume-up"><i class="fas fa-volume-up"></i></span>
                                                <input id="volume-3" type="range"
                                                    class="d-flex flex-1 ms-3 m-auto volume-range" step="0.01"
                                                    value="1" min="0" max="1"
                                                    oninput="source(1).volume = this.value; audio = this.value">
                                                {{-- <span class="volume-up"><i class="fas fa-volume-up"></i></span> --}}
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-8">
                                            <div class="music-box d-flex flex-row justify-center align-center">
                                                <span id="playbtn-3" class="play d-flex justify-center align-center"
                                                    onclick="handlePlay(3)">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                                <audio id="source-3" ontimeupdate="ontTimeUpdate(3)"
                                                    onloadeddata="onSourceLoad(3)" onended="sourceEnded(3)"
                                                    data-index="3" data-num="3">
                                                    <source src="{{ asset('assetsFront/Playlists/Keshilluese.mp3') }}"
                                                        type="audio/mp3">
                                                </audio>
                                                <input type="range" step="1" id="seekbar-3"
                                                    class="mx-3 d-flex flex-1 m-auto" min="0"
                                                    max="100" oninput="handleSeekBar(3)">
                                                <div class="d-flex m-auto">
                                                    <span class="current-time" id="current-time-3">0:00</span> / <span
                                                        class="duration" id="duration-3">0:00</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                      <div class="col-lg-9 mb-4 col-md-12">
                        <div class="player">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="https://www.youtube.com/playlist?list=PLhPi5JZLh8yoBQyFtTaynTykCVwAKMy1D">
                                        <div class="reciter__image d-flex justify-center">
                                            <img class="reciter-img"
                                                  src="{{ asset('assetsFront/Playlists/Tregime.jpg')}}"
                                                alt="Card image cap">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <h3 class="card-title mt-5 mt-md-1 mb-0">Playlista e Tregimeve Islame</h3>
                                    <p class="card-title">Muslimani Ideal</p>
                                    <div class="btn-box">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a download="Motivuese - Muslimani Ideal.mp3"
                                                    href="{{ asset('assetsFront/Playlists/Tregime Islame.mp3') }}"
                                                    class="iconText"><i class="fas fa-download"></i> <span
                                                        class="text">Shkarko</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 mt-md-2 pt-0">
                                    <div class="row">
                                        <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                            <div id="volume-box-4"
                                                class="volume-box d-none flex-row justify-center align-center">
                                                <span class="volume-up"><i class="fas fa-volume-up"></i></span>
                                                <input id="volume-4" type="range"
                                                    class="d-flex flex-1 ms-3 m-auto volume-range" step="0.01"
                                                    value="1" min="0" max="1"
                                                    oninput="source(1).volume = this.value; audio = this.value">
                                                {{-- <span class="volume-up"><i class="fas fa-volume-up"></i></span> --}}
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-8">
                                            <div class="music-box d-flex flex-row justify-center align-center">
                                                <span id="playbtn-4" class="play d-flex justify-center align-center"
                                                    onclick="handlePlay(4)">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                                <audio id="source-4" ontimeupdate="ontTimeUpdate(4)"
                                                    onloadeddata="onSourceLoad(4)" onended="sourceEnded(4)"
                                                    data-index="4" data-num="4">
                                                    <source src="{{ asset('assetsFront/Playlists/Tregime Islame.mp3') }}"
                                                        type="audio/mp3">
                                                </audio>
                                                <input type="range" step="1" id="seekbar-4"
                                                    class="mx-3 d-flex flex-1 m-auto" min="0"
                                                    max="100" oninput="handleSeekBar(4)">
                                                <div class="d-flex m-auto">
                                                    <span class="current-time" id="current-time-4">0:00</span> / <span
                                                        class="duration" id="duration-4">0:00</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>

            </div>


        </section>
    @endsection

</x-home-master>
