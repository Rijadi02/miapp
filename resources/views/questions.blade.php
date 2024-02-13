<x-home-master>

    @section('meta')
    <meta property="og:image" content="<?php echo url('/'); ?>/assetsFront/images/ether-logo.png" />

    <meta property="og:description" content="Pyet hoxhën!" />

    <meta property="og:url" content="<?php echo url('/'); ?>/pyetje" />

    <meta property="og:title" content="Pyet hoxhën!"  />

    <meta property="og:type" content="questions" />



    @endsection

    @section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->






        <section class="contact-page">
            <div class="container">

                @if (Session::has('question-add'))
                    <div class="col-lg-12 mt-5 mb-5">
                        <div class="destinations-details__left">

                            <div class="destinations-details__faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title" style="background-color: #d7eed9;">
                                            <h5>{!! Session::get('question-add')!!} </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                {{-- <span class="section-title__tagline">Mëso fenë!</span> --}}
                                <h2 class="section-title__title">Pyetje drejtuar hoxhës</h2>
                            </div>
                            <div class="contact-page__social">
                                <a href="https://www.youtube.com/c/MuslimaniIdeal"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.facebook.com/MuslimaniIdealM/"><i class="fab fa-facebook"></i></a>
                                <a href="https://t.me/MuslimaniIdeal"><i class="fab fa-telegram-plane"></i></a>
                                <a href="https://www.instagram.com/muslimanii_ideal/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="comment-form">
                                <form method="POST" action="{{ route('questions.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea required type="text" placeholder="Shkruaj pyetjen..." name="question"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            {{-- <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write Comment"></textarea>
                                            </div> --}}
                                            <button type="submit" class="thm-btn comment-form__btn">Dërgo</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div><!-- /.result -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        {{-- <section class="information">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-place"></span>
                            </div>
                            <div class="information__text">
                                <p>88 Broklyn Street <br> Road New York. USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-travel"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a href="tel:+92-666-888-0000" class="information__number-1">+92 666 888 0000</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-at"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a href="mailto:info@muslimani-ideal.org"
                                        class="information__mail-1">info@muslimani-ideal.org</a> <br>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="contact-page-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d366.7236850412683!2d21.170050949227686!3d42.66581636733797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f20d08017f9%3A0xa879d246924d6aea!2sAfrim%20Loxha%2C%20Prishtin%C3%AB!5e0!3m2!1sen!2s!4v1637766434622!5m2!1sen!2s"
                class="contact-page-google-map__one" allowfullscreen=""></iframe>

        </section> --}}


    @endsection('content')

</x-home-master>
