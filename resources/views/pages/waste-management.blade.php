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
        width: 280px;
    }

    .highlight-cert {
        color: #1a1f71;
        font-weight: 700;
        background: #e8f9f1;
        border-left: 5px solid #1a1f71;
        padding: 12px 15px;
        border-radius: 6px;
        margin: 20px 0;
    }
</style>

@section('content')

<section id="waste-management" style="padding:30px; max-width:90%; margin:0 auto; line-height:1.8; font-size:17px; color:#333;">

    <div style="text-align:center; width:100%;">
        <h2 class="section-title">Waste Management</h2>
    </div>

    <p>
        <strong>Aradhya Road Lines</strong> is a PCB-certified waste management company, delivering safe, efficient, and
        sustainable solutions across India. With years of experience and professional expertise, we ensure regulatory compliance,
        environmental responsibility, and innovative waste handling techniques for industrial and municipal clients.
    </p>

    <div class="highlight-cert">
        <strong>PCB Certified:</strong> All our operations comply with <strong>Pollution Control Board (PCB)</strong> 
        standards and state pollution control regulations.
    </div>

    <p>
        India generates approximately <strong>62 million tonnes of municipal solid waste per year</strong> (CPCB, 2023), 
        with daily per capita waste in cities ranging from 0.17 kg to 0.62 kg. The main sources include households, 
        commercial establishments, industries, and construction sites.
    </p>

    <h3 style="color:#1a1f71; margin-top:25px;">Types of Waste We Handle</h3>

    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li><strong>Municipal Solid Waste (MSW):</strong> Organic waste, plastics, paper, metals, and glass.</li>
        <li><strong>Hazardous Waste:</strong> Chemicals, industrial by-products, biomedical waste.</li>
        <li><strong>Plastic Waste:</strong> Over 15,000 tons are generated daily in India; only 60% is recycled.</li>
        <li><strong>E-Waste:</strong> Discarded electronic equipment such as phones, computers, and appliances.</li>
        <li><strong>Biomedical Waste:</strong> Waste from hospitals, laboratories, and healthcare facilities (~775 tons/day).</li>
    </ul>

    <h3 style="color:#1a1f71; margin-top:25px;">Our Waste Management Approach</h3>

    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li><strong>Collection & Segregation:</strong> Proper sorting at the source for easy disposal or recycling.</li>
        <li><strong>Transportation:</strong> Using GPS-enabled vehicles and trained personnel for safe transport.</li>
        <li><strong>Compliance & Reporting:</strong> Strict adherence to CPCB, MoEF&CC, and state pollution regulations.</li>
    </ul>

    <h3 style="color:#1a1f71; margin-top:25px;">Key Facts & Figures</h3>

    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li>India generates ~62 million tonnes of municipal solid waste annually.</li>
        <li>Plastic recycling rate is ~60%; the rest often ends up in landfills or rivers.</li>
        <li>Hazardous waste production is ~7.5 million tonnes/year; ~80% is treated or recycled properly.</li>
        <li>Biomedical waste generation is ~775 tons/day, managed under Biomedical Waste Management Rules 2016.</li>
        <li>Only 20–30% of municipal solid waste is effectively recycled in urban areas.</li>
    </ul>


    <p>
        Partnering with <strong>Aradhya Road Lines</strong> ensures businesses reduce environmental risks, maintain compliance,
        and adopt sustainable practices in waste management. Our PCB-certified operations guarantee reliable, accountable, 
        and eco-friendly solutions for all types of waste.
    </p>

</section>

@endsection
