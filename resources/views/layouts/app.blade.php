<!-- Responsive version of your layout with improved device-specific handling -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Solutions Waste Management</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height:1.6; display:flex; flex-direction:column; min-height:100vh; }

        header {
            position:fixed;
            top:0;
            left:0;
            width:100%;
            background:linear-gradient(90deg, #1a1f71, #0d144a);
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            transition:all 0.3s ease;
            z-index:1000;
            color:white;
        }

        .header-left {
            display:flex;
            align-items:center;
            gap:15px;
        }

        .logo-img {
            width:60px;
            height:60px;
            object-fit:cover;
            border-radius:10px;
        }

        nav {
            display:flex;
            gap:30px;
        }

        .nav-link {
            color:white;
            text-decoration:none;
            font-size:16px;
            font-weight:500;
            position:relative;
            transition:0.3s;
        }

        .nav-link:hover { color:#ffd700; }

        main { margin-top:80px; flex:1; }

        footer {
            background:#1a1f71;
            color:white;
            padding:10px;
            text-align:center;
        }

        /* Responsive: Tablets */
        @media(max-width:992px){
            nav { gap:15px; }
            .nav-link { font-size:14px; }
            header { padding:15px 20px; }
            .logo-img { width:50px; height:50px; }
        }

        /* Responsive: Mobile */
        @media(max-width:768px){
            header { flex-direction:column; gap:10px; padding:15px; }
            nav { flex-wrap:wrap; gap:10px; justify-content:center; }
            .nav-link { font-size:14px; }
            main { margin-top:200px; }
        }

        /* Small mobile devices */
        @media(max-width:480px){
            .logo-img { width:45px; height:45px; }
            nav { gap:8px; }
            .nav-link { font-size:12px; }
            main { margin-top:220px; }
        }
    </style>
</head>
<body>

<header id="mainHeader">
    <div class="header-left">
        <a href="{{ url('/') }}" style="display:flex; align-items:center; text-decoration:none;">
            <img src="{{ asset('images/logo2.avif') }}" class="logo-img" alt="Logo" style="margin-right:10px;">
            <div style="display:flex; flex-direction:column;">
                <span style="font-size:22px; font-weight:700; color:#ffd700;">
                    Eco Solutions Waste Management
                </span>
            </div>
        </a>
    </div>

    <nav>
        <a class="nav-link" href="{{ url('/') }}">Home</a>
        <a class="nav-link" href="{{ url('/services') }}">Services</a>
        <a class="nav-link" href="{{ url('/permits') }}">Permits & Forms</a>
        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
        <a class="nav-link" href="{{ url('/team') }}">Our Team</a>
        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
    </nav>
</header>

<main>
    @yield('content')
</main>


<footer style=" color:white; padding:20px 10px; text-align:center; font-family:Arial, sans-serif;">
    <p style="margin:0; font-size:14px;">&copy; 2025 Eco Solutions Waste Management</p>
    
    <div style="margin-top:10px; display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:10px; font-size:14px;">
        <span>Email: <a href="mailto:ecosolutionwastemanangement@gmail.com" style="color:white; text-decoration:underline;">ecosolutionwastemanangement@gmail.com</a></span> |
        <span>Phone: <a href="tel:+918318612573" style="color:white; text-decoration:underline;">+91 8318612573</a></span> |
        <span>Follow us:</span>
        <a href="https://facebook.com" target="_blank" style="color:white; font-size:18px; margin:0 5px;"><i class="fab fa-facebook"></i></a>
        <a href="https://instagram.com" target="_blank" style="color:white; font-size:18px; margin:0 5px;"><i class="fab fa-instagram"></i></a>
    </div>
</footer>



<script>
window.addEventListener("scroll", function() {
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
