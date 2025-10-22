<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Heritage Bank</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

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

        .metric-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .metric-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .metric-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: #212529;
            margin-bottom: 0.5rem;
        }

        .metric-change {
            font-size: 0.9rem;
        }

        .change-positive {
            color: #198754;
        }

        .change-negative {
            color: #dc3545;
        }

        .change-neutral {
            color: #0d6efd;
        }

        .small-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .btn-view-all {
            border: 1px solid #6c757d;
            color: #6c757d;
            background: transparent;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
        }

        .btn-view-all:hover {
            background-color: #6c757d;
            color: white;
        }

        .btn-primary-custom {
            background: linear-gradient(45deg, #fd7e14, #dc3545);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
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

        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .timeline-bullet {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 1rem;
            flex-shrink: 0;
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

        /* Banking History Table Styles */
        .table th {
            border-top: none;
            font-weight: 600;
            color: #495057;
            font-size: 0.9rem;
            padding: 1rem 0.75rem;
        }

        .table td {
            padding: 1rem 0.75rem;
            vertical-align: middle;
            border-top: 1px solid #f1f3f4;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.35rem 0.65rem;
        }

        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        code {
            background-color: #f1f3f4;
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
            font-size: 0.85rem;
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
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('link-accounts') }}">Link Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('move-funds') }}">Move money</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item disabled-link" disabled="disabled" href="">Withdraw to
                                    external
                                    bank</a></li>
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

    <!-- Main Content -->
    <div class="container-fluid py-4" style="width: 85%; margin-left: auto; margin-right: auto;">
        <!-- Account Summary Section -->
        <div class="metric-card">


            <div class="row">
                <!-- Checking Account -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <div class="metric-icon bg-primary text-white mx-auto">
                            <i class="bi bi-credit-card fs-4"></i>
                        </div>
                        <div class="metric-value">${{ auth()->user()->balance }}</div>
                        <div class="metric-change change-positive">
                            <small class="text-muted">Checking Account
                                ****{{ substr(auth()->user()->account_number, -4) }}</small>
                        </div>
                    </div>
                </div>

                <!-- Savings Account -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <div class="metric-icon bg-success text-white mx-auto">
                            <i class="bi bi-piggy-bank fs-4"></i>
                        </div>
                        <div class="metric-value">${{ $credit }}</div>
                        <div class="metric-change change-positive">
                            <i class="bi bi-chevron-up"></i> Debit
                        </div>
                        <small class="text-muted">Savings Account
                            ****{{ substr(auth()->user()->account_number, -4) }}</small>
                    </div>
                </div>

                <!-- Credit Card -->
                <div class="col-md-4 mb-4">
                    <div class="text-center">
                        <div class="metric-icon bg-warning text-white mx-auto">
                            <i class="bi bi-card-text fs-4"></i>
                        </div>
                        <div class="metric-value">${{ $debit }}</div>
                        <div class="metric-change change-negative">
                            <i class="bi bi-chevron-down"></i> Debit
                        </div>
                        {{-- <small class="text-muted">Credit Card ****9012</small> --}}
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="text-center mt-4">
                <a href="{{ route('move-funds') }}" class="btn btn-primary-custom text-white me-3">
                    <i class="bi bi-arrow-left-right me-2"></i>
                    Transfer Money
                </a>
                {{-- <button class="btn btn-outline-primary me-3">
                    <i class="bi bi-receipt me-2"></i>
                    Pay Bills
                </button>
                <button class="btn btn-outline-success">
                    <i class="bi bi-download me-2"></i>
                    Download Statement
                </button> --}}
            </div>
        </div>

        <!-- Banking History Table -->
        <div class="row">
            <div class="col-12">
                <div class="small-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock-history text-primary fs-4 me-2"></i>
                            <h5 class="mb-0 fw-bold">Banking History</h5>
                        </div>
                        <div class="d-flex gap-2">
                            {{-- <button class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-download me-1"></i> Export
                            </button> --}}
                            <button class="btn btn-link text-muted p-1">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                        </div>
                                    </th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($history as $transaction)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-semibold">
                                                {{ \Carbon\Carbon::parse($transaction->transaction_date) }}</div>
                                            <small class="text-muted">
                                                {{ \Carbon\Carbon::parse($transaction->transaction_date) }}</small>
                                        </td>
                                        <td>
                                            <code class="text-primary">{{ $transaction->transaction_id }}</code>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if ($transaction->type === 'credit')
                                                    <i class="bi bi-arrow-up-circle-fill text-success me-2"></i>
                                                @else
                                                    <i class="bi bi-arrow-down-circle-fill text-danger me-2"></i>
                                                @endif
                                                <span>{{ $transaction->description }}</span>
                                            </div>
                                            @if ($transaction->details)
                                                <small class="text-muted">{{ $transaction->details }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($transaction->type === 'credit')
                                                <span class="badge bg-success">Credit</span>
                                            @else
                                                <span class="badge bg-danger">Debit</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($transaction->type === 'credit')
                                                <span
                                                    class="fw-bold text-success">+${{ number_format($transaction->amount, 2) }}</span>
                                            @else
                                                <span
                                                    class="fw-bold text-danger">-${{ number_format($transaction->amount, 2) }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @switch($transaction->status)
                                                @case('completed')
                                                    <span class="badge bg-success">Completed</span>
                                                @break

                                                @case('pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @break

                                                @case('failed')
                                                    <span class="badge bg-danger">Failed</span>
                                                @break

                                                @case('cancelled')
                                                    <span class="badge bg-secondary">Cancelled</span>
                                                @break

                                                @default
                                                    <span class="badge bg-info">{{ ucfirst($transaction->status) }}</span>
                                            @endswitch
                                        </td>
                                        <td>
                                            <span
                                                class="fw-semibold">${{ number_format($transaction->balance_after, 2) }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-4">
                                                <i class="bi bi-inbox fs-1 text-muted mb-3"></i>
                                                <p class="text-muted">No transactions found</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Table Footer -->
                        @if ($history->hasPages())
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <div class="text-muted small">
                                    Showing {{ $history->firstItem() }} to {{ $history->lastItem() }} of
                                    {{ $history->total() }} transactions
                                </div>
                                <div class="d-flex gap-2">
                                    @if ($history->onFirstPage())
                                        <button class="btn btn-outline-secondary btn-sm" disabled>
                                            <i class="bi bi-chevron-left"></i> Previous
                                        </button>
                                    @else
                                        <a href="{{ $history->previousPageUrl() }}"
                                            class="btn btn-outline-secondary btn-sm">
                                            <i class="bi bi-chevron-left"></i> Previous
                                        </a>
                                    @endif

                                    @foreach (range(1, min(3, $history->lastPage())) as $page)
                                        @if ($page == $history->currentPage())
                                            <button class="btn btn-primary btn-sm">{{ $page }}</button>
                                        @else
                                            <a href="{{ $history->url($page) }}"
                                                class="btn btn-outline-secondary btn-sm">{{ $page }}</a>
                                        @endif
                                    @endforeach

                                    @if ($history->hasMorePages())
                                        <a href="{{ $history->nextPageUrl() }}" class="btn btn-outline-secondary btn-sm">
                                            Next <i class="bi bi-chevron-right"></i>
                                        </a>
                                    @else
                                        <button class="btn btn-outline-secondary btn-sm" disabled>
                                            Next <i class="bi bi-chevron-right"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
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

            // Add some basic interactivity
            document.addEventListener('DOMContentLoaded', function() {
                // Handle notification click
                document.querySelector('.bi-bell').addEventListener('click', function() {
                    alert('You have 3 new notifications');
                });

                // Handle search functionality
                document.querySelector('input[placeholder="Search..."]').addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        alert('Searching for: ' + this.value);
                    }
                });

                // Handle profile dropdown
                document.querySelector('.bi-chevron-down').addEventListener('click', function() {
                    alert('Profile menu would open here');
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
