{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    @include('admin.css')--}}
{{--</head>--}}
{{--<body>--}}
{{--@include('admin.header')--}}
{{--<div class="d-flex align-items-stretch">--}}
{{--    <!-- Sidebar Navigation-->--}}
{{--    @include('admin.sidebar')--}}
{{--    <!-- Sidebar Navigation end-->--}}
{{--    @include('admin.body')--}}



{{--    @include('admin.footer')--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Library Admin - Ahmed Maarouf</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS (simulating your project environment) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Simple Line Icons (matching your sidebar) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Custom Styles to match the Modern Look inside Bootstrap */
        body { background-color: #f3f4f6; font-family: 'Inter', sans-serif; overflow-x: hidden; }

        /* Sidebar & Header simulated styles from your template */
        nav.navbar { background: #2d3035; color: white; padding: 0.5rem 1rem; }
        .navbar-brand .brand-text { color: white; }
        .text-primary { color: #db6574 !important; }

        #sidebar { min-width: 250px; max-width: 250px; background: #2d3035; color: #fff; transition: all 0.3s; height: 100vh; }
        #sidebar .sidebar-header { padding: 20px; background: #2d3035; }
        #sidebar .avatar img { width: 50px; height: 50px; border: 3px solid #3d4046; }
        #sidebar ul.list-unstyled li a { padding: 10px 20px; display: block; color: #a6a7ab; text-decoration: none; }
        #sidebar ul.list-unstyled li.active a { background: #2b90d9; color: #fff; text-decoration: none; }
        #sidebar .heading { text-transform: uppercase; font-size: 12px; color: #69707a; padding: 10px 20px; display: block; }

        /* --- MODERN DASHBOARD CONTENT STYLES --- */
        .page-content { width: 100%; padding: 30px; background: #f3f4f6; overflow-y: auto; height: 100vh; }

        .stat-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            padding: 24px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        .stat-card:hover { transform: translateY(-3px); box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .stat-icon-box {
            width: 48px; height: 48px;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.25rem;
        }

        .bg-blue-light { background-color: #eff6ff; color: #3b82f6; }
        .bg-purple-light { background-color: #faf5ff; color: #a855f7; }
        .bg-yellow-light { background-color: #fefce8; color: #eab308; }
        .bg-red-light { background-color: #fef2f2; color: #ef4444; }

        .trend-badge {
            font-size: 0.75rem; font-weight: 500;
            padding: 2px 8px; border-radius: 9999px;
            display: inline-flex; align-items: center;
        }
        .trend-up { background-color: #d1fae5; color: #059669; }
        .trend-down { background-color: #fee2e2; color: #dc2626; }

        .modern-table thead th {
            background-color: #f9fafb;
            color: #6b7280;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e5e7eb;
            border-top: none;
            padding: 12px 24px;
        }
        .modern-table tbody td {
            padding: 16px 24px;
            vertical-align: middle;
            color: #374151;
            border-bottom: 1px solid #f3f4f6;
        }
        .status-badge {
            padding: 4px 12px; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;
        }
        .status-issued { background: #fef9c3; color: #a16207; }
        .status-overdue { background: #fee2e2; color: #b91c1c; }
        .status-returned { background: #dcfce7; color: #15803d; }
    </style>
</head>
<body>

<div class="d-flex align-items-stretch">

    <!-- --- YOUR SIDEBAR (Updated with Ahmed Maarouf) --- -->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
                <!-- Using a placeholder image if yours isn't local, replace src with 'admin/img/Ahmed_Maarouf.jpg' -->
                <img src="https://ui-avatars.com/api/?name=Ahmed+Maarouf&background=2b90d9&color=fff" alt="..." class="img-fluid rounded-circle">
            </div>
            <div class="title">
                <h1 class="h5">Ahmed Maarouf</h1>
                <p>Admin Library</p>
            </div>
        </div>

        <!-- Sidebar Navigation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
            <li><a href="category_page"> <i class="icon-grid"></i>Category </a></li>
            <li>
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Books</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                    <li><a href="add_book">Add Books</a></li>
                    <li><a href="show_book">Show Books</a></li>
                </ul>
            </li>
            <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul>

        <span class="heading">Extras</span>
        <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-settings"></i>Settings </a></li>
            <li> <a href="#"> <i class="icon-chart"></i>Reports </a></li>
        </ul>
    </nav>
    <!-- --- END SIDEBAR --- -->


    <!-- --- PAGE CONTENT WRAPPER --- -->
    <div class="page-content">

        <!-- --- YOUR HEADER --- -->
        <header class="header mb-4">
            <nav class="navbar navbar-expand-lg rounded shadow-sm">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Library</strong><strong>Management</strong></div>
                            <div class="brand-text brand-sm"><strong class="text-primary">L</strong><strong>M</strong></div>
                        </a>
                        <button class="sidebar-toggle btn btn-link text-white"><i class="fa fa-bars"></i></button>
                    </div>

                    <div class="right-menu list-inline no-margin-bottom d-flex align-items-center">
                        <div class="list-inline-item"><a href="#" class="nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                        <div class="list-inline-item dropdown">
                            <a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle">
                                <i class="icon-email"></i><span class="badge badge-danger">5</span>
                            </a>
                        </div>
                        <!-- Logout Text -->
                        <div class="list-inline-item logout ml-3">
                            <a href="#" class="nav-link">Logout <i class="icon-logout"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- --- END HEADER --- -->


        <!-- --- MAIN DASHBOARD CONTENT (The Modern Design) --- -->

        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="h4 font-weight-bold text-dark">Overview</h2>
                <p class="text-muted small">Welcome back Ahmed, here's what's happening at the library today.</p>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="row mb-5">
            <!-- Card 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small text-uppercase font-weight-bold mb-1">Total Books</p>
                            <h3 class="font-weight-bold text-dark mb-0">12,450</h3>
                        </div>
                        <div class="stat-icon-box bg-blue-light">
                            <i class="icon-notebook"></i>
                        </div>
                    </div>
                    <div>
                        <span class="trend-badge trend-up mr-2"><i class="fa fa-arrow-up mr-1"></i> 2.5%</span>
                        <span class="text-muted small">from last month</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small text-uppercase font-weight-bold mb-1">Active Members</p>
                            <h3 class="font-weight-bold text-dark mb-0">3,280</h3>
                        </div>
                        <div class="stat-icon-box bg-purple-light">
                            <i class="icon-people"></i>
                        </div>
                    </div>
                    <div>
                        <span class="trend-badge trend-up mr-2"><i class="fa fa-arrow-up mr-1"></i> 12%</span>
                        <span class="text-muted small">new this week</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small text-uppercase font-weight-bold mb-1">Issued Books</p>
                            <h3 class="font-weight-bold text-dark mb-0">845</h3>
                        </div>
                        <div class="stat-icon-box bg-yellow-light">
                            <i class="icon-book-open"></i>
                        </div>
                    </div>
                    <div>
                        <span class="trend-badge trend-down mr-2"><i class="fa fa-arrow-down mr-1"></i> 4.2%</span>
                        <span class="text-muted small">vs last week</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <p class="text-muted small text-uppercase font-weight-bold mb-1">Overdue</p>
                            <h3 class="font-weight-bold text-dark mb-0">42</h3>
                        </div>
                        <div class="stat-icon-box bg-red-light">
                            <i class="icon-exclamation"></i>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="text-muted small">Requires attention</span>
                        <a href="#" class="small text-primary font-weight-bold">View details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Lists -->
        <div class="row">
            <!-- Chart Section -->
            <div class="col-lg-8 mb-4">
                <div class="card border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="font-weight-bold text-dark mb-0">Circulation Statistics</h5>
                            <select class="custom-select custom-select-sm w-auto border-0 bg-light text-muted">
                                <option>This Year</option>
                                <option>Last Year</option>
                            </select>
                        </div>
                        <div style="height: 300px;">
                            <canvas id="circulationChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Categories -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body p-4">
                        <h5 class="font-weight-bold text-dark mb-4">Popular Categories</h5>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between text-muted small mb-1">
                                <span>Fiction</span>
                                <span class="font-weight-bold text-dark">45%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 45%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between text-muted small mb-1">
                                <span>Science & Tech</span>
                                <span class="font-weight-bold text-dark">30%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between text-muted small mb-1">
                                <span>History</span>
                                <span class="font-weight-bold text-dark">15%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 15%"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between text-muted small mb-1">
                                <span>Biography</span>
                                <span class="font-weight-bold text-dark">10%</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions Table -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                    <div class="card-header bg-white border-bottom-0 p-4 d-flex justify-content-between align-items-center">
                        <h5 class="font-weight-bold text-dark mb-0">Recent Issues</h5>
                        <a href="#" class="text-primary small font-weight-bold">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table modern-table mb-0">
                            <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>Book Title</th>
                                <th>Member</th>
                                <th>Issue Date</th>
                                <th>Status</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-muted font-weight-bold">#BK-2093</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded p-2 mr-3 text-center" style="width: 40px;">
                                            <i class="fa fa-book text-primary"></i>
                                        </div>
                                        <span class="font-weight-bold text-dark">The Great Gatsby</span>
                                    </div>
                                </td>
                                <td>John Doe</td>
                                <td class="text-muted">Oct 24, 2023</td>
                                <td><span class="status-badge status-issued">Issued</span></td>
                                <td class="text-right"><i class="fa fa-edit text-muted" style="cursor: pointer;"></i></td>
                            </tr>
                            <tr>
                                <td class="text-muted font-weight-bold">#BK-9921</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded p-2 mr-3 text-center" style="width: 40px;">
                                            <i class="fa fa-code text-success"></i>
                                        </div>
                                        <span class="font-weight-bold text-dark">Clean Code</span>
                                    </div>
                                </td>
                                <td>Ahmed Maarouf</td>
                                <td class="text-muted">Oct 22, 2023</td>
                                <td><span class="status-badge status-overdue">Overdue</span></td>
                                <td class="text-right"><i class="fa fa-edit text-muted" style="cursor: pointer;"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- --- END PAGE CONTENT --- -->

</div>

<script>
    // Simple Chart Logic
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('circulationChart').getContext('2d');
        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(79, 70, 229, 0.2)');
        gradient.addColorStop(1, 'rgba(79, 70, 229, 0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Books Issued',
                    data: [65, 59, 80, 81, 56, 95, 72, 90, 110, 95, 120, 105],
                    borderColor: '#4f46e5',
                    backgroundColor: gradient,
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { grid: { borderDash: [4, 4], drawBorder: false } },
                    x: { grid: { display: false } }
                }
            }
        });
    });
</script>

<!-- Bootstrap JS (simulating) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
