<x-home-master>
    @section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->



        <!--Tour Details Slider Start-->
        <section class="main-slider tour-details-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

                <div class="swiper-wrapper">
                    @foreach ((array) json_decode($ad->gallery) as $image)
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(/uploads/{{ $image }});"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="tour-details-slider_icon">
                                    @if($facebook != "")
                                    <a href="{{$facebook}}"><i class="fab fa-facebook"></i></a>
                                    @endif
                                    @if($instagram != "")
                                    <a href="{{$instagram}}"><i class="fab fa-instagram"></i></a>
                                    @endif
                                    @if($twitter != "")
                                    <a href="{{$twitter}}"><i class="fab fa-twitter"></i></a>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="main-slider-nav">
                    <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                    <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
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
                                    <h2 class="tour-details__top-title">{{$ad->name}}</h2>
                                    <p class="tour-details__top-rate"><span>$870</span> / Per Person</p>
                                </div>
                                <div class="tour-details__top-right">
                                    <ul class="list-unstyled tour-details__top-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>Duration</p>
                                                <h6>3 Days</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-user"></span>
                                            </div>
                                            <div class="text">
                                                <p>Min Age</p>
                                                <h6>12 +</h6>
                                            </div>
                                        </li>
                                        <li>
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
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-details__bottom">
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
            </div>
        </section>
        <!--Tour Details End-->

        <!--Tour Details Two Start-->
        <section class="tour-details-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="tour-details-two__left">
                            <div class="tour-details-two__overview">
                                <h3 class="tour-details-two__title">Kush jemi ne?</h3>
                                <p class="tour-details-two__overview-text">{!!$ad->description!!}</p>
                                <div class="tour-details-two__overview-bottom">
                                    <h3 class="tour-details-two-overview__title">Included/Exclude</h3>
                                    <div class="tour-details-two__overview-bottom-inner">
                                        <div class="tour-details-two__overview-bottom-left">
                                            <ul class="list-unstyled tour-details-two__overview-bottom-list">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Pick and Drop Services</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>1 Meal Per Day</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Cruise Dinner & Music Event</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Visit 7 Best Places in the City With Group</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tour-details-two__overview-bottom-right">
                                            <ul class="list-unstyled tour-details-two__overview-bottom-right-list">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Additional Services</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Insurance</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Food & Drinks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Tickets</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-details-two__tour-plan">
                                <h3 class="tour-details-two__title">Tour Plan</h3>
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4><span>Day 1</span> Arrive South Africa Forest</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages of available but majority have
                                                    alteration in some by inject humour or random words. Lorem ipsum
                                                    dolor sit amet, error insolens reprimique no quo, ea pri verterem
                                                    phaedr vel ea iisque aliquam.</p>
                                                <ul class="list-unstyled">
                                                    <li>Free Drinks</li>
                                                    <li>Awesome Breakfast</li>
                                                    <li>5 Star Accommodation</li>
                                                </ul>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4><span>Day 2</span> Lunch Inside of Forest & Adventure</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages of available but majority have
                                                    alteration in some by inject humour or random words. Lorem ipsum
                                                    dolor sit amet, error insolens reprimique no quo, ea pri verterem
                                                    phaedr vel ea iisque aliquam.</p>
                                                <ul class="list-unstyled">
                                                    <li>Free Drinks</li>
                                                    <li>Awesome Breakfast</li>
                                                    <li>5 Star Accommodation</li>
                                                </ul>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>Day 3</span> Depart from South Africa</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages of available but majority have
                                                    alteration in some by inject humour or random words. Lorem ipsum
                                                    dolor sit amet, error insolens reprimique no quo, ea pri verterem
                                                    phaedr vel ea iisque aliquam.</p>
                                                <ul class="list-unstyled">
                                                    <li>Free Drinks</li>
                                                    <li>Awesome Breakfast</li>
                                                    <li>5 Star Accommodation</li>
                                                </ul>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-details-two__location">
                                <h3 class="tour-details-two__title">Tour Plan</h3>
                                <iframe
                                    src="{{$ad->map}}"
                                    class="tour-details-two__location-map" allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="tour-details-two__sidebar">
                            <div class="tour-details-two__book-tours">
                                <h3 class="tour-details-two__sidebar-title">Book Tours</h3>
                                <form action="#" class="tour-details-two__sidebar-form">
                                    <div class="tour-details-two__sidebar-form-input">
                                        <input type="text" placeholder="Where to" name="where to">
                                    </div>
                                    <div class="tour-details-two__sidebar-form-input">
                                        <input type="text" placeholder="When" name="When">
                                    </div>
                                    <div class="tour-details-two__sidebar-form-input">
                                        <select class="selectpicker" id="type">
                                            <option value="Adventure">Type</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Wildlife">Wildlife</option>
                                            <option value="Sightseeing">Sightseeing</option>
                                        </select>
                                        <div class="tour-details-two__sidebar-form-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <div class="tour-details-two__sidebar-form-input">
                                        <input type="text" name="date" placeholder="Select date" id="datepicker">
                                        <div class="tour-details-two__sidebar-form-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <div class="tour-details-two__sidebar-form-input">
                                        <select class="selectpicker">
                                            <option value="Adventure">Choose Ticket</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Wildlife">Wildlife</option>
                                            <option value="Sightseeing">Sightseeing</option>
                                        </select>
                                        <div class="tour-details-two__sidebar-form-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="thm-btn tour-details-two__sidebar-btn">Book
                                        Now</button>
                                </form>
                            </div>
                            <div class="tour-details-two__last-minute">
                                <h3 class="tour-details-two__sidebar-title">Last Minute</h3>
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

    @endsection

</x-home-master>
