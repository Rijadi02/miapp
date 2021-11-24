<x-home-master>
    @section('content')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



        <section class="page-header">
            <div class="page-header__top" style="min-height: 375px">
                <div class="page-header-bg" style="background-image: url({{asset('assetsFront/images/ether.png')}})"></div>
                
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/">Ballina</a></li>
                            <li><span>.</span></li>
                            <li class="active">Akademia Ether</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Mëso fenë!</span>
                                <h2 class="section-title__title">Regjistrohu në Akademinë Ether - vetëm për femra</h2>
                            </div>
                            <div class="contact-page__social">
                            <a href="https://www.youtube.com/c/MuslimaniIdeal"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.facebook.com/MuslimaniIdealM/"><i class="fab fa-facebook"></i></a>
                            <a href="https://t.me/muslimani_ideal"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://www.instagram.com/muslimani_ideal/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="comment-form">
                                <form action="inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Emri dhe Mbiemri" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Mosha" name="age">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Vendbanimi (Qyteti)" name="city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            {{-- <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write Comment"></textarea>
                                            </div> --}}
                                            <button type="submit" class="thm-btn comment-form__btn">Regjistrohu</button>
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



        <section class="information">
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
                                    <a href="mailto:info@muslimani-ideal.org" class="information__mail-1">info@muslimani-ideal.org</a> <br>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-page-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="contact-page-google-map__one" allowfullscreen=""></iframe>

        </section>


            @endsection('content')

</x-home-master>
