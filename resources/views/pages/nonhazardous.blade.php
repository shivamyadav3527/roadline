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

<section id="non-hazardous" style="padding:30px; max-width:90%; margin:0 auto; line-height:1.8; font-size:17px; color:#333;">

    <div style="text-align:center; width:100%;">
        <h2 class="section-title">Non-Hazardous Waste</h2>
    </div>

    <p>
        <strong>Aradhya Road Lines</strong> is a <strong>PCB-certified</strong> waste management company committed to
        the safe and responsible handling of <strong>non-hazardous waste</strong>. Our operations comply with the
        <strong>Pollution Control Board (PCB)</strong> and state pollution control regulations.
    </p>

    <div class="highlight-cert">
        <strong>PCB Certified:</strong> Professional handling and disposal of non-hazardous waste in compliance with government standards.
    </div>

    <p>
        Non-hazardous waste includes materials that do not pose immediate threats to human health or the environment but still
        require responsible collection, transportation, and disposal to maintain cleanliness and support sustainable practices.
    </p>

    <h3 style="color:#1a1f71; margin-top:25px;">Common Types of Non-Hazardous Waste</h3>
    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li>Construction and demolition debris</li>
        <li>Packaging materials (cardboard, plastics, metals)</li>
        <li>Food and organic waste</li>
        <li>Paper and cardboard from offices or industries</li>
        <li>Non-toxic plastic waste</li>
        <li>Municipal solid waste from households and commercial establishments</li>
    </ul>

    <h3 style="color:#1a1f71; margin-top:25px;">Our Non-Hazardous Waste Management Approach</h3>
    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li><strong>Collection & Segregation:</strong> Waste is collected and sorted to ensure recyclables are separated from landfill materials.</li>
        <li><strong>Transportation:</strong> GPS-enabled vehicles and trained personnel ensure safe, timely delivery to processing or disposal sites.</li>
        <li><strong>Compliance & Reporting:</strong> Complete adherence to CPCB and local municipal regulations.</li>
    </ul>

    <h3 style="color:#1a1f71; margin-top:25px;">Key Facts & Figures</h3>
    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li>India generates ~62 million tonnes of municipal solid waste annually (CPCB, 2023).</li>
        <li>Only 20–30% of municipal solid waste is effectively recycled in urban areas.</li>
        <li>Construction and demolition waste accounts for ~25–30% of the total non-hazardous waste generated.</li>
        <li>Food and organic waste make up ~40–50% of urban solid waste by weight.</li>
        <li>Proper non-hazardous waste management reduces environmental pollution and conserves resources.</li>
    </ul>

    <p>
        Partnering with <strong>Aradhya Road Lines</strong> ensures businesses and municipalities adopt sustainable and
        eco-friendly waste management practices. Our PCB-certified processes guarantee responsible handling and disposal
        of all non-hazardous materials.
    </p>

</section>

@endsection
