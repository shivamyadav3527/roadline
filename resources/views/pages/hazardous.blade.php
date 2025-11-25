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

<section id="hazardous" style="padding:30px; max-width:90%; margin:0 auto; line-height:1.8; font-size:17px; color:#333;">

    <div style="text-align:center; width:100%;">
        <h2 class="section-title">Hazardous Waste</h2>
    </div>

    <p>
        <strong>Aradhya Road Lines</strong> is a <strong>PCB-certified</strong> waste management company specializing in the safe
        handling, transportation, and disposal of hazardous waste across India. All operations comply with <strong>Pollution
        Control Board (PCB)</strong> and state pollution regulations.
    </p>

    <div class="highlight-cert">
        <strong>PCB Certified:</strong> Safe handling and disposal of hazardous materials in compliance with government standards.
    </div>

    <p>
        Hazardous waste refers to materials that are ignitable, corrosive, reactive, toxic, or otherwise dangerous to human health
        and the environment. Improper disposal can lead to soil contamination, water pollution, air hazards, and serious health risks.
    </p>

    <h3 style="color:#1a1f71; margin-top:25px;">Common Types of Hazardous Waste We Handle</h3>
    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li><strong>Ignitable Waste:</strong> Solvents, fuels, paints, and other flammable liquids (~5 million tonnes/year in India).</li>
        <li><strong>Corrosive Waste:</strong> Strong acids, alkalis, and battery acids requiring neutralization before disposal.</li>
        <li><strong>Reactive Waste:</strong> Explosive or unstable chemicals that react dangerously under certain conditions.</li>
        <li><strong>Toxic Waste:</strong> Heavy metals like lead, mercury, cadmium, and industrial pesticides (~2 million tonnes/year).</li>
        <li><strong>Universal Waste:</strong> Batteries, fluorescent lamps, and mercury-containing equipment.</li>
        <li><strong>Mixed Waste:</strong> Hazardous materials combined with radioactive substances.</li>
    </ul>

    <h3 style="color:#1a1f71; margin-top:25px;">Our Hazardous Waste Management Approach</h3>
    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li><strong>Segregation & Storage:</strong> Proper classification at the source to prevent contamination.</li>
        <li><strong>Secure Transportation:</strong> GPS-enabled vehicles, trained drivers, and strict compliance with regulatory norms.</li>
        <li><strong>Treatment & Disposal:</strong> Incineration, chemical neutralization, or secure landfills at authorized facilities.</li>
        <li><strong>Monitoring & Reporting:</strong> Complete documentation and reporting to PCB authorities for accountability.</li>
    </ul>

    <h3 style="color:#1a1f71; margin-top:25px;">Key Facts & Figures</h3>
    <ul style="padding-left:20px; list-style-position:inside; margin-top:10px; line-height:1.8;">
        <li>India generates ~7.5 million tonnes of hazardous waste annually (CPCB, 2023).</li>
        <li>Industries like chemicals, pharmaceuticals, textiles, and metal processing contribute the majority.</li>
        <li>Proper treatment/recycling occurs for ~80% of hazardous waste; the rest needs stringent control.</li>
        <li>Incorrect disposal can contaminate soil, rivers, and groundwater, causing long-term environmental harm.</li>
    </ul>


    <p>
        By partnering with <strong>Aradhya Road Lines</strong>, businesses can ensure safe, compliant, and eco-friendly handling
        of hazardous materials. Our PCB-certified processes guarantee minimal risk, environmental safety, and complete regulatory compliance.
    </p>

</section>

@endsection
