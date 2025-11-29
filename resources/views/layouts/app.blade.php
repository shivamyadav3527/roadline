<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpeg')}}">
    <link rel="shortcut icon" href="{{ asset('favicon.jpeg')}}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All India Waste Management Company | UPPCB Certified | Hazardous Waste Experts</title>

    <meta name="description" 
        content="All India Waste Management Company is a UPPCB certified hazardous waste management provider offering disposal, recycling, transportation, biomedical waste handling, and industrial waste solutions across India. Reliable, eco-friendly, and government-approved waste management services.">

    <meta name="keywords" 
        content="waste management, waste management company,waste management company in kanpur, waste management company in UP(Uttar Pradesh), hazardous waste certified, UPPCB certified, hazardous waste disposal, industrial waste management, biomedical waste disposal, waste recycling services, waste transport company, eco-friendly waste solutions, India waste management">

    <meta name="robots" content="index, follow">
    <meta name="author" content="All India Waste Management Company in kanpur, UP">

    <!-- Open Graph for social SEO -->
    <meta property="og:title" content="All India Waste Management Company | UPPCB Certified">
    <meta property="og:description" content="Government-approved hazardous & non-hazardous waste management, recycling, and transportation services across India.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://allindiawastemanagementandtransport.com/">
    <meta property="og:image" content="https://allindiawastemanagementandtransport.com/images/new-logo.jpeg

    <!-- Canonical URL -->
    <link rel="canonical" href="https://allindiawastemanagementandtransport.com/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(90deg, #1a1f71, #0d144a);
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            z-index: 1000;
            color: white;
        }

        .header-left {
            max-width: 75%;
            overflow: hidden;
        }

        .logo-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 0px; /* shift logo slightly left */
            margin-right: 10px; /* shift logo slightly left */

        }

        .site-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: inline-block;
            font-weight: 700;
            color: #ffd700;
            font-size: 22px;        
            opacity: 0;
            transform: translateY(8px);
            animation: fadeSlideIn 0.6s ease-out forwards;
        }
        
        @keyframes fadeSlideIn {
            0% {
                opacity: 0;
                transform: translateY(8px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Desktop navigation */
        nav {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #ffd700;
        }

        .mobile-menu-icon {
            display: none; /* hidden on desktop */
            font-size: 26px;
            color: white;
            cursor: pointer;
        }

        main {
            margin-top: 100px;
            flex: 1;
            display: flex;
            flex-direction: column;

        }

        footer {
            background: #1a1f71;
            color: white;
            padding: 10px;
            text-align: center;
        }

        /* ==============================
           TABLET VIEW (768px - 992px)
           ============================== */
        @media (max-width: 992px) {

            nav {
                display: none; /* hide nav on tablet initially */
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                flex-direction: column;
                background: #1a1f71;
                text-align: center;
                padding: 15px 0;
                z-index: 999;
            }

            nav.active {
                display: flex;
            }

            .mobile-menu-icon {
                display: block;
                margin-left: 15px;
            }

            header {
                padding: 15px 20px;
            }

            .header-left {
                gap: 12px; /* spacing between logo & title */
                flex: 1;
            }

            .site-title {
                font-size: 18px;
            }
        }

        /* ==============================
           MOBILE VIEW (<768px)
           ============================== */
        @media (max-width: 768px) {
            header {
                padding: 12px 20px;
            }

            .header-left {
                gap: 10px;
                flex: 1;
            }

            .site-title {
                white-space: normal !important;
                font-size: 13px;
                max-width: 190px; /* forces 2-line wrap */

            }

            .mobile-menu-icon {
                display: block !important;
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 2000;
            }

            nav {
                display: none;
            }

            nav.active {
                display: flex;
            }
        }
        .active-link {
            color: #ffd700 !important;
            font-weight: 700;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 3px;
        }
    </style>
</head>

<body>

    <header id="mainHeader">
        <div class="header-left">
            <a href="{{ url('/') }}" style="display:flex; align-items:center; text-decoration:none;">
                <img src="{{ asset('images/new-logo.jpeg') }}" class="logo-img" alt="Logo">
                <h1 class="site-title">All India Waste Management And Transport</h1>
            </a>
        </div>

        <!-- Hamburger Icon -->
        <div class="mobile-menu-icon" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </div>

        <!-- Navigation -->
        <nav id="navMenu">
            <a class="nav-link {{ Request::is('/') ? 'active-link' : '' }}" href="{{ url('/') }}">Home</a>

            <a class="nav-link {{ Request::is('services') ? 'active-link' : '' }}" 
            href="{{ url('/services') }}">Services</a>

            <a class="nav-link {{ Request::is('permits') ? 'active-link' : '' }}" 
            href="{{ url('/permits') }}">Permits & Recognitions</a>

            <a class="nav-link {{ Request::is('about') ? 'active-link' : '' }}" 
            href="{{ url('/about') }}">About Us</a>

            <a class="nav-link {{ Request::is('team') ? 'active-link' : '' }}" 
            href="{{ url('/team') }}">Our Team</a>

            <a class="nav-link {{ Request::is('contact') ? 'active-link' : '' }}" 
            href="{{ url('/contact') }}">Contact Us</a>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>

    <footer style="color:white; padding:20px 10px; text-align:center;">
        <p style="margin:0; font-size:14px;">&copy; 2025 All India Waste Management And Transport</p>
        <div style="margin-top:10px; display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:10px; font-size:14px;">
            <span>Email: <a href="mailto:allindiawastemanagement@gmail.com"
                    style="color:white; text-decoration:underline;">allindiawastemanagement@gmail.com</a></span> |
            <span>Phone: <a href="tel:+918318612573" style="color:white; text-decoration:underline;">+91 8318612573</a></span> |
            <span>Follow us:</span>
            <a href="https://www.facebook.com/profile.php?id=61584134677581" target="_blank" style="color:white; font-size:18px;"><i
                    class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/allindiawastemangement?igsh=c21pdzF1b2cyYXF2" target="_blank" style="color:white; font-size:18px;"><i
                    class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            document.getElementById("navMenu").classList.toggle("active");
        }

        // Shrink header on scroll
        window.addEventListener("scroll", function () {
            const header = document.getElementById("mainHeader");
            if (window.scrollY > 50) {
                header.style.padding = "10px 20px";
            } else {
                header.style.padding = "18px 40px";
            }
        });
    </script>

</body>

</html>
