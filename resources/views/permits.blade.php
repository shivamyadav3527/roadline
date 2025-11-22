@extends('layouts.app')

@section('content')

<style>
    /* Permits Header */
    .permits-header {
        color: #1a1f71;
        font-size: 34px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 20px;
        position: relative;
        display: block;
        padding-bottom: 8px;
        transition: transform 0.3s, color 0.3s;
    }

    .permits-header::after {
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

    .permits-header:hover {
        transform: translateY(-3px);
        color: #0f144c;
    }

    .permits-header:hover::after {
        width: 250px;
    }

    /* Hover Animation for Permits Card */
    .permit-card {
        flex: 1 1 45%;
        background: #f7f7f7;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
        margin-bottom: 30px;
    }

    .permit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
</style>

<!-- PERMITS PAGE -->
<section style="padding:50px 20px; max-width:1100px; margin:0 auto;">

    <!-- Page Header -->
    <h2 class="permits-header">
        Permits & Forms
    </h2>

    <p style="font-size:17px; line-height:1.8; text-align:center; max-width:850px; margin:0 auto 40px;">
        Below are the official permits and authorization documents required for transporting 
        hazardous and non-hazardous waste. You can also view our fleet of permitted vehicles and 
        download the necessary forms for compliance.
    </p>

    <!-- Permits Images Section -->
    <div>
        <h3 style="color:#1a1f71; margin-bottom:20px; font-size:26px;">Our Permits</h3>

        <div class="permit-card">
            <h4 style="color:#ffd700; font-size:18px; margin-bottom:15px; font-weight:600;">
                Hazardous Waste Transport Permit
            </h4>
            <iframe src="{{ asset('pdfs/permit.pdf') }}" 
                    style="width:100%; height:600px; border-radius:10px; border:none;">
            </iframe>
        </div>

    </div>

    <!-- Vehicles Table -->
    <div style="margin-bottom:50px;">
        <h3 style="color:#1a1f71; margin-bottom:20px; font-size:26px;">Vehicles With Valid Permits</h3>
        <table style="width:100%; border-collapse:collapse; font-size:17px; text-align:left;">
            <thead>
                <tr style="background:#1a1f71; color:white;">
                    <th style="padding:14px;">#</th>
                    <th style="padding:14px;">Vehicle Number</th>
                    <th style="padding:14px;">Permit Validity</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom:1px solid #ccc;">
                    <td style="padding:12px;">1</td>
                    <td style="padding:12px;">UP78 XY 1234</td>
                    <td style="padding:12px;">Valid till 2026</td>
                </tr>
                <tr style="border-bottom:1px solid #ccc;">
                    <td style="padding:12px;">2</td>
                    <td style="padding:12px;">UP78 AB 5678</td>
                    <td style="padding:12px;">Valid till 2027</td>
                </tr>
                <tr style="border-bottom:1px solid #ccc;">
                    <td style="padding:12px;">3</td>
                    <td style="padding:12px;">UP78 CD 7788</td>
                    <td style="padding:12px;">Valid till 2028</td>
                </tr>
            </tbody>
        </table>
    </div>

</section>

@endsection
