<x-home-master>
    @section('content')
    <?php
    function ndreqe($teksti){
       return preg_replace("/\r\n|\r|\n/", '<br/>',$teksti);
    }


    ?>
      <style>
        .arabic br{
            content: "";
            margin: 3em;
            display: block;
            font-size: 24%;
        }
    </style>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg" style="background-image: url({{asset('assetsFront/images/backgrounds/contents.jpg')}})">
                </div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>{{$chapter->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="/mburoja">Mburoja e Muslimanit</a></li>

                            <li><span>.</span></li>
                            <li><a href="{{route('chapters',$chapter->book->slug)}}">{{$chapter->book->name}}</a></li>
                            <li><span>.</span></li>
                            <li class="active" ><a>{{$chapter->name}}</a></li>
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

                                                    <p class="arabic"  dir="rtl">{!! ndreqe($content->arabic) !!}</p>
                                                    <p class="transliteration">{!! ndreqe($content->transliteration) !!}</p>

                                                    <p class="content"><b>{!! ndreqe($content->content) !!}</b></p>
                                                    <p class="hadith">{!! $content->hadith !!}</p>
                                                    <p class="reference">{!! $content->reference !!}</p>

                                                        <div class="shield_check">
                                                            @if ($content->title != 1 && $content->title != null)
                                                            <div class="times">{{$content->title}}x</div>
                                                            @endif
                                                            <span id="{{$content->id}}"><i class="fas fa-check"></i></span>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    <button onclick="removeContents()" class="mt-5 about-one__btn thm-btn">Shlyej Progresin</button>
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
                                            location.reload();

                                        }
                                    </script>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="destinations-details__right">
                            <div class="destinations-details__discount" style="margin-top:0px;margin-bottom:30px">
                                <a href="{{route('content','dhikri-i-mengjesit')}}">
                                    <img style="max-height:170px;object-fit:cover" src="{{asset('assetsFront/images/backgrounds/mengjes.jpg')}}" alt="">
                                    <div class="destinations-details__discount-content">
                                        <h4> Dhikri i <br> Mëngjesit</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="destinations-details__discount">
                                <a href="{{route('content','dhikri-i-mbremjes')}}">
                                    <img style="max-height:170px;object-fit:cover" src="{{asset('assetsFront/images/backgrounds/mbremje.jpg')}}" alt="">
                                    <div class="destinations-details__discount-content">
                                        <h4> Dhikri i <br> Mbrëmjes</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="destinations-details__discount">
                                <a href="https://quran.com/18/1-110?translations=88&locale=sq">
                                    <img style="max-height:170px;object-fit:cover" src="{{asset('assetsFront/images/backgrounds/kehf.jpg')}}" alt="">
                                    <div class="destinations-details__discount-content">
                                        <h4> Surja <br> Kehf</h4>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Destinations Details End-->


    @endsection

</x-home-master>
