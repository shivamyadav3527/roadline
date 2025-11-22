@extends('layouts.app')

@section('content')

<!-- TEAM HEADER -->
<section style="text-align:center; padding:50px 20px; background:#eef3f8;">
    <h2 class="team-header">
        Our Team
    </h2>
    <p style="font-size:18px; color:#555; max-width:700px; margin:0 auto;">
        Meet the professionals who drive <b>Aradhya Road Lines</b>  forward with expertise, passion, and dedication.
    </p>
</section>

<!-- TEAM MEMBERS SECTION -->
<section style="max-width:1200px; margin:40px auto; padding:0 20px; display:flex; flex-wrap:wrap; justify-content:center; gap:30px;">

    <!-- Team Member 1 -->
    <div style="background:#ffffff; width:300px; border-radius:12px; text-align:center; padding:25px; 
                box-shadow:0 6px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <img src="{{ asset('images/jolly.jpeg') }}"  loading="lazy"
             alt="Neeraj Jolly" 
             style="width:100px; height:120px; border-radius:50%; object-fit:cover; margin-bottom:15px;">

        <h3 style="color:#1a1f71; margin-bottom:5px; font-size:20px; font-weight:600;">Neeraj Jolly</h3>
        <b style="color:#777; font-size:14px; margin-bottom:15px;">Founder & Director</b>

        <p style="font-size:15px; color:#555; line-height:1.6;">
            With over 19 years of experience, he drives our logistics operations with strategic vision 
            and unwavering dedication, ensuring our services remain efficient and compliant.
        </p>
    </div>

    <!-- Team Member 2 -->
    <div style="background:#ffffff; width:300px; border-radius:12px; text-align:center; padding:25px; 
                box-shadow:0 6px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <img src="{{ asset('images/rishabh.jpeg') }}" loading="lazy"
             alt="Rishabh Madan" 
             style="width:120px; height:120px; border-radius:50%; object-fit:cover; margin-bottom:15px;">

        <h3 style="color:#1a1f71; margin-bottom:5px; font-size:20px; font-weight:600;">Rishabh Madan</h3>
        <b style="color:#777; font-size:14px; margin-bottom:15px;">Operations Head</b>

        <p style="font-size:15px; color:#555; line-height:1.6;">
            Leads day-to-day transportation operations, ensuring deliveries are executed safely, efficiently, 
            and on schedule, maintaining our reputation for reliability.
        </p>
    </div>

    <!-- Team Member 3 -->
    <div style="background:#ffffff; width:300px; border-radius:12px; text-align:center; padding:25px; 
                box-shadow:0 6px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <img src="{{ asset('images/shivammm.jpeg') }}" loading="lazy"
             alt="Shivam Yadav" 
             style="width:120px; height:120px; border-radius:50%; object-fit:cover; margin-bottom:15px;">

        <h3 style="color:#1a1f71; margin-bottom:5px; font-size:20px; font-weight:600;">Shivam Yadav</h3>
        <b style="color:#777; font-size:14px; margin-bottom:15px;">Marketing Lead</b>

        <p style="font-size:15px; color:#555; line-height:1.6;">
            Passionate marketing strategist and web creator, dedicated to promoting our brand, 
            connecting with our audience effectively, and enhancing our digital presence.
        </p>
    </div>

</section>

<!-- Styles -->
<style>
    /* Team Header Transition */
    .team-header {
        color: #1a1f71;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
        text-align: center;
        position: relative;
        display: inline-block;
        padding-bottom: 8px;
        transition: transform 0.3s, color 0.3s;
    }

    .team-header::after {
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

    .team-header:hover {
        transform: translateY(-3px);
        color: #0f144c;
    }

    .team-header:hover::after {
        width: 150px;
    }

    /* Team Member Hover Effect */
    section div:hover {
        transform: translateY(-5px);
        box-shadow:0 10px 20px rgba(0,0,0,0.15);
    }
</style>

@endsection
