<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Confirmation</title>
</head>
<body style="margin:0;padding:0;background:#f4f7f6;font-family:Arial,sans-serif;color:#1f2937;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f7f6;padding:24px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="680" cellspacing="0" cellpadding="0" style="max-width:680px;width:100%;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:linear-gradient(90deg,#149561,#f0c440);padding:20px 24px;">
                            <h2 style="margin:0;font-size:24px;line-height:32px;color:#ffffff;">Enrollment Received</h2>
                            <p style="margin:8px 0 0;font-size:14px;line-height:20px;color:#f8fafc;">Assalamu Alaikum {{ $student_name }}, your enrollment request has been received.</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:24px;">
                            <p style="margin:0 0 16px;font-size:15px;line-height:24px;color:#374151;">
                                Thank you for choosing Live Quran Classes. Our admissions team will contact you shortly to confirm your schedule and next steps.
                            </p>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;width:36%;font-weight:700;">Student Name</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $student_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Course</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $course }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Plan</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $plan }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Preferred Time</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $preferred_time }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;background:#f9fafb;font-weight:700;">Phone</td>
                                    <td style="padding:12px;">{{ $phone_number }}</td>
                                </tr>
                            </table>

                            <p style="margin:18px 0 0;font-size:14px;line-height:22px;color:#4b5563;">
                                If you need any changes, reply to this email and our support team will assist you.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:16px 24px;background:#0f172a;color:#cbd5e1;font-size:12px;line-height:18px;">
                            Live Quran Classes | Admissions Support
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
