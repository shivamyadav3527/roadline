@extends('layouts.app')

@section('content')

<!-- Image Slider Section -->
<section id="slider" class="slider-section">
    <div class="slides" style="display:flex; transition: transform 1s ease-in-out;">
        <img src="{{ asset('images/haz3.jpeg') }}" loading="lazy" alt="Slide 1" class="slide-img">
        <img src="{{ asset('images/haz4.jpeg') }}" loading="lazy" alt="Slide 2" class="slide-img">
        <img src="{{ asset('images/haz1.jpeg') }}" loading="lazy" alt="Slide 4" class="slide-img">
        <img src="{{ asset('images/haz2.jpeg') }}" loading="lazy" alt="Slide 5" class="slide-img">
    </div>

    <!-- Navigation Arrows -->
    <button id="prev" class="slider-btn">&#10094;</button>
    <button id="next" class="slider-btn">&#10095;</button>
</section>

<!-- About Us Section -->
<section id="about-us" style="padding:45px; max-width:90%; margin:0 auto;">
    
    <!-- Success Message -->
    @if(session('success'))
        <div style="background:#e8f9f1; color:#1a1f71; padding:15px 20px; border-left:5px solid #1a1f71; margin:20px 0; border-radius:6px; font-weight:500;">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Transitional Header -->
    <h1 class="home-header">
        Welcome to Aradhya Road Lines
    </h1>

    <p style="font-size:17px; line-height:1.8; color:#333; margin-bottom:20px;">
        At Aradhya Road Lines, we specialize in the safe and efficient transport of hazardous and non-hazardous waste. 
        Our mission is to provide environmentally responsible solutions while ensuring regulatory compliance and safety for our 
        <a href="#clients" style="color:#1a1f71; font-weight:600; text-decoration:underline; cursor:pointer;">
            clients
        </a>
        and communities.
    </p>


    <p style="font-size:17px; line-height:1.8; color:#333;">
        Proper <a href="{{ route('waste.management') }}" style="color:#1a1f71; font-weight:bold;">
        waste management</a> is critical to protecting public health and the environment. Our experienced team uses advanced techniques and industry best practices to handle, transport, and dispose of waste responsibly. By partnering with us, businesses can streamline their waste management processes, reduce environmental impact, and stay fully compliant with government regulations.
    </p>

    <!-- Request Pickup Button -->
    <div style="text-align:center; margin:20px 0;">
        <button onclick="openPickupForm()" 
            style="padding:12px 25px; font-size:18px; background:#1a1f71; color:white; border:none; border-radius:8px; cursor:pointer;">
            Request Pickup
        </button>
    </div>

</section>

<!-- Hazardous vs Non-Hazardous Section -->
<section id="hazard" style="padding:10px 20px; max-width:90%; margin:0 auto;">

    <h2 style="color:#1a1f71; font-size:32px; font-weight:700; margin-bottom:15px;">
        Differences Between Hazardous and Non-Hazardous Material
    </h2>

    <div style="line-height:1.8; font-size:17px; color:#333; padding-left:10px;">

        <h3 style="color:#ffd700; font-size:22px; margin-bottom:10px;"><a href="{{ route('nonhazardous.waste') }}" style="color:#ffd700; font-weight:bold;">
    Non-Hazardous Waste</a></h3>
        <p>
            Non-hazardous waste does not pose a threat to human health or the environment. Examples include 
            general garbage, sludge, and residual waste from industries such as construction, mining, agriculture, 
            and municipal services.
        </p>

        <h3 style="color:#ffd700; font-size:22px; margin-top:20px; margin-bottom:10px;"><a href="{{ route('hazardous.waste') }}" style="color:#ffd700; font-weight:bold;">
    Hazardous Waste</a></h3>
        <p>
            Hazardous waste can be dangerous to both health and the environment. It includes:
        </p>

        <ul style="padding-left:20px; list-style-position: inside; line-height:1.6;">
            <li>Listed Waste (F-list, K-list, P-list, U-list)</li>
            <li>Characterized Waste (Ignitable, Corrosive, Reactive, Toxic)</li>
            <li>Universal Waste (Batteries, lamps, equipment containing mercury, pesticides)</li>
            <li>Mixed Waste (Hazardous combined with radioactive materials)</li>
            <li>E-Waste (electronic waste such as phones, computers, TVs, etc.)</li>
        </ul>

    </div>

