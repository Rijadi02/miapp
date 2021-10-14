<x-home-master>

    @section('meta')
    <meta property="og:image" content="<?php echo url('/'); ?>/storage/{{ $blog->image }}" />

    <meta property="og:description" content="  {!! $blog->content !!}" />

    <meta property="og:url" content="<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}" />

    <meta property="og:title" content="{{ $blog->title}}" />

    <meta property="og:type" content="article" />

    <meta name="description" content="Muslimani Ideal" />

    @endsection

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
                <h2>{{$blog->title}}</h2>
            </div>
        </div>
    </div>
    <div class="page-header__bottom">
        <div class="container">
            <div class="page-header__bottom-inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Ballina</a></li>
                    <li><span>.</span></li>
                    <li class="active"><a href="{{ route('blogs') }}">Artikujt</a></li>
                    <li><span>.</span></li>
                    <li class="active">Detajet</li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News One Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <img src="/storage/{{ $blog->image }}" alt="{{ $blog->title }}">
                        <div class="news-one__date">
                            <p>{{ $blog->created_at->format('d') }} <br> <span>{{ $blog->created_at->format('M') }}</span></p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="news-details.html"><i class="far fa-user-circle"></i>{{ $blog->author}}</a></li>
                        </ul>
                        <h3 class="news-details__title">{{ $blog->title}}</h3>
                        {!! $blog->content !!}
                    </div>

                    <div class="news-details__bottom">
                        <div class="news-details__social-list">
                            <a href="https://www.facebook.com/dialog/share?app_id=1266109583813461&display=popup&href=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}&redirect_uri=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="fb-messenger://share/?link=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}&redirect_uri=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}&app_id=1266109583813461"><i class="fab fa-facebook-messenger"></i></a>
                            <a href="whatsapp://send?text=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}&redirect_uri=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}" data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://telegram.me/share/url?url=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}&redirect_uri=<?php echo url('/'); ?>/artikulli/{{ $blog->slug }}&text={{ $blog->title }}" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        </div>
                    </div>




                    {{-- <div class="news-details__bottom">
                        <p class="news-details__tags">
                            <span>Tags:</span>
                            <a href="#">Traveling</a>
                            <a href="#">Adventure</a>
                        </p>
                    </div> --}}


                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    {{-- <div class="sidebar__single sidebar__search">
                       <h3 class="sidebar__title clr-white">Search</h3>
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div> --}}
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Lajmet e fundit</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($blogs as $bloga )
                            <li>
                                <div class="sidebar__post-image">
                                    <img  src="/storage/{{ $bloga->image }}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="#" class="sidebar__post-content_meta"><i class="far fa-user-circle"></i>{{ $bloga->author}}</a>
                                        <a href="{{route('blog',$bloga->slug)}}">{{ $bloga->title}}</a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
{{--
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Traveling</a>
                            <a href="#">Adventure</a>
                            <a href="#">Beach</a>
                            <a href="#">Parks</a>
                            <a href="#">Museum</a>
                            <a href="#">Tourisms</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--News One End-->

    @endsection

</x-home-master>
