<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kids Learning Center - Muslimani Ideal</title>
    
    <!-- Google Fonts: Quicksand for a playful feel -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap and Icons -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <style>
        :root {
            --kids-primary: #76c7c0;
            --kids-secondary: #ff9f43;
            --kids-accent: #ff6b6b;
            --kids-bg: #f0f7f4;
            --kids-sidebar: #ffffff;
            --kids-text: #2d3436;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background-color: var(--kids-bg);
            color: var(--kids-text);
            overflow-x: hidden;
        }

        /* Sidebar Styling */
        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: margin 0.25s ease-out;
            background: var(--kids-sidebar);
            box-shadow: 4px 0 15px rgba(0,0,0,0.05);
            border-right: 2px solid #e0f0ea;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 2rem 1.25rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--kids-primary);
            text-align: center;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
            padding: 0 1rem;
        }

        .list-group-item {
            border: none;
            border-radius: 15px !important;
            margin-bottom: 0.5rem;
            padding: 1rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            color: #636e72;
            display: flex;
            align-items: center;
        }

        .list-group-item i {
            margin-right: 12px;
            font-size: 1.2rem;
            width: 25px;
            text-align: center;
        }

        .list-group-item:hover {
            background-color: #f7f9fb;
            color: var(--kids-primary);
            transform: translateX(5px);
        }

        .list-group-item.active {
            background: linear-gradient(135deg, var(--kids-primary), #5db5ae) !important;
            color: white !important;
            box-shadow: 0 4px 12px rgba(118, 199, 192, 0.4);
        }

        /* Topbar Styling */
        #page-content-wrapper {
            min-width: 100vw;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #e0f0ea;
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--kids-primary) !important;
        }

        /* Main Content Cards */
        .content-container {
            padding: 2rem;
        }

        .kids-card {
            border: none;
            border-radius: 25px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
            background: white;
            overflow: hidden;
        }

        .kids-card:hover {
            transform: translateY(-5px);
        }

        /* Profile Dropdown */
        .dropdown-user-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--kids-primary);
        }

        /* Responsiveness */
        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }
            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }
        }

        /* Fun Elements */
        .bubble {
            position: absolute;
            background: rgba(118, 199, 192, 0.1);
            border-radius: 50%;
            z-index: -1;
        }

        .footer {
            padding: 2rem;
            text-align: center;
            color: #b2bec3;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">
                <i class="fas fa-star text-warning"></i> Kids Zone
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('dashboard.index') }}" class="list-group-item list-group-item-action {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Kreu
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-book-open"></i> Librat e mi
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-play-circle"></i> Videot
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-microphone"></i> Recitime
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-graduation-cap"></i> Akademia
                </a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="btn btn-icon btn-transparent-dark" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="ml-auto d-flex align-items-center">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" id="userMenu" data-toggle="dropdown">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="dropdown-user-img" src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in-up border-0" style="border-radius: 15px;">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Çkyqu
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-fluid content-container">
                @yield('content')
            </div>

            <footer class="footer">
                &copy; {{ date('Y') }} Muslimani Ideal Kids. Me shumë dashuri 💖
            </footer>
        </div>
        <!-- /#page-content-wrapper -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