</section>



<!-- Plastic Waste Section -->
<section id="plastic" style="padding:45px; max-width:90%; margin:0 auto;">
    <h2 style="color:#1a1f71; font-size:32px; font-weight:700; margin-bottom:20px;">
        Plastic Waste
    </h2>
    <p style="font-size:17px; line-height:1.8; color:#333;">
        Plastic waste is one of the most pressing environmental challenges. In India, approximately 15,000 tons of plastic waste are generated daily, of which only 60% is recycled. The remaining 40% is either dumped or burned, contributing to significant air and land pollution. Proper collection, recycling, and disposal are essential to reduce environmental impact.
    </p>
    <img src="{{ asset('images/plastic.jpg') }}" loading="lazy"
         alt="Plastic Waste" 
         style="width:100%; margin-top:20px; border-radius:10px; box-shadow:0 4px 8px rgba(0,0,0,0.1);">
</section>


<section id="clients" style="padding:50px 15px; max-width:1200px; margin:0 auto; text-align:center;">

    <h2 style="color:#1a1f71; font-size:32px; font-weight:700; margin-bottom:20px;">
        Our Esteemed Clients
    </h2>

    <p style="font-size:17px; color:#555; margin-bottom:40px;">
        We are proud to partner with leading companies in diverse industries, providing reliable waste management solutions.
    </p>

    <div class="clients-container" style="display:flex; flex-wrap:wrap; gap:30px; justify-content:center;">

        <div class="client-card">
            <img src="{{ asset('images/pepsi.png') }}" alt="PepsiCo">
            <p>PepsiCo</p>
        </div>

        <div class="client-card">
            <img src="{{ asset('images/tatasteel.png') }}" alt="Tata Steel">
            <p>Tata Steel</p>
        </div>

        <div class="client-card">
            <img src="{{ asset('images/moon.jpg') }}" alt="Moon Beverages">
            <p>Moon Beverages</p>
        </div>

        <div class="client-card">
            <img src="{{ asset('images/bharato.jpeg') }}" alt="Bharat Oil & Waste Management">
            <p>Bharat Oil & Waste Management</p>
        </div>

        <div class="client-card">
            <img src="{{ asset('images/parle.jpg') }}" alt="Parle Agro">
            <p>Parle Agro</p>
        </div>

    </div>

</section>




@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const successBox = document.querySelector('[style*="background:#e8f9f1"]');

        if (successBox) {
            // Close modal if open
            closePickupForm();

            // Scroll to success message
            setTimeout(() => {
                window.scrollTo({
                    top: successBox.offsetTop - 100,
                    behavior: 'smooth'
                });
            }, 300);
        }
    });
</script>
@endif


<!-- Popup Form Modal -->
<div id="pickupFormModal" class="pickup-modal">
    <div class="pickup-modal-content">

        <span class="pickup-close" onclick="closePickupForm()">&times;</span>

        <h2 style="text-align:center; color:#1a1f71; margin-bottom:20px;">Request Waste Pickup</h2>

        <form action="{{ route('pickup.submit') }}" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" name="name" required>

            <label>Phone</label>
            <input type="text" name="phone" required>

            <label>Email</label>
            <input type="email" name="email">

            <label>Pickup Address</label>
            <textarea name="address" required></textarea>

            <label>Waste Type</label>
            <select name="waste_type" required>
                <option value="commercial">Commercial Waste</option>
                <option value="chemical">Chemical Waste</option>
                <option value="hazardous">Hazardous Waste</option>
                <option value="plastic">Plastic Waste</option>
                <option value="other">Other</option>
            </select>

            <label>Description (Optional)</label>
            <textarea name="description"></textarea>

            <button type="submit" class="pickup-submit-btn">Submit Request</button>
        </form>

    </div>
</div>



