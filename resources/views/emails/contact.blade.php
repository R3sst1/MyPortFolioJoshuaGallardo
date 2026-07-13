<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Contact Message — Portfolio</title>
    <style>
        /* Reset */
        body, table, td, p, a, li, blockquote {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            outline: none;
            text-decoration: none;
        }

        /* Base */
        body {
            margin: 0;
            padding: 0;
            background-color: #0d0f14;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: #e2e8f0;
        }

        .email-wrapper {
            width: 100%;
            background-color: #0d0f14;
            padding: 40px 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #161a24;
            border: 1px solid #1e2535;
            border-radius: 16px;
            overflow: hidden;
        }

        /* Header */
        .email-header {
            background: linear-gradient(135deg, #1a2236 0%, #0d1525 100%);
            border-bottom: 1px solid #1e2535;
            padding: 40px 48px 36px;
            text-align: center;
        }

        .email-header .badge {
            display: inline-block;
            background-color: rgba(91, 140, 255, 0.12);
            border: 1px solid rgba(91, 140, 255, 0.3);
            color: #7aa5ff;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 16px;
        }

        .email-header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 700;
            color: #f1f5f9;
            letter-spacing: -0.3px;
            line-height: 1.3;
        }

        .email-header p {
            margin: 8px 0 0;
            font-size: 14px;
            color: #64748b;
        }

        /* Body */
        .email-body {
            padding: 40px 48px;
        }

        /* Sender Info Card */
        .sender-card {
            background-color: #0d1525;
            border: 1px solid #1e2535;
            border-radius: 12px;
            padding: 20px 24px;
            margin-bottom: 32px;
        }

        .sender-card .sender-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 10px;
        }

        .sender-row {
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }

        .sender-row:last-child {
            margin-bottom: 0;
        }

        .sender-row .label {
            font-size: 12px;
            color: #64748b;
            width: 60px;
            flex-shrink: 0;
        }

        .sender-row .value {
            font-size: 14px;
            color: #e2e8f0;
            font-weight: 500;
        }

        .sender-row .value a {
            color: #7aa5ff;
            text-decoration: none;
        }

        /* Section */
        .section-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 10px;
        }

        .subject-block {
            font-size: 18px;
            font-weight: 600;
            color: #f1f5f9;
            margin-bottom: 28px;
            padding-bottom: 20px;
            border-bottom: 1px solid #1e2535;
            line-height: 1.4;
        }

        .message-block {
            background-color: #0d1525;
            border: 1px solid #1e2535;
            border-left: 3px solid #5b8cff;
            border-radius: 0 12px 12px 0;
            padding: 24px;
            font-size: 14px;
            line-height: 1.8;
            color: #cbd5e1;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        /* Footer */
        .email-footer {
            background-color: #0d0f14;
            border-top: 1px solid #1e2535;
            padding: 24px 48px;
            text-align: center;
        }

        .email-footer p {
            margin: 0;
            font-size: 12px;
            color: #475569;
            line-height: 1.6;
        }

        .email-footer .highlight {
            color: #64748b;
        }

        /* Divider */
        .divider {
            border: none;
            border-top: 1px solid #1e2535;
            margin: 28px 0;
        }

        /* Reply CTA */
        .reply-cta {
            text-align: center;
            margin-top: 32px;
        }

        .reply-cta a {
            display: inline-block;
            background: linear-gradient(135deg, #4f7cff, #7c5cfc);
            color: #ffffff;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 100px;
            letter-spacing: 0.02em;
        }

        @media only screen and (max-width: 620px) {
            .email-header,
            .email-body,
            .email-footer {
                padding-left: 24px !important;
                padding-right: 24px !important;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">

            {{-- Header --}}
            <div class="email-header">
                <div class="badge">Portfolio Contact</div>
                <h1>You've got a new message ✉️</h1>
                <p>Someone reached out through your portfolio contact form.</p>
            </div>

            {{-- Body --}}
            <div class="email-body">

                {{-- Sender Info --}}
                <div class="sender-card">
                    <div class="sender-label">Sender Details</div>
                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                        <tr>
                            <td class="label" style="font-size:12px;color:#64748b;width:60px;padding-bottom:6px;vertical-align:top;">Name</td>
                            <td class="value" style="font-size:14px;color:#e2e8f0;font-weight:500;padding-bottom:6px;">{{ e($name) }}</td>
                        </tr>
                        <tr>
                            <td class="label" style="font-size:12px;color:#64748b;width:60px;padding-top:6px;vertical-align:top;">Email</td>
                            <td class="value" style="font-size:14px;font-weight:500;padding-top:6px;">
                                <a href="mailto:{{ e($email) }}" style="color:#7aa5ff;text-decoration:none;">{{ e($email) }}</a>
                            </td>
                        </tr>
                    </table>
                </div>

                {{-- Subject --}}
                <div class="section-label">Subject</div>
                <div class="subject-block">{{ e($subject) }}</div>

                {{-- Message --}}
                <div class="section-label">Message</div>
                <div class="message-block">{{ e($message) }}</div>

                <hr class="divider">

                {{-- Reply CTA --}}
                <div class="reply-cta">
                    <a href="mailto:{{ e($email) }}?subject=Re: {{ urlencode($subject) }}">
                        Reply to {{ e($name) }} →
                    </a>
                </div>

            </div>

            {{-- Footer --}}
            <div class="email-footer">
                <p>
                    This message was sent via the contact form on
                    <span class="highlight">Joshua Gallardo's Portfolio</span>.
                </p>
                <p style="margin-top:6px;">
                    You are receiving this because you own this portfolio.
                </p>
            </div>

        </div>
    </div>
</body>
</html>
