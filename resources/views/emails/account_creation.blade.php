<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heritage Bank - New Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #333;
        }
        .card {
            border-radius: 10px;
            overflow: hidden;
            margin: 30px auto;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #004d40;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            padding: 20px;
            letter-spacing: 1px;
        }
        .table td {
            padding: 10px;
            vertical-align: middle;
        }
        .footer {
            text-align: center;
            font-size: 0.9rem;
            color: #777;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Heritage Bank
        </div>
        <div class="card-body">
            <p class="mb-3">A new customer registration has been submitted with the following details:</p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>First Name:</strong></td>
                        <td>{{ $body['first_name'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Last Name:</strong></td>
                        <td>{{ $body['last_name'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Middle Name:</strong></td>
                        <td>{{ $body['middle_name'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Date of Birth:</strong></td>
                        <td>{{ $body['date_of_birth'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Place of Birth:</strong></td>
                        <td>{{ $body['place_of_birth'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Residential Address:</strong></td>
                        <td>{{ $body['residential_address'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Phone Number:</strong></td>
                        <td>{{ $body['phone_number'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>{{ $body['email'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Employer Address:</strong></td>
                        <td>{{ $body['address'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tax ID:</strong></td>
                        <td>{{ $body['tax_id'] ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Passport/National ID:</strong></td>
                        <td>
                            @if(isset($body['passport']) && $body['passport'])
                                <a href="{{ asset('storage/' . $body['passport']) }}" target="_blank">View Document</a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Heritage Bank. All rights reserved.
        </div>
    </div>
</body>
</html>
