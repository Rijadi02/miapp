<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'autoservice') }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/scroll.css') }}" rel="stylesheet" />


    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="index.html">Autoservice Panel</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
                data-feather="menu"></i></button>
        {{-- <form class="form-inline mr-auto d-none d-md-block">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-append">
                        <div class="input-group-text"><i data-feather="search"></i></div>
                    </div>
                </div>
            </form> --}}
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown no-caret mr-3 d-md-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <div class="input-group-text"><i data-feather="search"></i></div>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img"
                            src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" />
                        <div class="dropdown-user-details">
                            {{-- <div class="dropdown-user-details-name"><a href="#">{{ Auth::user()->name }}</a></div>
                                <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div> --}}
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('register') }}">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Register
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button style="outline: none" class="dropdown-item" type="submit">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Nav</div>
                        {{-- <a class="nav-link" href="{{ route('home.index') }}">
                            <div class="nav-link-icon"><i class="fa fa-chart-line"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                            Users
                        </a>

                        <a class="nav-link" href="{{ route('brands.index') }}">
                            <div class="nav-link-icon"><i class="fas fa-copyright"></i></div>
                            Brands
                        </a>

                        <a class="nav-link" href="{{ route('prototypes.index') }}">
                            <div class="nav-link-icon"><i class="fas fa-layer-group"></i></div>
                            Models
                        </a> --}}




                        {{-- <a class="nav-link" href="{{ route('clients.index') }}">
                            <div class="nav-link-icon"><i class="fas fa-users"></i></div>
                            Clients
                        </a>
 --}}



                        {{-- <a class="nav-link" href="{{route('admin.blogs.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                Blogs
                            </a>
                            <a class="nav-link" href="{{route('admin.libraries.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                Libraries
                            </a>
                            <a class="nav-link" href="{{route('admin.galleries.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-chart-line"></i></div>
                                Gallery
                            </a> --}}


                        {{-- <a class="nav-link" href="{{route('article.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Articles
                            </a>

                            <a class="nav-link" href="{{route('category.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-list"></i></div>
                                Categories
                            </a>
                            <a class="nav-link" href="{{route('badge.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-medal"></i></div>
                                Badges
                            </a>
                            <a class="nav-link" href="{{route('info.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-info-circle"></i></div>
                                Info
                            </a>
                            <a class="nav-link" href="{{route('users.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a> --}}


                        {{-- <a class="nav-link" href="{{route('branch.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-map-marked-alt"></i></div>
                                Branches
                            </a>

                            <a class="nav-link" href="{{route('position.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-briefcase"></i></div>
                                Positions
                            </a>

                            <a class="nav-link" href="{{route('category.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-list-ul"></i></div>
                                Categories
                            </a>

                            <a class="nav-link" href="{{route('language.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-language"></i></div>
                                Languages
                            </a>

                            <a class="nav-link" href="{{route('subscribe.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-users"></i></div>
                                Subscribers
                            </a>

                            <a class="nav-link" href="{{route('user.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                                Users
                            </a>

                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseNews" aria-expanded="false" aria-controls="collapseFlows">
                                <div class="nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                News
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseNews" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('news.index')}}">All news</a>
                                    <a class="nav-link" href="{{route('news.create')}}">
                                        Add news
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link" href="{{route('media.index')}}">
                                <div class="nav-link-icon"><i class="fas fa-file"></i></div>
                                Media
                            </a> --}}





                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        {{-- <div class="sidenav-footer-title">{{ Auth::user()->name }}</div> --}}
                    </div>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">

            @yield('content')


            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; <a href="http://tachyondev.tech/"> Tachyon Dev </a>
                            <?php echo date('Y'); ?></div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>


    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/date-range-picker-demo.js') }}"></script>

</body>

</html>
