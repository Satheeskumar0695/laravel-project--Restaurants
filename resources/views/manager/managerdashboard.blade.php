
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager_Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/manager.css')}}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Manager-Dashboard</a>
                </div>
                <ul class="sidebar-nav">

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Table Reservations
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Book Table</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Table availability</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-regular fa-user pe-2"></i>
                              EmployeeManagement
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">update Employee Details </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages1" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Order Management
                        </a>
                        <ul id="pages1" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Dine-In</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Takeaway</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Online Order</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-share-nodes pe-2"></i>
                            Report Management
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                                    data-bs-toggle="collapse" aria-expanded="false">Reports</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Sales</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Revenue</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Inventory Management
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Add Inventory</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Update Inventory</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Hamburger button -->
                <button class="navbar-toggler" type="button" id="sidebarCollapseBtn">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    {{-- @if($name)--}}
                Welcome Manager
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">

                            <a href="/" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <i class="fa-solid fa-power-off pe-2"></i>
                                Logout
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="/" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>MangerDashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            {{-- <div class="p-3 m-1">
                                                <h4>Welcome Manager </h4>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var sidebar = document.getElementById('sidebar');
            var sidebarCollapseBtn = document.getElementById('sidebarCollapseBtn');

            sidebarCollapseBtn.addEventListener('click', function () {
                if (sidebar.classList.contains('collapsed')) {
                    sidebar.classList.remove('collapsed');
                } else {
                    sidebar.classList.add('collapsed');
                }
            });
        });
    </script>
</body>

</html>
