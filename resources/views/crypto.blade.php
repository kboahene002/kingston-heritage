<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Accounts - Heritage Bank</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    {{-- <@livewireScripts />
    <@livewireStyles /> --}}
    @livewireStyles
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .secondary-nav {
            background-color: white;
            border-bottom: 1px solid #dee2e6;
            padding: 0.5rem 0;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
        }

        .nav-tabs .nav-link.active {
            color: #dc3545;
            background-color: transparent;
            border-bottom: 2px solid #dc3545;
        }

        .main-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 2rem;
        }

        .input-field {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #fafafa;
        }

        .input-field:focus {
            outline: none;
            border-color: #007bff;
            background-color: white;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .input-label {
            position: absolute;
            top: -0.5rem;
            left: 1rem;
            background-color: white;
            padding: 0 0.5rem;
            color: #6c757d;
            font-size: 0.875rem;
            font-weight: 500;
            z-index: 1;
        }

        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 1.2rem;
        }

        .btn-primary-custom {
            background: linear-gradient(45deg, #fd7e14, #dc3545);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(45deg, #e8710e, #c82333);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-outline-secondary {
            border: 2px solid #6c757d;
            color: #6c757d;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: white;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-left: 2.5rem;
            border-radius: 20px;
            border: 1px solid #dee2e6;
        }

        .search-box .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-description {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }

        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 1rem;
            font-weight: bold;
            color: #6c757d;
        }

        .step.active {
            background-color: #007bff;
            color: white;
        }

        .step.completed {
            background-color: #28a745;
            color: white;
        }

        /* Left Drawer Styles */
        .left-drawer {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100vh;
            background-color: white;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
            z-index: 1050;
            transition: left 0.3s ease;
            overflow-y: auto;
        }

        .left-drawer.show {
            left: 0;
        }

        .drawer-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .drawer-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .drawer-header {
            padding: 1.5rem;
            border-bottom: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }

        .drawer-content {
            padding: 1.5rem;
        }

        .drawer-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f3f4;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .drawer-item:hover {
            background-color: #f8f9fa;
        }

        .drawer-item:last-child {
            border-bottom: none;
        }

        .disabled-link {
            pointer-events: none;
            /* disables click */
            opacity: 0.5;
            /* makes it look disabled */
            color: gray;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Top Header -->
   <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <!-- Left side - Title and description -->
            <div class="d-flex flex-column">
                <h1 class="h4 mb-1 fw-bold" style="color: #2a2828;">Welcome back, </h1>
                <p class="text-muted mb-0 fw-bold ">{{ auth()->user()->name }}
                </p>
            </div>

            <!-- Right side - Search, icons, profile -->
            <div class="d-flex align-items-center gap-3">
                <!-- Search Box -->


                <!-- Notifications -->
                {{-- <div class="position-relative">
                    <button class="btn btn-link text-dark p-2">
                        <i class="bi bi-bell fs-5"></i>
                    </button>
                    <span class="notification-badge">3</span>
                </div> --}}

                <!-- Profile -->
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-person-circle fs-1 text-secondary"></i>
                    {{-- <i class="bi bi-chevron-down text-muted"></i> --}}
                </div>
            </div>
        </div>
    </nav>

    <!-- Secondary Navigation -->
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
                        <a class="nav-link " href="{{ route('move-funds') }}">Move money</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item disabled-link" href="">Withdraw to external bank</a></li>
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

    <!-- Livewire Alert Component -->

    <!-- Main Content -->
    <div class="container-fluid py-4" style="width: 85%; margin-left: auto; margin-right: auto;">
        <div class="main-card">
            <!-- Page Header -->
            <div class="text-center mb-5">
                <i class="bi bi-link-45deg text-primary fs-1 mb-3"></i>
                <h2 class="fw-bold text-dark mb-3">Withdraw via crypto</h2>
                <p class="form-description">
                    Enjoy fast and secure withdrawals directly to your preferred cryptocurrency wallet.
                    Our crypto withdrawal service lets you convert your funds into digital assets instantly, giving you global access to your money anytime, anywhere.
                </p>
            </div>

            <!-- Step Indicator -->
            <div class="step-indicator">
                <div class="step active">1</div>
                <div class="step">2</div>
                {{-- <div class="step">3</div> --}}
            </div>

            <!-- Form Fields -->
            <livewire:crypto-component />
        </div>
    </div>

    <!-- Left Drawer -->
    <div class="drawer-overlay" id="drawerOverlay" onclick="closeLeftDrawer()"></div>
    <div class="left-drawer" id="leftDrawer">
        <div class="drawer-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Navigation Menu</h5>
                <button class="btn btn-link text-dark p-0" onclick="closeLeftDrawer()">
                    <i class="bi bi-x-lg fs-4"></i>
                </button>
            </div>
        </div>
       <div class="drawer-content">
                <div class="drawer-item">
                    <i class="bi bi-house-door me-3 text-primary"></i>
                    <span> <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard </a></span>
                </div>

                <div class="drawer-item">
                    <i class="bi bi-arrow-left-right me-3 text-info"></i>
                    <span> <a class="nav-link active" href="{{ route('move-funds') }}">Transfer Money </a></span>

                </div>

                <div class="drawer-item">
                    <i class="bi bi-question-circle me-3 text-dark"></i>
                                        <span><a href="{{ route('help-support') }}">Help & Support</a></span>

                </div>
                <div class="drawer-item">
                    <i class="bi bi-box-arrow-right me-3 text-danger"></i>
                    <span> <a class="nav-link" href="{{ route('logout') }}">Sign Out</a> </span>
                </div>
            </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Livewire Alert -->
    @livewireAlertScripts

    <!-- Custom JavaScript for interactivity -->
    <script>
        // Left Drawer Functions
        function toggleLeftDrawer() {
            const drawer = document.getElementById('leftDrawer');
            const overlay = document.getElementById('drawerOverlay');

            drawer.classList.toggle('show');
            overlay.classList.toggle('show');
        }

        function closeLeftDrawer() {
            const drawer = document.getElementById('leftDrawer');
            const overlay = document.getElementById('drawerOverlay');

            drawer.classList.remove('show');
            overlay.classList.remove('show');
        }

        // Form validation and interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Handle form submission
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();

                const bank = document.querySelector('select').value;
                const accountNumber = document.querySelector('input[type="text"]').value;
                const accountName = document.querySelectorAll('input[type="text"]')[1].value;

                if (bank && accountNumber && accountName) {
                    alert(
                        'Account linking request submitted successfully! You will receive a confirmation email shortly.');

                    // Update step indicator
                    document.querySelectorAll('.step').forEach((step, index) => {
                        if (index < 2) {
                            step.classList.add('completed');
                            step.classList.remove('active');
                        } else {
                            step.classList.add('active');
                        }
                    });
                } else {
                    alert('Please fill in all required fields.');
                }
            });

            // Handle drawer item clicks
            document.querySelectorAll('.drawer-item').forEach(item => {
                item.addEventListener('click', function() {
                    const menuText = this.querySelector('span').textContent;
                    alert('Navigating to: ' + menuText);
                    closeLeftDrawer();
                });
            });

            // Close drawer on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeLeftDrawer();
                }
            });
        });
    </script>
</body>

</html>
