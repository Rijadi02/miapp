<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kids Learning Center - Muslimani Ideal</title>
    
    <!-- Google Fonts: Inter and Outfit for a premium feel -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap and Icons -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    
    <style>
        :root {
            @if(Request::routeIs('characters.*'))
            --kids-primary: #3b82f6;
            @elseif(Request::routeIs('assets.*'))
            --kids-primary: #a855f7;
            @else
            --kids-primary: #fb923c;
            @endif
            --kids-bg: #ffffff;
            --kids-sidebar-text: #000000;
            --kids-muted: #6b7280;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--kids-bg);
            @if(Request::routeIs('characters.*'))
            background-image: 
                radial-gradient(at 0% 0%, rgba(59, 130, 246, 0.1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, rgba(59, 130, 246, 0.15) 0, transparent 50%),
                radial-gradient(at 50% 50%, rgba(59, 130, 246, 0.1) 0, transparent 70%),
                radial-gradient(at 0% 100%, rgba(59, 130, 246, 0.05) 0, transparent 50%);
            @elseif(Request::routeIs('assets.*'))
            background-image: 
                radial-gradient(at 0% 0%, rgba(168, 85, 247, 0.1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, rgba(168, 85, 247, 0.15) 0, transparent 50%),
                radial-gradient(at 50% 50%, rgba(168, 85, 247, 0.1) 0, transparent 70%),
                radial-gradient(at 0% 100%, rgba(168, 85, 247, 0.05) 0, transparent 50%);
            @else
            background-image: 
                radial-gradient(at 0% 0%, rgba(251, 146, 60, 0.1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, rgba(251, 146, 60, 0.15) 0, transparent 50%),
                radial-gradient(at 50% 50%, rgba(251, 146, 60, 0.1) 0, transparent 70%),
                radial-gradient(at 0% 100%, rgba(251, 146, 60, 0.05) 0, transparent 50%);
            @endif
            background-attachment: fixed;
            color: #1f2937;
            min-height: 100vh;
            margin: 0;
            display: flex;
        }

        #wrapper {
            display: flex;
            width: 100%;
            padding: 4rem;
        }

        /* Sidebar Styling */
        #sidebar-wrapper {
            width: 250px;
            padding-right: 2rem;
            flex-shrink: 0;
        }

        .sidebar-heading {
            font-family: 'Outfit', sans-serif;
            font-size: 0.85rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: #000000;
            margin-bottom: 2.5rem;
            font-weight: 800;
        }

        .category-link {
            display: block;
            color: #000000;
            text-decoration: none !important;
            padding: 0.6rem 0;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.2s ease;
            opacity: 0.7;
        }

        .category-link:hover, .category-link.active {
            opacity: 1;
            font-weight: 700;
            transform: translateX(5px);
        }

        /* Page Content Styling */
        #page-content-wrapper {
            flex-grow: 1;
        }

        /* Responsive */
        @media (max-width: 992px) {
            #wrapper {
                flex-direction: column;
                padding: 2rem;
            }
            #sidebar-wrapper {
                width: 100%;
                margin-bottom: 3rem;
                padding-right: 0;
            }
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">{{ Auth::user()->name }}</div>
            <div class="categories-list">
                <a href="{{ route('kids.dashboard') }}" class="category-link {{ Request::routeIs('kids.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('characters.index') }}" class="category-link {{ Request::routeIs('characters.*') ? 'active' : '' }}">Characters</a>
                <a href="{{ route('assets.index') }}" class="category-link {{ Request::routeIs('assets.*') ? 'active' : '' }}">Assets</a>
            </div>

        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
