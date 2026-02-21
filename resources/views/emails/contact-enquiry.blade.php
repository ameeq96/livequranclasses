<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Enquiry</title>
</head>
<body style="margin:0;padding:0;background:#f4f7f6;font-family:Arial,sans-serif;color:#1f2937;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f7f6;padding:24px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="680" cellspacing="0" cellpadding="0" style="max-width:680px;width:100%;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:linear-gradient(90deg,#149561,#f0c440);padding:20px 24px;">
                            <h2 style="margin:0;font-size:24px;line-height:32px;color:#ffffff;">New Contact Enquiry</h2>
                            <p style="margin:8px 0 0;font-size:14px;line-height:20px;color:#f8fafc;">A new message has been submitted from the website contact form.</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:24px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;width:30%;font-weight:700;">Name</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;background:#f9fafb;font-weight:700;">Email</td>
                                    <td style="padding:12px;">
                                        <a href="mailto:{{ $email }}" style="color:#0f766e;text-decoration:none;">{{ $email }}</a>
                                    </td>
                                </tr>
                            </table>

                            <h3 style="margin:24px 0 10px;font-size:18px;line-height:26px;color:#111827;">Message</h3>
                            <div style="padding:14px;border:1px solid #e5e7eb;border-radius:8px;background:#fbfffd;font-size:14px;line-height:22px;white-space:pre-line;">
                                {{ $messageBody }}
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:16px 24px;background:#0f172a;color:#cbd5e1;font-size:12px;line-height:18px;">
                            This email was generated automatically from the Live Quran Classes contact form.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
