<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Withdrawal Confirmation</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .email-header {
            background-color: #0d6efd;
            color: #fff;
            text-align: center;
            padding: 25px 15px;
        }
        .email-body {
            padding: 30px;
        }
        .email-footer {
            background-color: #f1f3f5;
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #6c757d;
        }
        .amount-box {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }
        .highlight {
            font-weight: 600;
            color: #0d6efd;
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        <div class="email-header">
            <h3>Crypto Withdrawal Request</h3>
        </div>

        <div class="email-body">
            <p>Hello,</p>
            <p>Your request to withdraw funds via cryptocurrency has been received. Below are the transaction details:</p>

            <div class="amount-box">
                <p><strong>Amount:</strong> <span class="highlight">{{ $amount }}</span></p>
                <p><strong>Wallet Address:</strong> <span class="highlight">{{ $address }}</span></p>
            </div>

            <p>We are processing your transaction and will notify you once it’s completed.
            If this request wasn’t initiated by you, please contact our support immediately.</p>

            <div class="text-center mt-4">
                <a href="{{ config('app.url') }}" class="btn btn-primary" style="text-decoration:none; padding:10px 25px; border-radius:5px;">Go to Dashboard</a>
            </div>
        </div>

        <div class="email-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
