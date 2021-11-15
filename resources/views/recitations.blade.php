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
                        <h2>Recitimet</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('home')}}">Ballina</a></li>
                            <li><span>.</span></li>
                            <li class="active">Recitimet</li>
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
                    <?php $i = 0; ?>
                    @foreach ($recitations as $recitation)

                        @section('meta')
                            <meta property="og:image" content="<?php echo url('/'); ?>/{{ $recitation->reciter->image }}" />

                            <meta property="og:description" content="  {{ $recitation->reciter->name }}" />

                            <meta property="og:url" content="<?php echo url('/'); ?>/recitimet/{{ $recitation->id }}" />

                            <meta property="og:title" content="{{ $recitation->title }}" />

                            <meta property="og:type" content="recitation" />

                            <meta name="description" content="Muslimani Ideal" />

                        @endsection
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
                                                <img class="reciter-img"
                                                    src="/storage/{{ $recitation->reciter->image }}" alt="Card image cap">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <a href="{{ route('recitations.show', $recitation->id) }}">
                                            <h3 class="card-title mt-5 mt-md-1 mb-0">{{ $recitation->title }}</h3>
                                        </a>
                                        <p class="card-title">{{ $recitation->reciter->name }}</p>
                                        <div class="btn-box">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div onclick="handleRepeat({{ $recitation->id }})"
                                                        id="repeat-{{ $recitation->id }}" class="iconText"><i
                                                            class="fas fa-redo"></i> <span
                                                            class="text">Rikthe</span>
                                                    </div>

                                                    <a download href="/storage/{{ $recitation->audio }}"
                                                        class="iconText"><i class="fas fa-download"></i> <span
                                                            class="text">Shkarko</span></a>
                                                </div>
                                                <div class="col-lg-6">
                                                    {{-- <span class="search-toggler iconText"><span
                                                            class="text">Shperndaje:</span>
                                                    </span> --}}
                                                    <div class="news-details__social-list my-3 my-lg-0">
                                                        <?php $url = url('/') . '/recitimet/' . $recitation->id; ?>
                                                        <a href="https://www.facebook.com/dialog/share?app_id=1266109583813461&display=popup&href=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>"
                                                            target="_blank"><i class="fab fa-facebook"></i></a>
                                                        <a class="d-none-mobile"
                                                            href="fb-messenger://share/?link=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>&app_id=1266109583813461"><i
                                                                class="fab fa-facebook-messenger"></i></a>
                                                        <a href="whatsapp://send?text=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>"
                                                            data-action="share/whatsapp/share" target="_blank"><i
                                                                class="fab fa-whatsapp "></i></a>
                                                        <a href="https://telegram.me/share/url?url=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>"
                                                            target="_blank"><i class="fab fa-telegram-plane"></i></a>
                                                        <a href="javascript:copy_text('<?php echo $url; ?>');"><i
                                                                class="fas fa-copy"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4 mt-md-2 pt-0">

                                        <div class="row">
                                            <div class="col-lg-3 d-none d-md-block my-auto col-md-4">
                                                <div id="volume-box-{{ $recitation->id }}"
                                                    class="volume-box d-none flex-row justify-center align-center">
                                                    <span class="volume-up"><i class="fas fa-volume-up"></i></span>
                                                    <input id="volume-{{ $recitation->id }}" type="range"
                                                        class="d-flex flex-1 ms-3 m-auto volume-range" step="0.01" value="1"
                                                        min="0" max="1"
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
                                                        onended="sourceEnded({{ $recitation->id }})"
                                                        data-index="{{ $i }}"
                                                        data-num="{{ $recitation->id }}">
                                                        <source src="/storage/{{ $recitation->audio }}" type="audio/mp3">
                                                    </audio>
                                                    <input type="range" step="1" id="seekbar-{{ $recitation->id }}"
                                                        class="mx-3 d-flex flex-1 m-auto" value="0" min="0" max="100"
                                                        oninput="handleSeekBar({{ $recitation->id }})">
                                                    <div class="d-flex m-auto">
                                                        <span class="current-time"
                                                            id="current-time-{{ $recitation->id }}">0:00</span> / <span
                                                            class="duration"
                                                            id="duration-{{ $recitation->id }}">0:00</span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php $i = $i + 1; ?>
                    @endforeach

                    <div class="col-lg-9">
                        <div class="destinations-details__left">

                            <div class="destinations-details__faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                        <div class="accrodion active">
                                                <div class="accrodion-title" >
                                                    <h5>
                                                        @foreach ($reciters as $reciter)
                                                        <a href="/recitues/{{$reciter->slug}}">{{$reciter->name}}</a>
                                                        @endforeach
                                                    </h5>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 mt-3">
                        <div class="destinations-details__left">

                            <div class="destinations-details__faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                        <div class="accrodion active">
                                                <div class="accrodion-title" style="background-color:#faf5ee">
                                                    <h5>Disa nga recitimet dhe referencat janë të shkarkuara nga <a href="https://www.tvquran.com/en">tvquran.com</a></h5>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </section>

        {{-- <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <?php $url = url('/') . '/recitimet/' . $recitation->id; ?>
                <div class="news-details__bottom">
                    <div class="news-details__social-list">
                        <a href="https://www.facebook.com/dialog/share?app_id=1266109583813461&display=popup&href=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a class="d-none-mobile" href="fb-messenger://share/?link=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>&app_id=1266109583813461"><i class="fab fa-facebook-messenger"></i></a>
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
