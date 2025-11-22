@extends('layouts.app')

{{-- Inline CSS for this page only --}}
<style>
    .section-title {
        color: #1a1f71;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 25px;
        text-align: center;     
        position: relative;
        display: inline-block;
        padding-bottom: 8px;
    }

    .section-title::after {
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

    .section-title:hover::after {
        width: 140px;
    }
</style>

@section('content')

<!-- About Us Section -->
<section id="about" style="padding:30px; max-width:90%; margin:0 auto; line-height:1.8; font-size:17px; color:#333;">
    
    <div style="text-align: center; width: 100%;">
        <h2 class="section-title">About Us</h2>
    </div>
    <p>
        Established in 2006 in Kanpur, India, <strong>Eco Solutions Waste Management</strong> has been a trusted provider 
        of comprehensive waste transportation and management services. Under the guidance of our Founder & Director, 
        <strong>Mr. Neeraj Jolly</strong>, we have consistently grown, delivering reliable and efficient solutions 
        to our clients.
    </p>

    <p>
        With years of experience and strong industry expertise, our team ensures safe and timely transportation of all 
        types of waste, including hazardous and non-hazardous materials. We combine a fully developed fleet of commercial 
        vehicles, a skilled and dedicated workforce, and modern operational practices to offer cost-effective and 
        compliant solutions.
    </p>

    <p>
        At <strong>Eco Solutions Waste Management</strong>, our mission is to provide environmentally responsible 
        waste management services while maintaining the highest standards of safety, efficiency, and client satisfaction. 
        We are committed to helping businesses stay compliant with regulations while promoting sustainable practices in 
        waste transportation and disposal.
    </p>

    <div style="
        max-width: 700px;
        margin: 40px auto;
        text-align: center;
    ">
        <img 
            src="/images/about4.jpg" 
            alt="Green Earth"
            style="
                width: 100%;
                height: auto;
                border-radius: 12px;
                box-shadow: 0px 4px 18px rgba(0,0,0,0.15);
            "
            loading="lazy"
        >
    </div>

</section>
@endsection
