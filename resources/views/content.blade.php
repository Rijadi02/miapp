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
                        <h2>Destinations Details</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>.</span></li>
                            <li class="active">Destinations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Destinations Details Start-->
        <section class="destinations-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="destinations-details__left">

                            <div class="destinations-details__faq">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                                    @foreach ($contents as $content)
                                        <div class="accrodion active">
                                            <div class="accrodion-title">
                                                <p class="accrodion-title--num">{!! $content->number !!}</p>
                                            </div>
                                            <div class="accrodion-content" style="display: none;">
                                                <div class="inner">
                                                    <p class="arabic" dir="rtl">{{ $content->arabic }}</p>
                                                    <p class="transliteration">{!! $content->transliteration !!}</p>
                                                    <p class="content"><b>{!! $content->content !!}</b></p>
                                                    <p class="hadith">{!! $content->hadith !!}</p>
                                                    <p class="reference">{!! $content->reference !!}</p>

                                                        <div class="shield_check spans">
                                                            <span id="{{$content->id}}" class="span"><i class="fas fa-check"></i></span>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <script>
                                        const spans = document.querySelectorAll('span');
                                        spans.forEach(spa => {
                                            var id = spa.getAttribute('id');

                                            var data = JSON.parse(localStorage.getItem("contents"));
                                            if(data){
                                                var result = data.find(x => x.s == id) ? data.findIndex(x => x.s == id) : null;
                                            if(result != null){
                                                spa.classList.add('active');
                                            }
                                            }


                                            spa.addEventListener('click', function (e) {
                                                e.preventDefault();
                                                var id = e.currentTarget.getAttribute('id');
                                                id = parseInt(id);
                                                var data = JSON.parse(localStorage.getItem("contents"));
                                                var result = data.find(x => x.s == id) ? data.findIndex(x => x.s == id) : null;
                                                var index = result
                                                var spani = document.getElementById(id);

                                                if (index == null) {
                                                    // e.target.classList.add("active");
                                                    var content2 = {
                                                        s: id
                                                    };
                                                    data.push(content2);
                                                    localStorage.setItem("contents", JSON.stringify(data));
                                                    spani.classList.toggle('active');
                                                } else {
                                                    data.splice(index, 1);
                                                    localStorage.setItem("contents", JSON.stringify(data));
                                                    spani.classList.toggle('active');
                                                }
                                            });
                                        });

                                        document.addEventListener('DOMContentLoaded', function () {
                                            var contents = [];
                                            if (localStorage.getItem("contents") === null) {
                                                var content1 = {
                                                    s: 1
                                                };
                                                contents.push(content1);
                                                localStorage.setItem("contents", JSON.stringify(contents));
                                            }
                                        }, false);

                                        function removeContents(){
                                            localStorage.removeItem('contents');
                                        }
                                    </script>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="destinations-details__right">
                            <div class="tour-details-two__last-minute tour-details-two__last-minute-2">
                                <h3 class="tour-details-two__sidebar-title">Më të shpeshta</h3>
                                <ul class="tour-details-two__last-minute-list list-unstyled">
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-1.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h5>Dhikri i Mbjremjes</h5>
                                            <p>Mengjesi dhe Mbremja</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-2.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h5>Dhikri i Mengjesit</h5>
                                            <p>Mengjesi dhe Mbremja</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="assets/images/resources/td-img-3.jpg" alt="">
                                        </div>
                                        <div class="tour-details-two__last-minute-content">
                                            <h5>Surja Kehf</h5>
                                            <p>Kuran</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="destinations-details__discount">
                                <img src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png" alt="">
                                <div class="destinations-details__discount-content">
                                    <h4> Artikulli i <br> Fundit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Destinations Details End-->


    @endsection

</x-home-master>
