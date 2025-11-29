@extends('layouts.app')

@section('content')

<style>
    /* Services Header with animated underline */
    .services-header {
        color: #1a1f71;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;     
        display: block;
        position: relative;
        padding-bottom: 8px;
        transition: transform 0.3s, color 0.3s;
    }

    .services-header::after {
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

    .services-header:hover::after {
        width: 160px;
    }

    .services-header:hover {
        transform: translateY(-3px);
        color: #0f144c;
    }

    /* Service cards hover effect */
    .service-card {
        position: relative;
        width: 450px;
        height: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .service-card div {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
        color: white;
        transition: background 0.3s;
    }

</style>

<!-- Services Section -->
<section id="services" style="padding:30px 20px; max-width:1200px; margin:0 auto; font-size:17px; line-height:1.8; color:#333;">

    <h2 class="services-header">
        Our Services
    </h2>

    <p>
        Transportation is the backbone of business growth, and at <strong>Aradhya Road Lines</strong>, 
        we provide secure, compliant, and efficient transportation solutions across India — 
        specializing in both <a href="{{ route('hazardous.waste') }}" style="font-weight:bold;">
    hazardous</a> and <a href="{{ route('nonhazardous.waste') }}" style="font-weight:bold;">
    non-hazardous</a> waste management.
    </p>

    <!-- WHAT WE TRANSPORT -->
    <h3 style="margin-top:40px; color:#1a1f71; font-size:24px;">What We Transport</h3>
    <ul style="margin-top:15px; padding-left:25px;">
        <li>Bulk Liquid Transport</li>
        <li>Sludges & Solids Transport</li>
        <li>Containerized Wastes</li>
        <li>Construction & Demolition Waste</li>
        <li>Packaged Waste / Non-Bulk Containers</li>
        <li>Hazardous Waste</li>
        <li>Used Oil Reclamation</li>
    </ul>

    <!-- HAZARDOUS VS NON-HAZARDOUS WASTE IMAGES -->
    <section style="display:flex; flex-wrap:wrap; gap:30px; justify-content:center; margin-top:40px;">
        <!-- Hazardous Waste -->
        <div class="service-card">
            <img src="{{ asset('images/plastic.jpg') }}" alt="Hazardous Waste" style="width:100%; height:100%; object-fit:cover;">
            <div style="background: rgba(0,0,0,0.5);">
                <h4 style="font-size:26px; margin-bottom:10px; font-weight:700;">Hazardous Waste</h4>
                <p style="font-size:16px;">Waste that poses a threat to health and the environment, including ignitable, corrosive, reactive, toxic, universal, and e-waste.</p>
            </div>
        </div>

        <!-- Non-Hazardous Waste -->
        <div class="service-card">
            <img src="{{ asset('images/nonhaza3.jpg') }}" alt="Non-Hazardous Waste" style="width:100%; height:100%; object-fit:cover;">
            <div style="background: rgba(0,0,0,0.3);">
                <h4 style="font-size:26px; margin-bottom:10px; font-weight:700;">Non-Hazardous Waste</h4>
                <p style="font-size:16px;">Waste that does not pose a threat to health or the environment. Includes garbage, sludge, and residual waste from industries.</p>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <h3 style="margin-top:50px; color:#1a1f71; font-size:24px;">Why Choose Us?</h3>
    <ul style="margin-top:15px; padding-left:25px;">
        <li>Specialized tankers and trucks designed for every type of waste</li>
        <li>Full compliance with national & international environmental regulations</li>
        <li>Expert team of trained and certified drivers</li>
        <li>Flexible logistics for one-time or long-term contracts</li>
        <li>On-time delivery with transparent communication</li>
    </ul>

    <!-- OUR PROCESS -->
    <h3 style="margin-top:50px; color:#1a1f71; font-size:24px;">Our Process</h3>
    <ul style="margin-top:15px; padding-left:25px;">
        <li><strong>Consultation & Planning:</strong> Understanding waste type and transport requirements.</li>
        <li><strong>Route & Vehicle Planning:</strong> Choosing the safest and most efficient route.</li>
        <li><strong>Loading & Safety Checks:</strong> Secure and regulation-compliant loading.</li>
        <li><strong>Transport:</strong> Continuous monitoring and safe transit.</li>
        <li><strong>Unloading & Documentation:</strong> Complete paperwork and safe delivery.</li>
    </ul>

    <!-- INDUSTRIES -->
    <h3 style="margin-top:50px; color:#1a1f71; font-size:24px;">Industries We Serve</h3>
    <ul style="margin-top:15px; padding-left:25px;">
        <li>Chemical & Pharmaceutical</li>
        <li>Manufacturing & Industrial Plants</li>
        <li>Oil & Petroleum Industry</li>
        <li>Construction & Demolition</li>
        <li>Environmental & Waste Management Companies</li>
    </ul>

    <!-- GET IN TOUCH -->
    <h3 style="margin-top:50px; color:#1a1f71; font-size:24px;">Get in Touch</h3>
    <p style="margin-top:15px;">
        Want to know more or get a quote? Our expert team is ready to provide a customized transport solution tailored to your needs. 
        <a href="{{ url('/contact') }}" style="color:#1a1f71; font-weight:600; text-decoration:underline;">Contact us today</a>.
    </p>

</section>

@endsection
