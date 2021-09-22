<x-home-master>
    @section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__top">
           <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)"></div>
           <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Artikujt e Fundit</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Ballina</a></li>
                        <li><span>.</span></li>
                        <li class="active">Artikujt</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--News One Single-->
                     <div class="news-one__single">
                         <div class="news-one__img">
                             <img style="aspect-ratio: 0.7;object-fit: cover;" src="/storage/{{ $blog->image }}" alt="">
                             <a href="{{route('blog',$blog->slug)}}">
                                 <span class="news-one__plus"></span>
                             </a>
                             <div class="news-one__date">
                                 <p>{{ $blog->created_at->format('d') }}<br> <span>{{ $blog->created_at->format('M') }}</span></p>
                             </div>
                         </div>
                         <div class="news-one__content">
                             <ul class="list-unstyled news-one__meta">
                                 <li><a href="{{route('blog',$blog->slug)}}"><i class="far fa-user-circle"></i>{{ $blog->author}}</a></li>

                             </ul>
                             <h3 class="news-one__title">
                                <a href="{{route('blog',$blog->slug)}}">{{ $blog->title}}</a>
                             </h3>
                         </div>
                     </div>
                 </div>
                @endforeach

                <div class="row">
                        {{ $blogs->render("pagination::bootstrap-4") }}
                </div>


            </div>
        </div>
    </section>

    @endsection

</x-home-master>
