<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="font-family: Arial, sans-serif; background:#e9eef5; padding:20px; margin:0;">

    <table width="100%" cellpadding="0" cellspacing="0" 
        style="max-width:620px; margin:auto; background:#ffffff; border-radius:10px; 
        overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.12); border-collapse:collapse;">

        <!-- Header -->
        <tr>
            <td style="background:#1a1f71; padding:25px 10px; text-align:center; color:white;">
                <h2 style="margin:0; font-size:22px; font-weight:700; color:#ffd700; line-height:1.2;">
                    Eco Solutions Waste Management
                </h2>
                <p style="margin:8px 0 0; font-size:12px; opacity:0.9; line-height:1.2;">
                    New Contact Form Submission
                </p>
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:20px 15px; color:#333; font-size:15px; line-height:1.6;">

                <p style="margin:0 0 10px;">Hello Team,</p>

                <p style="margin:0 0 20px;">
                    You have received a new inquiry via the company website.
                </p>

                <table cellpadding="8" cellspacing="0" 
                    style="width:100%; background:#f9fafc; border-radius:8px; padding:10px; border-collapse:separate; border-spacing:0 8px;">

                    <tr>
                        <td style="font-weight:bold; width:35%; color:#1a1f71; vertical-align:top;">Name:</td>
                        <td>{{ $data['name'] }}</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold; color:#1a1f71; vertical-align:top;">Email:</td>
                        <td>{{ $data['email'] }}</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold; color:#1a1f71; vertical-align:top;">Phone:</td>
                        <td>{{ $data['phone'] }}</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold; color:#1a1f71; vertical-align:top;">Message:</td>
                        <td style="line-height:1.6;">{{ $data['message'] }}</td>
                    </tr>

                </table>

                <p style="margin-top:20px; font-size:14px; line-height:1.6; color:#555;">
                    Kindly follow up with the customer at the earliest.<br>Thank you.
                </p>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#1a1f71; padding:15px 10px; text-align:center; font-size:12px; color:#ffffff;">
                <div style="font-weight:600; font-size:10px;">Eco Solutions Waste Management</div>
                <div style="margin-top:5px; opacity:0.8;">© {{ date('Y') }} All Rights Reserved.</div>
            </td>
        </tr>

    </table>

</body>
</html>
