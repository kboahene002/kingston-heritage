<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Account Linking Request — Heritage Bank</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    /* Basic email-safe resets */
    body,table,td,div,p,a { -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; }
    table,td { mso-table-lspace:0pt; mso-table-rspace:0pt; }
    img { -ms-interpolation-mode:bicubic; display:block; border:0; outline:none; text-decoration:none; }
    a { color: #0b6b3a; text-decoration: none; }

    /* Layout */
    .wrapper { width:100%; background-color:#f4f6f8; padding:20px 0; }
    .email-main { width:600px; margin:0 auto; background:#ffffff; border-radius:6px; overflow:hidden; }

    /* Header */
    .brand { padding:20px; text-align:center; border-bottom:1px solid #e6e9ec; }
    .brand img { max-width:160px; height:auto; }

    /* Content */
    .content { padding:26px; font-family:Helvetica, Arial, sans-serif; color:#333333; font-size:16px; line-height:1.45; }
    .title { font-size:20px; margin:0 0 12px 0; color:#0b6b3a; font-weight:700; }
    .muted { color:#666666; font-size:15px; margin:0 0 18px 0; }

    /* Button */
    .btn { display:inline-block; padding:12px 20px; border-radius:6px; background:#0b6b3a; color:#ffffff; font-weight:600; text-decoration:none; }

    /* Footer */
    .footer { padding:18px; text-align:center; font-size:13px; color:#999999; border-top:1px solid #eef1f4; }

    /* Responsive */
    @media only screen and (max-width:620px) {
      .email-main { width:100% !important; border-radius:0; }
      .content { padding:18px !important; }
      .brand { padding:16px; }
      .title { font-size:18px; }
      .btn { display:block; width:100%; text-align:center; }
    }
  </style>
</head>
<body>
  <center class="wrapper">
    <table role="presentation" class="email-main" cellpadding="0" cellspacing="0" width="600">
      <tr>
        <td class="brand">
          <!-- Replace with your transparent logo (PNG or SVG) -->
          {{-- <img src="https://via.placeholder.com/160x48?text=Heritage+Bank" alt="Heritage Bank Logo"> --}}
        </td>
      </tr>

      <tr>
        <td class="content">
          <!-- Title -->
          <h1 class="title">Account Linking Request Received</h1>

          <!-- Message (using provided blade-style placeholders) -->
          <p class="muted" style="margin:0 0 18px 0;">
            Hello {{ $recipientName ?? 'there' }},
          </p>

          <p style="margin:0 0 14px 0; color:#333333;">
            We have received a request from {{ $requesterName ?? 'a user' }} to link to your account (Account Number: {{ $accountNumber ?? 'N/A' }}).
          </p>

          <p style="margin:0 0 14px 0; color:#333333;">
            We will connect with the person you are trying to link account to. You will get a feedback within 24 hours.
          </p>

          <p style="margin:0 0 18px 0; color:#333333;">
            If you did not expect this, you can safely ignore this email.
          </p>

          <p style="margin:0 0 18px 0; color:#333333;">
            Best regards,
          </p>

          <p style="margin:0 0 0 0; color:#333333; font-weight:600;">
            Heritage Bank
          </p>

          <!-- Optional CTA (comment out or remove if not needed) -->
          <!--
          <p style="margin:22px 0 0 0;">
            <a href="#" class="btn" target="_blank" rel="noopener">Contact Support</a>
          </p>
          -->
        </td>
      </tr>

      <tr>
        <td class="footer">
          {{-- <p style="margin:0 0 6px 0;">Heritage Bank • 123 Finance Ave, Accra, Ghana</p>
          <p style="margin:0;">If you no longer wish to receive these emails, <a href="#" style="color:#0b6b3a;">unsubscribe</a>.</p> --}}
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
