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
            --kids-primary: #4f46e5;
            --kids-secondary: #6366f1;
            --kids-bg: #4f46e5;
            --kids-text: #ffffff;
            --kids-card-bg: #ffffff;
            --kids-card-text: #1f2937;
            --kids-muted: #9ca3af;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--kids-bg);
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%);
            background-attachment: fixed;
            color: var(--kids-text);
            min-height: 100vh;
            margin: 0;
            display: flex;
        }

        #wrapper {
            display: flex;
            width: 100%;
            padding: 3rem;
        }

        /* Sidebar Styling */
        #sidebar-wrapper {
            width: 280px;
            padding-right: 2rem;
            flex-shrink: 0;
        }

        .sidebar-heading {
            font-family: 'Outfit', sans-serif;
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .category-link {
            display: block;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none !important;
            padding: 0.5rem 0;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .category-link:hover, .category-link.active {
            color: white;
            font-weight: 600;
        }

        .free-delivery-box {
            margin-top: 3rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .free-delivery-box h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .free-delivery-box p {
            font-size: 0.8rem;
            opacity: 0.7;
            line-height: 1.4;
            margin: 0;
        }

        /* Page Content Styling */
        #page-content-wrapper {
            flex-grow: 1;
        }

        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
        }

        .breadcrumb-custom {
            font-family: 'Outfit', sans-serif;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
        }

        .breadcrumb-custom a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
        }

        .breadcrumb-custom i {
            margin: 0 0.75rem;
            font-size: 0.6rem;
            opacity: 0.4;
        }

        .breadcrumb-custom span {
            color: white;
            font-weight: 600;
        }

        .filters {
            display: flex;
            gap: 2rem;
        }

        .filter-item {
            font-family: 'Outfit', sans-serif;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .main-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            margin-bottom: 2rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            #wrapper {
                flex-direction: column;
                padding: 1.5rem;
            }
            #sidebar-wrapper {
                width: 100%;
                margin-bottom: 2rem;
                padding-right: 0;
            }
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">Categories</div>
            <div class="categories-list">
                <a href="#" class="category-link active">All</a>
                <a href="#" class="category-link">Men</a>
                <a href="#" class="category-link">Home Accessories</a>
                <a href="#" class="category-link">Luggage</a>
                <a href="#" class="category-link">Outdoor Shoes</a>
                <a href="#" class="category-link">Kids & Baby</a>
                <a href="#" class="category-link">Camping & Hiking</a>
                <a href="#" class="category-link">Water Sports</a>
                <a href="#" class="category-link">Audio & HiFi</a>
                <a href="#" class="category-link">Toys & Games</a>
            </div>

            <div class="free-delivery-box">
                <h4>Free Delivery</h4>
                <p>Designers are meant to be loved, not to be understood.</p>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="top-nav">
                <div class="breadcrumb-custom">
                    <a href="#">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="#">Furniture</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Hallway</span>
                </div>

                <div class="filters">
                    <div class="filter-item">Price <i class="fas fa-sort"></i></div>
                    <div class="filter-item">New <i class="fas fa-sort"></i></div>
                </div>
            </div>

            <div class="main-title">New</div>

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
