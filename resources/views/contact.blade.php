@extends('layouts.app')

@section('content')

<!-- CONTACT HEADER -->
<section style="text-align:center; padding:50px 20px; background-color:#eef3f8;">
    <h2 class="contact-header">
        Contact Us
    </h2>
    <p style="font-size:18px; color:#555; max-width:800px; margin:0 auto;">
        We’re here to help you with waste management solutions, inquiries, and support. Reach out to us and we’ll respond promptly.
    </p>
</section>

<!-- CONTACT + MAP SECTION -->
<section style="max-width:1100px; margin:40px auto; padding:30px; background:#ffffff; border-radius:12px; box-shadow:0 4px 14px rgba(0,0,0,0.08);">
    <div style="display:flex; flex-wrap:wrap; gap:40px;">

        <!-- LEFT SECTION: Contact Info -->
        <div style="flex:1; min-width:300px; display:flex; flex-direction:column; gap:25px;">
            <h3 style="color:#1a1f71; font-size:22px; margin-bottom:10px;">Our Offices</h3>

            <!-- Company Address -->
            <div style="line-height:1.6;">
                <p>
                    <strong>Company Address:</strong><br>
                    Kuti Mandir, PP9R+JXR, Usari, Bilha, Uttar Pradesh 209306
                </p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Kuti+Mandir,+PP9R+JXR,+Usari,+Bilha,+Uttar+Pradesh+209306"
                   target="_blank"
                   style="display:inline-block; margin-top:5px; padding:10px 18px; background:#1a1f71; color:white; border-radius:6px; text-decoration:none; font-size:14px; transition:0.3s;"
                   onmouseover="this.style.background='#0f1550'" onmouseout="this.style.background='#1a1f71'">
                    Get Directions
                </a>
            </div>

            <!-- Meeting Address -->
            <div style="line-height:1.6;">
                <p>
                    <strong>Meeting Address:</strong><br>
                    Neemeshwar MahaMandir Society, Ratan Lal Nagar, Kanpur, Uttar Pradesh 208022
                </p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Neemeshwar+MahaMandir+Society,+Ratan+Lal+Nagar,+Kanpur,+Uttar+Pradesh+208022"
                   target="_blank"
                   style="display:inline-block; margin-top:5px; padding:10px 18px; background:#1a1f71; color:white; border-radius:6px; text-decoration:none; font-size:14px; transition:0.3s;"
                   onmouseover="this.style.background='#0f1550'" onmouseout="this.style.background='#1a1f71'">
                    Get Directions
                </a>
            </div>

            <!-- Phones & Email -->
            <div class="contact-info" style="line-height:1.8;">
                <p><strong>Phone:</strong><br>
                    <a href="tel:+918318612573">+91 8318612573</a><br>
                    <a href="tel:+919450342203">+91 9450342203</a>
                </p>

                <p><strong>Email:</strong><br>
                    <a href="mailto:ecosolutionwastemanangement@gmail.com">
                        ecosolutionwastemanangement@gmail.com
                    </a>
                </p>
            </div>
        </div>

        <!-- RIGHT SECTION: Maps -->
        <div style="flex:1; min-width:320px; display:flex; flex-direction:column; gap:25px;">
            <h3 style="color:#1a1f71; font-size:22px; margin-bottom:10px;">Find Us on Map</h3>

            <!-- Map 1 -->
            <div>
                <h4 style="font-size:16px; color:#333; margin-bottom:8px;">Company Address</h4>
                <iframe 
                    src="https://www.google.com/maps?q=Gata%20No%20288%20Kuitmandir%20Akarpur%20Kanpur&output=embed"
                    width="100%"
                    height="220"
                    style="border:0; border-radius:10px;"
                    allowfullscreen
                    loading="lazy">
                </iframe>
            </div>

            <!-- Map 2 -->
            <div>
                <h4 style="font-size:16px; color:#333; margin-bottom:8px;">Meeting Address</h4>
                <iframe
                    src="https://www.google.com/maps?q=Neemeshwar%20MahaMandir%20Society%2C%20Ratan%20Lal%20Nagar%2C%20Kanpur%2C%20Uttar%20Pradesh%20208022&output=embed"
                    width="100%"
                    height="220"
                    style="border:0; border-radius:10px;"
                    allowfullscreen
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM -->
<section style="max-width:900px; margin:40px auto; padding:25px; background-color:#eef3f8; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
    <h2 class="contact-form-header">Request a Call Back / Inquiry</h2>

    @if(session('success'))
        <div style="background:#e8f9f1; padding:15px 20px; border-left:6px solid #28a745; border-radius:6px; margin-bottom:25px; font-size:16px; color:#1c5633; display:flex; align-items:center; gap:10px; box-shadow:0 2px 6px rgba(0,0,0,0.08);">
            <span style="font-size:22px;">✔</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ url('/contact-submit') }}" method="POST" 
          style="background:#ffffff; padding:25px; border-radius:12px; box-shadow:0 2px 6px rgba(0,0,0,0.05); display:flex; flex-direction:column; gap:15px;">
        @csrf

        <input type="text" name="name" placeholder="Your Name" required 
               style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px;">

        <input type="email" name="email" placeholder="Your Email" required 
               style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px;">

        <input type="text" name="phone" placeholder="Phone Number" required 
               style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px;">

        <textarea name="message" rows="5" placeholder="Your Message" required 
                  style="width:100%; padding:12px; border:1px solid #ccc; border-radius:6px;"></textarea>

        <button type="submit" 
                style="padding:14px 30px; background:#1a1f71; color:white; border:none; border-radius:6px; cursor:pointer; font-size:16px; align-self:flex-start; transition:0.3s;"
                onmouseover="this.style.background='#0f1550'" onmouseout="this.style.background='#1a1f71'">
            Submit
        </button>
    </form>
</section>

<!-- Styles -->
<style>
/* Contact Header */
.contact-header {
    color: #1a1f71;
    font-size:36px;
    font-weight:700;
    margin-bottom:20px;
    text-align:center;
    position: relative;
    display: inline-block;
    padding-bottom: 8px;
    transition: transform 0.3s, color 0.3s;
}

.contact-header::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 100px; /* underline width for Contact Us */
    height: 3px;
    background: linear-gradient(to right, #1a1f71, #ffd700);
    border-radius: 2px;
    transition: width 0.3s ease-in-out;
}

.contact-header:hover {
    transform: translateY(-3px);
    color: #0f1550;
}

.contact-header:hover::after {
    width: 170px; /* hover width for Contact Us underline */
}

/* Contact Form Header */
.contact-form-header {
    color: #1a1f71;
    font-size:36px;
    font-weight:700;
    margin-bottom:20px;
    text-align:center;
    position: relative;
    display: inline-block;
    padding-bottom: 8px;
    transition: transform 0.3s, color 0.3s;
}

.contact-form-header::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 60px; /* underline width for Request Form */
    height: 3px;
    background: linear-gradient(to right, #1a1f71, #ffd700);
    border-radius: 2px;
    transition: width 0.3s ease-in-out;
}

.contact-form-header:hover {
    transform: translateY(-3px);
    color: #0f1550;
}

.contact-form-header:hover::after {
    width: 450px; /* hover width for Request Form underline */
}
</style>


@endsection
