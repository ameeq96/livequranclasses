<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Request</title>
</head>
<body style="margin:0;padding:0;background:#f4f7f6;font-family:Arial,sans-serif;color:#1f2937;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f7f6;padding:24px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="700" cellspacing="0" cellpadding="0" style="max-width:700px;width:100%;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:linear-gradient(90deg,#149561,#f0c440);padding:20px 24px;">
                            <h2 style="margin:0;font-size:24px;line-height:32px;color:#ffffff;">New Course Enrollment Request</h2>
                            <p style="margin:8px 0 0;font-size:14px;line-height:20px;color:#f8fafc;">A new booking has been submitted from the website.</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:24px;">
                            <h3 style="margin:0 0 14px;font-size:18px;line-height:26px;color:#111827;">Student Information</h3>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;width:36%;font-weight:700;">Student Name</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $student_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Parent/Guardian</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $parent_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Email</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">
                                        <a href="mailto:{{ $email }}" style="color:#0f766e;text-decoration:none;">{{ $email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Phone</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">
                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone_number) }}" style="color:#0f766e;text-decoration:none;">{{ $phone_number }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;background:#f9fafb;font-weight:700;">Age</td>
                                    <td style="padding:12px;">{{ $age }}</td>
                                </tr>
                            </table>

                            <h3 style="margin:24px 0 14px;font-size:18px;line-height:26px;color:#111827;">Enrollment Details</h3>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border:1px solid #e5e7eb;">
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;width:36%;font-weight:700;">Course</td>
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
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">Country</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $country }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;background:#f9fafb;font-weight:700;">State</td>
                                    <td style="padding:12px;border-bottom:1px solid #e5e7eb;">{{ $state }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px;background:#f9fafb;font-weight:700;">City</td>
                                    <td style="padding:12px;">{{ $city }}</td>
                                </tr>
                            </table>

                            <h3 style="margin:24px 0 10px;font-size:18px;line-height:26px;color:#111827;">Learning Notes</h3>
                            <div style="padding:14px;border:1px solid #e5e7eb;border-radius:8px;background:#fbfffd;font-size:14px;line-height:22px;white-space:pre-line;">
                                {{ $notes }}
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:16px 24px;background:#0f172a;color:#cbd5e1;font-size:12px;line-height:18px;">
                            This email was generated automatically from the Live Quran Classes enrollment form.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
