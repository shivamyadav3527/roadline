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

    /* PCB Certification Highlight */
    .pcb-cert {
        color: #1a1f71;
        font-weight: 700;
        background: #e8f9f1;
        border-left: 5px solid #1a1f71;
        padding: 15px 20px;
        border-radius: 6px;
        margin: 25px 0 40px;
        text-align: center;
        font-size: 17px;
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

    /* Vehicles Table Styling */
    .vehicles-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 17px;
        text-align: center;
        margin-top: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        border-radius: 8px;
        overflow: hidden;
    }

    .vehicles-table thead tr {
        background: #1a1f71;
        color: white;
    }

    .vehicles-table th, 
    .vehicles-table td {
        padding: 14px;
        border-bottom: 1px solid #ccc;
    }

    .vehicles-table th {
        font-weight: 600;
        text-align: center;
    }

    .vehicles-table td {
        font-weight: 500;
        color: #333;
    }

    .vehicles-table tbody tr:hover {
        background: #f1f1f1;
    }

    /* Permits Cards Container */
    .permits-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
        margin-bottom: 50px;
    }

    .permit-card iframe {
        width: 100%;
        height: 500px;
        border-radius: 10px;
        border: none;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .permit-card {
            flex: 1 1 100%;
        }

        .permit-card iframe {
            height: 400px;
        }

        .vehicles-table th, .vehicles-table td {
            padding: 12px;
        }

        .permits-header {
            font-size: 28px;
        }
    }

    @media (max-width: 480px) {
        .vehicles-table th, .vehicles-table td {
            font-size: 14px;
            padding: 10px;
        }

        .permits-header {
            font-size: 24px;
        }
    }

</style>

<!-- PERMITS PAGE -->
<section style="padding:50px 20px; max-width:1100px; margin:0 auto;">

    <!-- Page Header -->
    <h2 class="permits-header">
        Permits & Forms
    </h2>

    <!-- PCB Certification Reference -->
    <div class="pcb-cert">
        <strong>PCB Certified:</strong> Reference Number <strong>29486/UPPCB</strong>
    </div>

    <p style="font-size:17px; line-height:1.8; text-align:center; max-width:850px; margin:0 auto 40px;">
        Below are the official permits and authorization documents required for transporting 
        hazardous and non-hazardous waste. You can also view our fleet of permitted vehicles and 
        download the necessary forms for compliance.
    </p>

    <!-- Permits Images Section -->
    <h3 style="color:#1a1f71; margin-bottom:20px; font-size:26px;">Our Permits</h3>
    <div class="permits-container">
        <div class="permit-card">
            <h4 style="color:#ffd700; font-size:18px; margin-bottom:15px; font-weight:600;">
                Waste Transport Permit
            </h4>
            <iframe src="{{ asset('pdfs/permit.pdf') }}"></iframe>
        </div>

        <div class="permit-card">
            <h4 style="color:#ffd700; font-size:18px; margin-bottom:15px; font-weight:600;">
                Hazardous Waste Permit
            </h4>
            <iframe src="{{ asset('pdfs/permit.pdf') }}"></iframe>
        </div>
    </div>

    <!-- Vehicles Table -->
    <h3 style="color:#1a1f71; margin-bottom:20px; font-size:26px;">Our Fleet</h3>
    <table class="vehicles-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Vehicle Number</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>UP71T0628</td>
            </tr>
            <tr>
                <td>2</td>
                <td>UP78FN6728</td>
            </tr>
            <tr>
                <td>3</td>
                <td>UP78DT2188</td>
            </tr>
            <tr>
                <td>4</td>
                <td>UP78HT6699</td>
            </tr>
        </tbody>
    </table>

</section>

@endsection
