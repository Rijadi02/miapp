<x-home-master>
    @section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">




        <!--Tour Details Slider Start-->
        <section class="main-slider tour-details-slider">

            <div class="image-layer" style="background-image: url(/uploads/{{ json_decode($ad->gallery)[0] }});">
                <div style="background-color: #0000002C; position: absolute; top:0; bottom:0; right: 0; left: 0"></div>
            </div>
            <div class="container">
                <div class="swiper-slide-inner">
                    <div class="tour-details-slider_icon">
                        @if ($facebook)
                            <a href="{{ $facebook }}"><i class="fab fa-facebook"></i></a>
                        @endif
                        @if ($instagram)
                            <a href="{{ $instagram }}"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if ($twitter)
                            <a href="{{ $twitter }}"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if ($ad->link)
                            <a href="{{ $ad->link }}"><i class="fas fa-globe"></i></a>
                        @endif

                    </div>
                </div>
            </div>

        </section>
        <!--Tour Details Slider End-->

        <!--Tour Details End-->
        <section class="tour-details">
            <div class="tour-details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tour-details__top-inner">
                                <div class="tour-details__top-left">
                                    <h1 class="tour-details__top-title mb-0">{{ $ad->name }}</h1>
                                    <p class="tour-details__top-rate"><span class="mr-1" style="font-size:1em"><i
                                                class="fa fa-tag"></i></span> {{ $ad->type->name }}</p>
                                </div>
                                <div class="tour-details__top-right">
                                    <ul class="list-unstyled tour-details__top-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <div class="text">
                                                <p>Telefoni</p>
                                                <h6>{{ $ad->phone }}</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-place"></span>
                                            </div>
                                            <div class="text">
                                                <p>Qyteti</p>
                                                <h6>{{ $ad->city }}</h6>
                                            </div>
                                        </li>
                                        {{-- <li>
                                            <div class="icon">
                                                <span class="icon-plane"></span>
                                            </div>
                                            <div class="text">
                                                <p>Tour Type</p>
                                                <h6>Adventure, Fun</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-place"></span>
                                            </div>
                                            <div class="text">
                                                <p>Location</p>
                                                <h6>Los Angeles</h6>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="tour-details__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tour-details__bottom-inner">
                                <div class="tour-details__bottom-left">
                                    <ul class="list-unstyled tour-details__bottom-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>Posted 2 days ago</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="text">
                                                <p>8.0 Superb</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tour-details__bottom-right">
                                    <a href="#"><i class="fas fa-share"></i>share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
        <!--Tour Details End-->

        <!--Tour Details Two Start-->
        <section class="tour-details-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="tour-details-two__left">
                            <div class="tour-details-two__overview mb-5">
                                <h3 class="tour-details-two__title mb-3">{{ $ad->name }}</h3>
                                {!! $ad->description !!}

                            </div>
                            <div class="tour-details-two__tour-plan">
                                <h3 class="tour-details-two__title">Galeria</h3>
                                <div id="gallery" class="gallery" itemscope
                                    itemtype="http://schema.org/ImageGallery">
                                    <div class="row">
                                        <?php
                                        $gallery = json_decode($ad->gallery);
                                        $gallery = array_splice($gallery, 1, 4);
                                        ?>
                                        @foreach ($gallery as $photo)
                                            <?php $dimensions = getimagesize('uploads/' . $photo); ?>

                                            <figure class="col-lg-6" itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                                <a class="gallery-link" href="/uploads/{{ $photo }}"
                                                    data-width="{{ $dimensions[0] }}"
                                                    data-height="{{ $dimensions[1] }}" itemprop="contentUrl">
                                                    <div class="destinations-one__single">
                                                        <div class="destinations-one__img">
                                                            <img style="aspect-ratio: 1.3; object-fit: cover"
                                                                src="/uploads/{{ $photo }}" itemprop="thumbnail"
                                                                alt="Galeria">
                                                        </div>
                                                    </div>
                                                </a>
                                            </figure>

                                        @endforeach





                                    </div>

                                </div>

                            </div>
                            <div class="tour-details-two__location">
                                <h3 class="tour-details-two__title mb-0">Lokacioni</h3>
                                <p class="mb-5">{{ $ad->address }}</p>
                                <iframe src="{{ $ad->map }}" class="tour-details-two__location-map" loading="lazy"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">


                        <div class="tour-details-two__sidebar">
                            <div class="tour-details-two__last-minute mb-4 p-3 p-lg-5">
                                <h3 class="tour-details-two__sidebar-title">Sherndaje</h3>

                                <?php $url = url('/') . '/artikulli/'; ?>


                                <div class="news-details__social-list">
                                    <a href="https://www.facebook.com/dialog/share?app_id=678419596863066&display=popup&href=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>"
                                        target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a class="d-none-mobile"
                                        href="fb-messenger://share/?link=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>&app_id=678419596863066"><i
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
                            <div class="tour-details-two__book-tours">
                                <h3 class="tour-details-two__sidebar-title">Orari</h3>
                                {!! $ad->hours !!}
                            </div>
                            <div class="tour-details-two__last-minute p-4 p-lg-5">
                                <h3 class="tour-details-two__sidebar-title">Bizneset e fundit</h3>
                                <ul class="tour-details-two__last-minute-list list-unstyled">
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-1.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h6>$380</h6>
                                            <h5>Africa 2 Days Tour</h5>
                                            <p>Los Angeles</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-2.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h6>$380</h6>
                                            <h5>Africa 2 Days Tour</h5>
                                            <p>Los Angeles</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-3.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h6>$380</h6>
                                            <h5>Africa 2 Days Tour</h5>
                                            <p>Los Angeles</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Tour Details Two End-->


        <!--Site Footer One End-->


        <!-- /.page-wrapper -->




        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
        <script>
            'use strict';
            (function($) {
                var container = [];
                $('#gallery').find('figure').each(function() {
                    var $link = $(this).find('a'),
                        item = {
                            src: $link.attr('href'),
                            w: $link.data('width'),
                            h: $link.data('height'),
                        };
                    container.push(item);
                });
                $('.gallery-link').click(function(event) {
                    event.preventDefault();
                    var $pswp = $('.pswp')[0],
                        options = {
                            index: $(this).parent('figure').index(),
                            bgOpacity: 0.85,
                            showHideOpacity: true,
                            shareEl: false,
                        };
                    var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
                    gallery.init();
                });
            }(jQuery));
        </script>
    @endsection

</x-home-master>
