<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us By Phone</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        body {
            background-color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .contact-section {
            padding: 60px 0;
            text-align: center;
        }

        .contact-section h2 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact-section p {
            color: #6c757d;
            margin-bottom: 40px;
        }

        .contact-card {
            background-color: #fff;
            border: 1px solid #f1f1f1;
            border-radius: 12px;
            padding: 30px;
            transition: 0.3s ease-in-out;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .contact-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }

        .contact-card i {
            font-size: 40px;
            color: #198754;
            margin-bottom: 15px;
        }

        .contact-card h5 {
            color: #00564f;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .contact-card a {
            color: #00564f;
            text-decoration: none;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        .contact-card .phone-number {
            font-size: 1.3rem;
            color: #000;
            font-weight: 500;
        }
    </style>
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <!-- Left side - Title and description -->
            <div class="d-flex flex-column">
                <h1 class="h2 mb-1 fw-bold" style="color: #b8b8b8;">Welcome back, {{ auth()->user()->name }}</h1>
                <p class="text-muted mb-0 small">Manage your accounts, view transactions, and access banking services.
                </p>
            </div>

            <!-- Right side - Search, icons, profile -->
            <div class="d-flex align-items-center gap-3">
                <!-- Search Box -->

                <!-- Profile -->
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-person-circle fs-1 text-secondary"></i>

                    {{-- <i class="bi bi-chevron-down text-muted"></i> --}}
                </div>
            </div>
        </div>
    </nav>

     <nav class="secondary-nav">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Left side - Empty space -->
                <div></div>

                <!-- Center - Navigation tabs -->
                <ul class="nav nav-tabs border-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('link-accounts') }}">Link Accounts</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('move-funds') }}">Move money</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a style="color:rgba(126, 126, 126, 0.386)" class="dropdown-item disabled-link" href="">Withdraw to external bank</a></li>
                            <li><a class="dropdown-item" href="{{ route('move-crypto') }}">Withdraw via crypto</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Right side - Drawer toggle -->
                <button class="btn btn-link text-dark" onclick="toggleLeftDrawer()">
                    <i class="bi bi-list fs-4"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="container contact-section">
        <h2>Contact Us By Phone</h2>
        <p>You can also browse or search our <a href="#">frequently asked questions</a> or <a href="#">find a branch</a>.</p>

        <div class="row justify-content-center g-4">
            <div class="col-md-4">
                <div class="contact-card h-100">
                    <i class="bi bi-headset"></i>
                    <h5><a href="#">Kensington Heritage Bank® Customer Service Center</a></h5>
                    <div class="phone-number">support@kensingtonheritage.com</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card h-100">
                    <i class="bi bi-phone"></i>
                    <h5><a href="#">Online Banking Support</a></h5>
                    <div class="phone-number">+4915213604403</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>