<!-- Styles -->
<style>

    .client-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px; /* consistent height for all logos */
        padding: 10px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .client-logo img.client-img {
        max-height: 80px; /* ensures logos fit inside container */
        width: auto;
        object-fit: contain;
        filter: grayscale(0%);
        transition: all 0.3s;
    }

    .client-logo img.client-img:hover {
        transform: scale(1.05);
        filter: brightness(1.1);
    }


    /* Modal Background */
    .pickup-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        padding: 20px;
        overflow-y: auto;
    }

    /* Modal Box */
    .pickup-modal-content {
        background: #fff;
        width: 90%;
        max-width: 500px;
        margin: 40px auto;
        padding: 25px;
        border-radius: 12px;
        max-height: 85vh;
        overflow-y: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        animation: popUp 0.25s ease-out;
        position: relative;
    }

    @keyframes popUp {
        from { transform: scale(0.9); opacity: 0; }
        to   { transform: scale(1); opacity: 1; }
    }

    .pickup-close {
        position: absolute;
        right: 15px;
        top: 10px;
        font-size: 28px;
        cursor: pointer;
        color: #444;
    }

    .pickup-modal-content form input,
    .pickup-modal-content form textarea,
    .pickup-modal-content form select {
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 15px;
    }

    .pickup-submit-btn {
        width: 100%;
        padding: 12px;
        background: #1a1f71;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 17px;
        cursor: pointer;
    }

    /* Header Animation */
    .home-header {
        color: #1a1f71;
        font-size: 36px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 8px;
        transition: transform 0.3s, color 0.3s;
    }

    .home-header::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(to right, #1a1f71, #ffd700);
        border-radius: 2px;
        transition: width 0.3s ease-in-out;
    }

    .home-header:hover {
        transform: translateY(-3px);
        color: #0f144c;
    }

    .home-header:hover::after {
        width: 500px;
    }

    /* Slider */
    .slide-img {
        width:100%;
        flex-shrink:0;
        height:450px;
        object-fit:cover;
    }

    .slider-btn {
        position:absolute;
        top:50%;
        transform:translateY(-50%);
        background:rgba(0,0,0,0.5);
        color:white;
        border:none;
        padding:10px;
        cursor:pointer;
        border-radius:50%;
        font-size:24px;
        z-index:10;
    }

    .slider-section {
        max-width: 1200px;
        margin: 20px auto 50px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    #prev { left:10px; }
    #next { right:10px; }

    @media(max-width:768px){
        .slide-img { height:300px; }
    }

    .pickup-submit-btn.loading {
        opacity: 0.7;
        pointer-events: none;
    }

    .clients-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .client-card {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        width: 180px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .client-card img {
        max-height: 80px;
        width: auto;
        object-fit: contain;
        margin-bottom: 12px;
        transition: transform 0.3s;
    }

    .client-card p {
        font-weight: 500;
        color: #1a1f71;
        font-size: 15px;
    }

    .client-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    @media (max-width:768px){
        .client-card {
            width: 45%;
        }
    }

    @media (max-width:480px){
        .client-card {
            width: 90%;
        }
    }

</style>


<!-- JS -->
<script>
    const slidesContainer = document.querySelector('.slides');
    const slides = document.querySelectorAll('.slide-img');
    const totalSlides = slides.length;
    let index = 0;

    function showSlide(i){
        slidesContainer.style.transform = `translateX(-${i * 100}%)`;
    }

    function nextSlide(){
        index = (index + 1) % totalSlides;
        showSlide(index);
    }

    function prevSlide(){
        index = (index - 1 + totalSlides) % totalSlides;
        showSlide(index);
    }

    let slideInterval = setInterval(nextSlide, 3000);

    document.getElementById('next').addEventListener('click', () => {
        nextSlide();
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 3000);
    });

    document.getElementById('prev').addEventListener('click', () => {
        prevSlide();
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 3000);
    });

    // Add loading state to submit button
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('.pickup-modal-content form');
        const btn = document.querySelector('.pickup-submit-btn');

        form.addEventListener('submit', function () {
            btn.disabled = true;
            btn.innerHTML = "Sending...";
            btn.style.opacity = "0.7";
            btn.style.cursor = "not-allowed";
        });
    });

    // Pickup modal
    function openPickupForm(){
        document.getElementById("pickupFormModal").style.display = "block";
    }

    function closePickupForm(){
        document.getElementById("pickupFormModal").style.display = "none";
    }

    // Close when clicking outside
    window.onclick = function(event){
        let modal = document.getElementById("pickupFormModal");
        if(event.target === modal){
            modal.style.display = "none";
        }
    }
</script>

@endsection
