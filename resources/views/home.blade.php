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
    
    <!-- Transitional Header -->
    <h1 class="home-header">
        Welcome to Aradhya Road Lines
    </h1>

    <p style="font-size:17px; line-height:1.8; color:#333; margin-bottom:20px;">
        At Aradhya Road Lines, we specialize in the safe and efficient transport of hazardous and non-hazardous waste. Our mission is to provide environmentally responsible solutions while ensuring regulatory compliance and safety for our clients and communities.
    </p>

    <p style="font-size:17px; line-height:1.8; color:#333;">
        Proper waste management is critical to protecting public health and the environment. Our experienced team uses advanced techniques and industry best practices to handle, transport, and dispose of waste responsibly. By partnering with us, businesses can streamline their waste management processes, reduce environmental impact, and stay fully compliant with government regulations.
    </p>
</section>

<!-- Hazardous vs Non-Hazardous Section -->
<section id="hazard" style="padding:50px; max-width:90%; margin:0 auto;">
    <h2 style="color:#1a1f71; font-size:32px; font-weight:700; margin-bottom:25px;">
        Differences Between Hazardous and Non-Hazardous Material
    </h2>

    <div style="margin-top:20px; line-height:1.8; font-size:17px; color:#333;">
        <h3 style="color:#ff8800; font-size:22px; margin-bottom:10px;">Non-Hazardous Waste</h3>
        <p>
            Non-hazardous waste does not pose a threat to human health or the environment. Examples include 
            general garbage, sludge, and residual waste from industries such as construction, mining, agriculture, 
            and municipal services.
        </p>

        <h3 style="color:#ff8800; font-size:22px; margin-top:20px; margin-bottom:10px;">Hazardous Waste</h3>
        <p>
            Hazardous waste can be dangerous to both health and the environment. It includes:
        </p>
        <ul style="margin-left:30px; margin-top:10px; line-height:1.6;">
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

<!-- Styles -->
<style>
    /* Home/About Header */
    .home-header {
        color: #1a1f71;
        font-size: 36px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 25px;
        position: relative;
        display: block;
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

    /* Slider Styles */
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
</style>

<!-- JS for Slider -->
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
</script>

@endsection
